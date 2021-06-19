<?php

namespace App\Http\Controllers;

use App\Models\userAwait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules;

class UserAwaitController extends Controller
{
    //
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'dateOfBirth' => 'required',
            'phoneNumber' => 'required|max:20',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = userAwait::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'phone_number' => $request->phoneNumber,
            'date_of_birth' => $request->dateOfBirth,
            'password' => Hash::make($request->password),
        ]);
        
        

        

        return redirect(route('login'));
    }
}
