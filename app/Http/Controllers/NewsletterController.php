<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            
            'email' => 'required|string|email|max:255|unique:newsletters',
        ]);
        Newsletter::create([
            
            'email' => $request->email,
            
        ]);
        return back();
    }
}
