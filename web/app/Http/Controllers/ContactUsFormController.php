<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsFormController extends Controller
{
    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {
        Contact::create($request->all());
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
