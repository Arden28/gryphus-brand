<?php

namespace App\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
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

class Checkout extends Component
{

    public $name, $address, $city, $country, $zip, $phone, $email, $note;

    public bool $create_account, $ship_other;

    public $selectedGateway;

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

        Cart::instance('cart')->destroy();

        // return redirect(route('home'));

        // You can redirect or perform other actions after payment processing
    }

    private function processStripePayment()
    {
        // Implement Stripe payment processing logic
        // Redirect to Stripe or handle the API call
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
