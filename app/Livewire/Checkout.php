<?php

namespace App\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Modules\Dashboard\app\Models\Order;

use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use Stripe\Charge;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Stripe\Token;

class Checkout extends Component
{

    public $intent, $order;
    public $name, $address, $city, $country, $zip, $phone, $email, $note;

    public bool $create_account, $ship_other;

    public $selectedGateway = 'stripe';

    // Stripe
    public $cardNum;
    public $cardCvc;
    public $cardExpiryMonth;
    public $cardExpiryYear;

    public function mount(){
        if(auth()){
            $this->name = auth()->user()->name;
            $this->phone = auth()->user()->phone;
            $this->email = auth()->user()->email;
        }
    }

    protected $rules = [
        'name' => 'required|string',
        'city' => 'required|string',
        'country' => 'required|string',
        'zip' => 'nullable|string',
        'phone' => 'required|string',
        'email' => 'required|string',
        'note' => 'nullable|string',
        // 'cardNum' => 'required|integer|min:15|max:17',
        // 'cardCvc' => 'required|integer|digits:3',
        // 'cardExpiryMonth' => 'required|integer',
        // 'cardExpiryYear' => 'required|integer',
    ];

    public function render()
    {
        return view('livewire.checkout');
    }

    public function selectGateway($gateway)
    {
        $this->selectedGateway = $gateway;
    }


    public function processPayment()
    {
        $this->validate();

        $order = Order::create([
            'sub_total' => convertToInt(Cart::instance('cart')->subtotal()),
            'total_amount' => convertToInt(Cart::instance('cart')->total()),
            'quantity' => Cart::instance('cart')->count(),
            'payment_method' => $this->selectedGateway,
            'payment_status' => 'unpaid',
            // 'status' => 'proccess',
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'country' => $this->country,
            'post_code' => $this->zip,
            'address1' => $this->address,

        ]);

        // Implement the logic for each payment gateway
        if ($this->selectedGateway === 'stripe') {
            $this->processStripePayment();
        } elseif ($this->selectedGateway === 'paypal') {
            $this->processPayPalPayment($order);
        } elseif ($this->selectedGateway === 'cod') {
            $this->processCODPayment();
        }
        $order->save();
        $this->order = $order->id;

        Cart::instance('cart')->destroy();

        return redirect(route('home'));

        // You can redirect or perform other actions after payment processing
    }

    public function processStripePayment()
    {

        // Example: Stripe token creation
        $token = $this->createStripeToken();

        // Stripe::setApiKey(env('STRIPE_KEY'));
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $payment_intent = PaymentIntent::create ([
                'amount' => convertToInt(Cart::instance('cart')->total()),
                'currency' => 'EUR',
                'description' => 'Payment From Koverae',
                // 'payment_method_types' => ['card'],
                "source" => $token,
        ]);
		$this->intent = $payment_intent->client_secret;

        Session::flash('success', 'Payment has been successfully processed.');
    }

    // Create Stripe Token
    private function createStripeToken()
    {
        // Example: Stripe token creation logic
        Stripe::setApiKey(env('STRIPE_KEY'));

        return Token::create([
            'card' => [
                'number' => $this->cardNum,
                'cvc' => $this->cardCvc,
                'exp_month' => $this->cardExpiryMonth,
                'exp_year' => $this->cardExpiryYear,
            ],
        ]);
    }

    private function resetForm()
    {
        // Reset form fields or any other necessary data
        $this->cardNum = '';
        $this->cardCvc = '';
        $this->cardExpiryMonth = '';
        $this->cardExpiryYear = '';
    }

    private function processPayPalPayment($order)
    {
        return redirect(route('paypal.payment', ['order' => $order]));
    }

    private function processCODPayment()
    {
        // Implement Cash on Delivery payment processing logic
        // You might want to update the order status or perform other actions
    }
}
