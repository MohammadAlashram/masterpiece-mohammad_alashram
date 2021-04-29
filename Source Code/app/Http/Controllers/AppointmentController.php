<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/appointment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'date'=>'required|unique:appointments,date,NULL,id,user_id,'.Auth::id(),
            'time'=>'required'
        ];
        $this->validate($request, $rules);

        $appointment = Appointment::create([
            'user_id'=> auth()->user()->id,
            'date' => $request->date
        ]);
        foreach($request->time as $time){
            Time::create([
                'appointment_id'=> $appointment->id,
                'time'=> $time,
                //'stauts'=>0
            ]);
        }
        return redirect()->back()->with('add','');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        // return view('dashboard/appointment_check');
        // return view('dashboard/appointment_check');

        $myappointments = Appointment::latest()->where('user_id',auth()->user()->id)->get();
        return view('dashboard/appointment_check',compact('myappointments'));


    }

    // public function check(Request $request)
    // {
    //     // return view('dashboard/appointment_check');
    //     // return view('dashboard/appointment_check');
    //     return"ok";
    // }

    public function check(Request $request){

        $date = $request->date;
        $appointment= Appointment::where('date',$date)->where('user_id',auth()->user()->id)->first();
        if(!$appointment){
            return redirect()->to('/appointment/edit')->with('errmessage','Appointment time not available for this date '. $request->date);
        }
        $appointmentId = $appointment->id;
        $times = Time::where('appointment_id',$appointmentId)->get();

       
        return view('dashboard/appointment_check',compact('times','appointmentId','date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    public function updateTime(Request $request){
        $appointmentId = $request->appoinmentId;
        $appointment = Time::where('appointment_id',$appointmentId)->delete();
        foreach($request->time as $time){
            Time::create([
                'appointment_id'=>$appointmentId,
                'time'=>$time,
                'status'=>0
            ]);
        }
        return redirect("/appointment/edit")->with('update','');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
