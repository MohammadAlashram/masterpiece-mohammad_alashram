<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contactus;
use App\Models\Post;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $users = User::query()
            ->orderBy('avg_rating', 'DESC')
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->take(4)
            // ->paginate(9);
            ->get();

        // $users = User::orderBy('avg_rating', 'DESC')->where('name',"%{$search}%")->paginate(9);

        $posts = Post::query()
            ->orderBy('created_at', 'DESC')
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->take(3)
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('users','posts'));
    }

    public function adminsearch(Request $request){
        // Get the search value from the request
        $search = $request->input('adminsearch');
    
        // Search in the title and body columns from the posts table
        $admins = User::where('role', '=', 'mentor')

        // $admins = User::query()
            // ->where('name', 'LIKE', "%{$search}%", 'AND' ,'name','LIKE' ,"%{$search}%" )
            // ->where('name', 'LIKE', "%{$search}%", 'AND' ,'role','!==' ,'admin' , 'AND' ,'role','!==' ,'superadmin' )
            ->where('name', 'LIKE', "%{$search}%", 'AND' ,'role', '=', 'mentor' )
            // ->orWhere('email', 'LIKE', "%{$search}%")
            // ->orWhere('role', 'LIKE', "$search")
            ->orWhere('department', 'LIKE', "%{$search}%", 'AND' ,'role', '=', 'mentor')
            // ->orWhere('gender', 'LIKE', "$search")
            // ->take(5)
            ->get();    
        $msg = Contactus::query()
            ->where('subject', 'LIKE', "%{$search}%")
            ->orWhere('message', 'LIKE', "%{$search}%")
            ->orWhere('msgstatus', 'LIKE', "$search")
            // ->take(5)
            ->get();    
        // Return the search view with the resluts compacted
        return view('dashboard/admin_search', compact('admins','msg'));
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
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
