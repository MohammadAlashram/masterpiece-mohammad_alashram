<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Time;
use App\Models\User;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function book(Request $request)
    {
        // if (Booking::where('user_email','=', $request->user_name)->where('date', '=' , $request->date)->where('mentor_id', '=' , $request->mentor_id)->get()) {
        //     return redirect()->back()->with('Appointmentfalse','Sorry! you can not a lot off times in the same date and same mentor ');
        //     return redirect("/mentor/profile/$request->mentor_id")->with('Appointmentfalse','Sorry! you can not a lot off times in the same date and same mentor ');      

        // }
        $newdate = $request->date;
        $check = Booking::orderby('id','desc')
            ->where('user_id',auth()->user()->id)
            ->where('date', $newdate)
            ->exists();
        if($check){
        //   return redirect()->back()->with('message','You have already bookedn an appointment.Please wait to make next appointment');
          return redirect("/mentor/profile/$request->mentor_id")->with('Appointmentfalse','Sorry! you can not a lot off times in the same date and same mentor ');      

        }

        $newtime = $request->time;
        $booktime = Time::where('time','=',$newtime)->first();
        $booktime->status = 1;
        $booktime->save();
        Booking::create([
            'approval'         => 'pending',
            'time'             => $request->time,
            'message'          => $request->message,
            'date'             => $request->date,
            'mentor_id'        => $request->mentor_id,
            'user_id'          => $request->user_id,
            'user_name'        => $request->user_name,
            'user_gender'      => $request->user_gender,
            'user_image'       => $request->user_image,
            'user_email'       => $request->user_email,
        ]);

        return redirect("/bookingthanks");

        // dd($request);
    }
    public function userappointment(Request $request)
    {
        $user = auth()->user()->email;
        $bookingpending = Booking::where('user_email','=',$user)->where('approval', '=' ,'pending')->get();
        $bookingrejection = Booking::where('user_email','=',$user)->where('approval', '=' ,'rejection')->get();
        $booking = Booking::where('user_email','=',$user)->where('approval', '=' ,'approval')->get();
        if ($findmentor = Booking::where('user_email','=',$user)->first() !== NULL) {
            $findmentor = Booking::where('user_email','=',$user)->first();
            $mentorid = $findmentor->mentor_id;
        }else{
            $mentorid = 0;
        }
        // $findmentor = Booking::where('user_email','=',$user)->first();
        // $mentorid = $findmentor->mentor_id;
        $mentor = User::where('id','=',$mentorid)->first();
        // dd($mentor);
        return view('dashboard/userappointment', compact('booking','mentor','bookingpending','bookingrejection'));
    }

    public function mentorappointment(Request $request)
    {
        $user = auth()->user()->id;
        $bookingpending = Booking::where('mentor_id','=',$user)->where('approval', '=' ,'pending')->get();
        $bookingrejection = Booking::where('mentor_id','=',$user)->where('approval', '=' ,'rejection')->get();
        $booking = Booking::where('mentor_id','=',$user)->where('approval', '=' ,'approval')->get();
        $allbookingrequest = Booking::where('mentor_id','=',$user)->get();
        if ($findmentor = Booking::where('mentor_id','=',$user)->first() !== NULL) {
            $findmentor = Booking::where('mentor_id','=',$user)->first();
            $mentorid = $findmentor->mentor_id;
        }else{
            $mentorid = 0;
        }
        $mentor = User::where('id','=',$mentorid)->first();
        return view('dashboard/mentorappointment', compact('booking','mentor','bookingpending','bookingrejection','allbookingrequest'));
    }

    public function approval(Request $request , Booking $book)
    {
        $ban_for_next_7_days = Carbon::now()->addDays(7);
        $ban_for_next_14_days = Carbon::now()->addDays(14);
        $ban_permanently = 0;

        $userid = auth()->user()->id;
        $user = User::where('id','=',$userid)->first();
        $user->all_request = $user->all_request + 1;
        $user->count_request =$user->count_request + 1;
        $user->avg_request = (round($user->count_request / $user->all_request * 100 ,2));
        // $user->avg_request = ($user->count_request) / ($user->all_request) ;

        if ($user->avg_rating !== null && $user->avg_rating <= 1.2 && $user->count_rating >= 3 && $user->avg_request !== null && $user->avg_request <= 30 && $user->all_request >= 3){ 
            $user->banned_count = $user->banned_count + 1;
        };

        if ($user->banned_count >= 3){
                $bancount = $ban_permanently = 0;
        }else if ($user->banned_count == 2) {
                $bancount = Carbon::now()->addDays(14);
        }else if ($user->banned_count == 1) {
                $bancount = Carbon::now()->addDays(7);
        }else if ($user->banned_count == null){
                $bancount = null;
        };

        $user->banned_till = $bancount;     
        $user->save();

        $book->approval = "approval";
        $book->save();
        return redirect("/mentorappointment")->with('approval','Appointment time not available for this date ');      
    }
    public function rejection(Request $request , Booking $book)
    {
        $ban_for_next_7_days = Carbon::now()->addDays(7);
        $ban_for_next_14_days = Carbon::now()->addDays(14);
        $ban_permanently = 0;

        $userid = auth()->user()->id;
        $user = User::where('id','=',$userid)->first();
        $user->all_request = $user->all_request + 1;
        // $user->count_request =$user->count_request + 1;
        // $user->avg_request = ($user->count_request) / ($user->all_request) ;
        $user->avg_request = (round($user->count_request / $user->all_request * 100 ,2));

        if ($user->avg_rating !== null && $user->avg_rating <= 1.2 && $user->count_rating >= 3 && $user->avg_request !== null && $user->avg_request <= 30 && $user->all_request >= 3){ 
            $user->banned_count = $user->banned_count + 1;
        };

        if ($user->banned_count >= 3){
            $bancount = $ban_permanently = 0;
        }else if ($user->banned_count == 2) {
            $bancount = Carbon::now()->addDays(14);
        }else if ($user->banned_count == 1) {
            $bancount = Carbon::now()->addDays(7);
        }else if ($user->banned_count == null){
            $bancount = null;
        };

        $user->banned_till = $bancount;  
        $user->save();

        $book->approval = "rejection";
        $book->save();
        return redirect("/mentorappointment")->with('rejection','Appointment time not available for this date ');      
    }
}
