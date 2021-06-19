<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:20',
            'message' => 'required|string|max:400',
            'email' => 'required|string|email|max:255',
        ]);
        Contact::create([
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return redirect()->route('contact');
    }
}
