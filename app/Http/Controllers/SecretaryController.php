<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SecretaryController extends Controller
{
    //
    public function showmedications()
    {
        
        $meds=DB::table('medicines')->select('*')->paginate(6);

        return view('secretary.showmedications',['meds'=>$meds]);
    }
    public function addmedication(Request $request)
    {
        $med=Medicine::create([
            'scientific_name'=> $request->scientific_name,
            'commercial_name'=>$request->commercial_name,
        ]);
        return redirect()->route('managemedications');
    }
    public function addmedicationform()
    {
        return view('secretary.addmedication');
    }
    public function deletemedication(Request $request)
    {   
        $medication=Medicine::where('id',$request->id)->first();
        $medication->delete();
        return redirect()->route('dashboard');
    }
    public function addappointment(Request $request)
    {   
        $user = appointment::create([
            'appointment_date' => $request->appointment_date,
            'appointment_hour' => $request->appointment_hour,
            'done' => $request->done,
            'patient_id' => $request->patient_id,
            
        ]);
             
        
        

        return redirect()->route('dashboard');
    }
    public function deleteappointment(Request $request)
    {
        $appointment=appointment::where('id',$request->id)->first();
        $appointment->delete();
        return redirect()->route('dashboard');
    }
    public function chooseprofile()
    {
        $users=DB::table('users')->select('*')->join('role_user','role_user.user_id','=','users.id')->where('role_id','=','4')->paginate(6);

        return view('secretary.chooseprofile',['users'=>$users]);
    }
    

    public function choosedate(Request $request)
    {
        
        return view('secretary.addappointment',['data'=>$request->id]);
    }




    public function submit(Request $request)
    {
        return view('secretary.addappointment');
    }






}
