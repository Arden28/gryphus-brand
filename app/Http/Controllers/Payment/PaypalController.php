<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Exception;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    private $apiContext;

    public function __construct()
    {
        // Set up PayPal API context
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                env('PAYPAL_CLIENT_ID'),
                env('PAYPAL_SECRET')
            )
        );

        // $this->apiContext->setConfig(config('paypal.settings'));
        $this->apiContext->setConfig([
            'mode' => 'sandbox', // 'sandbox' or 'live'
            'http.ConnectionTimeOut' => 60,
            // 'http.Use_Curl' => false, // Disable SSL verification for cURL
            'http.CURLOPT_CAINFO' => base_path('cacert.pem'),
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'DEBUG',
        ]);
    }

    public function createPayment()
    {
        // Set up payment details
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item = new Item();
        $item->setName("Product Name")
            ->setCurrency("USD")
            ->setQuantity(1)
            ->setPrice(10.00); // Replace with your product price

        $itemList = new ItemList();
        $itemList->setItems([$item]);

        $details = new Details();
        $details->setSubtotal(10.00); // Replace with your product price

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(10.00) // Replace with your product price
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('paypal.success'))
            ->setCancelUrl(route('paypal.cancel'));

        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setTransactions([$transaction])
            ->setRedirectUrls($redirectUrls);
            // Add this line before the try block
            // $this->apiContext->setConfig(['http.Use_Curl' => false]);    $apiContext = new ApiContext(

        // $apiContext = new ApiContext(
        //         new OAuthTokenCredential(
        //         config('paypal.sandbox.client_id'),
        //         config('paypal.sandbox.secret')
        //     )
        // );

        // $apiContext->setConfig([
        //     'mode' => config('paypal.mode'),
        //     'http.ConnectionTimeOut' => 30,
        //     'log.LogEnabled' => true,
        //     'log.FileName' => storage_path('logs/paypal.log'),
        //     'log.LogLevel' => 'DEBUG',
        //     // 'http.Use_Curl' => false, // Disable SSL verification for cURL
        //     'http.CURLOPT_CAINFO' => base_path('cacert.pem'),
        // ]);


        try {
            $payment->create($this->apiContext);
            $approvalUrl = $payment->getApprovalLink();
            return redirect($approvalUrl);
        } catch (Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 500);
        }
    }

    public function paymentSuccess()
    {
        return view('paypal.success'); // Create a view for success page
    }

    public function paymentCancel()
    {
        return view('paypal.cancel'); // Create a view for cancellation page
    }

}
