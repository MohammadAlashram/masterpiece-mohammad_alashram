<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\logs;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class MentorController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $roles = User::where('role', "online")->count();
        // $userCount = User::count();

        $departments = Department::all();
    
        $allmentor = User::where('role', '=', 'mentor')->get();
        $mentorCount = 0;
        foreach ($allmentor as $mentor) {
            $mentorCount = $mentorCount +1;
        }

        $mentorCountImg = User::query()
        ->where('role', 'LIKE', "mentor")
        ->take(7)
        ->get();

        $mentor = User::query()
            ->where('role', 'LIKE', "mentor")
            // ->take(5)
            ->get();
        // return view('dashboard/admin', compact('admin'));
        return view('dashboard/mentor', compact('mentor','mentorCount','mentorCountImg','departments'));
    }

    public function mentorRegister()
    {

        $departments = Department::all();
        return view('auth/mentor', compact('departments'));
    }

    public function mentordatatable()
    {
        $mentors = User::query()
            ->where('role', 'LIKE', "mentor")
            ->get();
        return view('dashboard/mentor_datatable', compact('mentors'));
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
            'name'         => 'required',
            'email'        => ['required','unique:users'],
            'phone'        => 'required',
            'password'     => 'required',
            'department'   => 'required',
            'description'  => 'required',
            'education'    => 'required',
            'address'      => 'required',
        ];
        $this->validate($request, $rules);
        // return back()->with("status", "Your message has been received, We'll get back to you shortly.");

        if($request->file('image')){
        $image = $request->file('image');
        $newImgName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('dashboard_assets/adminImages'), $newImgName);
        }else{
        $newImgName = 'default.jpg';
        }

        User::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'password'     => Hash::make($request->password),
            'department'   => $request->department,
            'description'  => $request->description,
            'education'    => $request->education,
            'address'      => $request->address,
            'image'        => $newImgName,
            'gender'       => $request->gender,
            'role'         => $request->role,
        ]);

        $action        = 'Add';
        $doer          = auth()->user()->email;
        $user          = 'Mentor Detalis : ' . ' Email : ' . $request->email;
        $color         = 'success';
        $description   = 'Mentor Is Added';

        logs::create([
            'action'       => $action,
            'doer'         => $doer,               
            'user'         => $user,  
            'color'        => $color,  
            'description'  => $description,         
        ]);

        // return redirect("/mentor");
        return redirect("/mentor")->with('add','');

    }

    public function storePublic(Request $request)
    {
        $rules = [
            'name'         => 'required',
            'email'        => ['required','unique:users'],
            'phone'        => 'required',
            'password'     => 'required',
            'department'   => 'required',
            'description'  => 'required',
            'education'    => 'required',
            'address'      => 'required',
            'gender'       => 'required',
            'image'        => 'required',
        ];
        $this->validate($request, $rules);
        // return back()->with("status", "Your message has been received, We'll get back to you shortly.");

        if($request->file('image')){
        $image = $request->file('image');
        $newImgName = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('dashboard_assets/adminImages'), $newImgName);
        }else{
        $newImgName = 'default.jpg';
        }

        User::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'password'     => Hash::make($request->password),
            'department'   => $request->department,
            'description'  => $request->description,
            'education'    => $request->education,
            'address'      => $request->address,
            'image'        => $newImgName,
            'gender'       => $request->gender,
            'role'         => $request->role,
        ]);


        $newUser = User::where('email', $request->email)->first();
        Auth::login($newUser);

        $action        = 'Self registration';
        $doer          = $request->email;
        $user          = 'Mentor Detalis : ' . ' Email : ' . $request->email;
        $color         = 'success';
        $description   = 'Mentor Is Added';

        logs::create([
            'action'       => $action,
            'doer'         => $doer,               
            'user'         => $user,  
            'color'        => $color,  
            'description'  => $description,         
        ]);

        // return redirect("/");
        return redirect('/')->with('message','');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        // $admin = User::query()
        // ->where('role', 'LIKE', "admin")
        // ->orWhere('role', 'LIKE', "superadmin")
        // ->get();
        $departments = Department::all();

    return view('dashboard/mentor_edit', compact('user','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $rules = [
            'name'         => 'required',
            'email'        => 'required',
            'phone'        => 'required',
            'password'     => 'required',
            'department'   => 'required',
            'description'  => 'required',
            'address'      => 'required',
        ];
        $this->validate($request, $rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $newImgName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('dashboard_assets/adminImages'), $newImgName);
            $user->image = $newImgName;
        }else{
            $user->image =  $user->image;
        }

        // $image = $request->file('image');
        // $newImgName = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('dashboard_assets/adminImages'), $newImgName);

        $user->name        = $request->name;
        $user->email       = $request->email;
        $user->phone       = $request->phone;
        $user->password    = Hash::make($request->password);
        $user->department  = $request->department;
        // $user->education   = $request->education;
        $user->description = $request->description;
        $user->address     = $request->address;
        // $user->image = $newImgName;
        $user->save();

        $action        = 'Edit Mentor';
        $doer          = auth()->user()->email;
        $user          = 'Mentor Detalis : ' . ' Email : ' . $request->email;
        $color         = 'warning';
        $description   = 'Mentor Is Edited';

        logs::create([
            'action'       => $action,
            'doer'         => $doer,               
            'user'         => $user,  
            'color'        => $color,  
            'description'  => $description,         
        ]);

        // return redirect("/mentor");
        return redirect("/mentor")->with('update','');
    }


    public function updateprofile(Request $request, user $user)
    {
        $rules = [
            'name'        => 'required',
            'email'       => 'required',
            'phone'       => 'required',
            'address'     => 'required',
            'description' => 'required',
        ];
        $this->validate($request, $rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $newImgName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('dashboard_assets/adminImages'), $newImgName);
            $user->image = $newImgName;
        }else{
            $user->image =  $user->image;
        }

        // $image = $request->file('image');
        // $newImgName = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('dashboard_assets/adminImages'), $newImgName);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // $user->password = Hash::make($request->password);
        // $user->position = $request->position;
        $user->description = $request->description;
        $user->address = $request->address;
        // $user->image = $newImgName;
        $user->save();

        $action        = 'Selif Update Profile';
        $doer          = auth()->user()->email;
        $user          = 'Prfile Updated : ' . ' Email : ' . $request->email;
        $color         = 'success';
        $description   = auth()->user()->name .  ' '  .  ' Updated His Profile';

        logs::create([
            'action'       => $action,
            'doer'         => $doer,               
            'user'         => $user,  
            'color'        => $color,  
            'description'  => $description,         
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
    public function destroy(user $user)
    {
        $user->delete($user);
        // $id->save();

        $action        = 'Delete';
        $doer          = auth()->user()->email;
        $user          = 'Mentor Is Deleted' . ' Email : ' . $user->email;
        $color         = 'danger';
        $description   = 'Mentor Is Deleted';

        logs::create([
            'action'       => $action,
            'doer'         => $doer,               
            'user'         => $user,  
            'color'        => $color,  
            'description'  => $description,     
        ]);

        // return back();
        return redirect("/mentor")->with('delete','');
    }
}   
