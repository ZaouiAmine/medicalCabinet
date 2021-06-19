<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\userAwait;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class dashboardController extends Controller
{
    
    
    public function show()
    {
            
        if (Auth::user()->hasRole('admin')) {
            $forApproval= DB::table('user_awaits')
            ->select('*')
            ->paginate(6);
            
            
            return view('admin.adminapprovals',['users'=>$forApproval]);
        }


        if (Auth::user()->hasRole('doctor')) {
            $appointments= DB::table('appointments')
            ->select('*')
            ->paginate(6);
            
            return view('secretary.secretaryappointments',['appointments'=>$appointments]);
        }
        if (Auth::user()->hasRole('secretary')) {
            $appointments= DB::table('appointments')
            ->select('*')
            ->paginate(6);
            
            return view('secretary.secretaryappointments',['appointments'=>$appointments]);
        }
        if (Auth::user()->hasRole('patient')) {
            $appointments= DB::table('appointments')
            ->select('*')
            ->where('patient_id','=',Auth::user()->id)
            ->paginate(6);
            
            return view('secretary.secretaryappointments',['appointments'=>$appointments]);        }
    }
    public function showAccounts()
    {
        if(Auth::user()->hasRole('admin'))
        {
            $users=DB::table('users')->select('*')->join('role_user','role_user.user_id','=','users.id')->paginate(6);
            return view('admin.adminaccounts',['users'=>$users]);
        }
        if(Auth::user()->hasRole('doctor'))
        {
            $users=DB::table('users')->select('*')->join('role_user','role_user.user_id','=','users.id')->where('role_id','=','3')->orWhere('role_id','=','4')->paginate(6);
            return view('admin.adminaccounts',['users'=>$users]);
        }
        if(Auth::user()->hasRole('secretary'))
        {
            $users=DB::table('users')->select('*')->join('role_user','role_user.user_id','=','users.id')->where('role_id','=','4')->paginate(6);
            
            return view('admin.adminaccounts',['users'=>$users]);
        }
    }



    public function modifyaccount(Request $request)
    {   
        
        $users=User::where('id',$request->id)->first();
        
        return view('admin.modifyaccount',['users'=>$users]);
    }
    public function submit(Request $request)
    {   
        
        $users=User::where('id',$request->id)->first();

        $users->first_name=$request->new_first_name;
        $users->last_name=$request->new_last_name;
        $users->email=$request->new_email;
        $users->date_of_birth=$request->new_date_of_birth;
        $users->phone_number=$request->new_phone_number;
        $users->save();
        
        return redirect()->route('manageaccounts');
    }
    public function deleteaccount(Request $request)
    {
        $users=User::where('id',$request->id)->first();
        $users->delete();
        return redirect()->route('manageaccounts');
    }
    public function addaccount(Request $request)
    {
        $user = User::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'phone_number' => $request->phoneNumber,
            'date_of_birth' => $request->dateOfBirth,
            'password' => Hash::make($request->password),
        ]);
        $user->attachrole($request->role);
        event(new Registered($user));
        
        
        

        return redirect()->route('manageaccounts');
    }
    public function destroy(Request $request)
    {
        if (Auth::user()->hasRole('admin')) {
            $forDelete= userAwait::where('id',$request->id);
            $forDelete->delete();
            
            return redirect()->route('dashboard');
        }
    }
    public function shownewsletter()
    {
        $newsletters= DB::table('newsletters')
            ->select('*')
            ->paginate(10);
        
        return view('admin.newsletter',['newsletters'=>$newsletters]);
    }
        
}
