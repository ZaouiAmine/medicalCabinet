<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    //
    public function acceptappointment(Request $request)
    {   
        $appointments= 
        DB::table('appointments')
            ->select('*')
            ->where('id',$request->id)->first();
        $patient=DB::table('users')
            ->select('*')
            ->where('id',$appointments->patient_id)->first();
            
        // $consultations=Consultation::all()->paginate(4);
        $consultations= DB::table('consultations')
            ->select('*')
            ->paginate(4);
        

        return view('doctor.patientprofile',['patient'=>$patient,'consultations'=>$consultations,'app_id'=>$request->id]);
    }
    public function addconsultation(Request $request)
    {
        
        $medications=DB::table('medicines')
        ->select('*')
        ->paginate(100);
        return view('doctor.addconsultation',['id'=>$request->id,'medications'=>$medications,'app_id'=>$request->app_id]);
    }
    
    public function submitconsultation(Request $request)
    {
        Consultation::create([
            'motive'=>$request->motive,
            'consultation_and_examinations'=>$request->consultation_and_examinations,
            'patient_id'=>$request->id,
        ]);
        if (!$request->perscription==null) {
            $last_consultation=DB::table('consultations')->latest('id')->first();
            
            $id=$last_consultation->id;
            
            Prescription::create([
                'consultation_id'=>$id,
                'content'=>$request->perscription,
            ]);
        }
        
        $appointments= 
        appointment::where('id',$request->app_id)->first();

            $appointments->delete();
        return redirect()->route('dashboard');
    }
    public function submitperscription(Request $request)
    {
        Consultation::create([
            'motive'=>$request->motive,
            'consultation_and_examinations'=>$request->consultation_and_examinations,
            'patient_id'=>$request->id,
        ]);
        return view('doctor.addperscription',['id'=>$request->id]);
    }
}
