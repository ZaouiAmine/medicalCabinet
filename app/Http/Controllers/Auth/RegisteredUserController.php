<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\userAwait;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

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
        $docawait = DB::table('user_awaits')->where('id', $request->id)->first();
        

        $user = User::create([
            'first_name' => $docawait->first_name,
            'last_name' => $docawait->last_name,
            'email' => $docawait->email,
            'phone_number' => $docawait->phone_number,
            'date_of_birth' => $docawait->date_of_birth,
            'password' => Hash::make($docawait->password),
        ]);
        $user->attachrole('doctor');
        event(new Registered($user));

        
        $docawaitdelete= userAwait::where('id',$request->id);
        $docawaitdelete->delete();

        return redirect()->route('dashboard');
    }
}
