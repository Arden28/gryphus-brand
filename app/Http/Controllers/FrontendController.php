<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Modules\Dashboard\app\Emails\ContactMail;
use Modules\Dashboard\app\Models\ContactMessage;

class FrontendController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('brand.about');
    }

    public function contact(){
        return view('brand.contact');
    }

    public function legal(){
        return view('brand.legal-mention');
    }

    public function processForm(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|min:11',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        $data = $request->all();
        // Save to database
        ContactMessage::create($data);

        // Send email (you may need to configure mail settings in .env)
        Mail::to('contact@gryphusbrand.com')->send(new ContactMail($data));

        // Redirect or show a success message
        return redirect()->route('contact')->with('success', 'Votre message a bien été reçu! Nous vous reviendrons dans les prochaines 24h.');
    }
}
