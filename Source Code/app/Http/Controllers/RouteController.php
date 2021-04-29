<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\User;
use App\Models\Visitor;
use App\Models\Time;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RouteController extends Controller
{
    // protected $date;
    // private $date;

    public function welcome()
    {
        // $posts = Post::all();

        if (Auth::user()){
        $auth = auth()->user()->id;
        }else {
        $auth = 0;
        }

        $departments = Department::all();

        $posts = Post::all()->sortByDesc('created_at')->take(3);
        if (request('date')) {
            $mentors = $this->findMentorsBasedOnDate(request('date'));
            return view('welcome', compact('mentors', 'posts'));
        }
        $mentors = Appointment::where('date', date('Y-m-d'))->get();

        // $allmentors = User::where('role','mentor')->get();
        // $allmentors = User::where('role','mentor')->sortByDesc('avg_rating')->paginate(4);
        // $allmentors = User::all()->sortByDesc('avg_rating')->take(4);
        $allmentors = User::orderBy('avg_rating', 'DESC')->where('role', 'mentor')->where('banned_till', NULL)->where('id', '!=' , $auth)->paginate(9);
        return view('welcome', compact('mentors', 'posts', 'allmentors', 'departments'));
    }

    public function mentors()
    {
        if (Auth::user()){
        $auth = auth()->user()->id;
        }else {
        $auth = 0;
        }
        // $posts = Post::all();
        $departments = Department::all();

        $posts = Post::all()->sortByDesc('created_at')->take(4);

        if (request('date')) {
            $mentors = $this->findMentorsBasedOnDate(request('date'));
            return view('welcome', compact('mentors', 'posts'));
        }
        $mentors = Appointment::where('date', date('Y-m-d'))->get();

        // $allmentors = User::where('role','mentor')->get();
        // $allmentors = User::where('role','mentor')->sortByDesc('avg_rating')->paginate(4);
        // $allmentors = User::all()->sortByDesc('avg_rating')->take(4);
        $allmentors = User::orderBy('avg_rating', 'DESC')->where('role', 'mentor')->where('banned_till', NULL)->where('id', '!=' , $auth)->paginate(6);
        return view('mentors', compact('mentors', 'posts', 'allmentors', 'departments'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function blogs()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(9);
        return view('blog', compact('posts'));
    }

    public function singleblog(Post $post)
    {
        $departments = Department::all();
        $posts = Post::all()->sortByDesc('created_at')->take(4);
        return view('single_blog', compact('post', 'posts', 'departments'));
    }

    public function department(Department $department)
    {
        if (Auth::user()){
            $auth = auth()->user()->id;
            }else {
            $auth = 0;
        }
        $departments = Department::all();
        $posts = Post::all()->sortByDesc('created_at')->take(4);

        $department = $department->department_name;

        $allmentors = User::orderBy('avg_rating', 'DESC')->where('department', $department)->where('banned_till', NULL)->where('id', '!=' , $auth)->paginate(6);
        return view('department', compact('posts', 'allmentors', 'department'));
    }

    public function publicprofile(Request $request, User $user)
    {
        $date = $request->date;
        $mindate = Carbon::now()->toDateString();
        // dd($mindate);
        return view('publicprofile', compact('user', 'date','mindate'));
    }

    public function appointmentprofile(Request $request, User $user)
    {
        // $date = $request->date;
        $date = Session::get('date');
        $mindate = Carbon::now()->toDateString();
        // dd($date);
        $appointment= Appointment::where('date',$date)->where('user_id',$user->id)->first();
        $appointmentId = $appointment->id;
        $times = Time::where('appointment_id',$appointmentId)->where('status',0)->get();
        return view('appointmentprofile', compact('user', 'date','appointmentId','times','mindate'));
    }

    public function check(Request $request, User $user){

        $date = $request->date;
        $mindate = Carbon::now()->toDateString();
        $appointment= Appointment::where('date',$date)->where('user_id',$user->id)->first();
        if(!$appointment){
            return redirect()->back()->with('Appointmentfalse','Sorry! Appointment time not available for this date '. $request->date);
        }
        $appointmentId = $appointment->id;
        $times = Time::where('appointment_id',$appointmentId)->where('status',0)->get();
        return view('appointmentprofile', compact('user','times','appointmentId','date','mindate'));
    }
    
    public function get(Request $request, User $user){

        $date = $request->date;
        // Session::put('date', $date);
        session(['date' => $date]);
        $appointment= Appointment::where('date',$date)->where('user_id',$user->id)->first();
        if(!$appointment){
            return redirect("/mentor/profile/$user->id")->with('Appointmentfalse','Appointment time not available for this date '. $request->date);      
            // dd($appointment);
        }
        $appointmentId = $appointment->id;
        $times = Time::where('appointment_id',$appointmentId)->where('status',0)->get();

        // $comment = Comment::where('post_id', '=' ,$post)->get();
        // $user= $comment->user_id;
        // $usercomment = User::where('id', '=' ,$user)->first();

        return redirect()->back();  
        // return redirect()->back()->with( ['user' => $user],['times' => $times],['appointmentId' => $appointmentId],['date' => $date] );  
        // return view('appointmentprofile', compact('user','times','appointmentId','date'));
        // return view('publicprofile', compact('user','times','appointmentId','date'));
        // return redirect("/mentor/profile/appointment/check/$user->id")->with( ['user' => $user],['times' => $times],['appointmentId' => $appointmentId],['date' => $date] );
        // return redirect("/mentor/profile/appointment/check/$user->id")->with(['user' => $user],['times' => $times],['appointmentId' => $appointmentId],['date' => $date]);      
        // return redirect()->route('appointmentprofile')->with( ['user' => $user],['times' => $times],['appointmentId' => $appointmentId],['date' => $date] );
        // dd($times);
    }



    // public function support()
    // {
    //     return view('dashboard.support');
    // }

    public function bookingthanks()
    {
        return view('bookingthanks');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function errorPage()
    {
        return view('404');
    }

    public function back()
    {
        return back();
    }
    
}
