<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\logs;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::paginate(4);

        // $posts = Post::all()->sortByDesc('created_at')->take(3);

        return view('dashboard/post', compact('posts'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $rules = [
            'type'         => 'required',
            'title'        => 'required',
            'body'         => 'required',
            'image'        => 'required',
            
        ];
        $this->validate($request, $rules);

        if ($request->file('image')) {
            $image = $request->file('image');
            $newImgName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('dashboard_assets/postImages'), $newImgName);
        } else {
            $newImgName = 'default.jpg';
        }

        Post::create([
            'type'             => $request->type,
            'image'            => $newImgName,
            'title'            => $request->title,
            'body'             => $request->body,
            'realDate'         => $request->realDate,
            'day'              => $request->day,
            'month'            => $request->month,
            'year'             => $request->year,
        ]);

        $action        = 'Add Post';
        $doer          = auth()->user()->email;
        $user          = 'Post Detalis : ' . ' Title : ' . $request->title;
        $color         = 'success';
        $description   = 'Post Is Added';

        logs::create([
            'action'       => $action,
            'doer'         => $doer,
            'user'         => $user,
            'color'        => $color,
            'description'  => $description,
        ]);

        // return redirect("/post");
        return redirect("/post")->with('add','');
    }


    public function edit(Post $post)
    {
        return view('dashboard/post_edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $rules = [
            'type'         => 'required',
            'title'        => 'required',
            'body'         => 'required',
        ];
        $this->validate($request, $rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $newImgName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('dashboard_assets/postImages'), $newImgName);
            $post->image = $newImgName;
        }else{
            $post->image =  $post->image;
        }

        $post->type     = $request->type;
        $post->title    = $request->title;
        $post->body     = $request->body;
        $post->realDate = $request->realDate;
        $post->day      = $request->day;
        $post->month    = $request->month;
        $post->year     = $request->year;

        $post->save();


        $action        = 'Edit Post';
        $doer          = auth()->user()->email;
        $user          = 'Post Detalis : ' . ' Title : ' . $request->title;
        $color         = 'warning';
        $description   = 'Post Is Edited';

        logs::create([
            'action'       => $action,
            'doer'         => $doer,
            'user'         => $user,
            'color'        => $color,
            'description'  => $description,
        ]);
        // return redirect('/post');
        return redirect("/post")->with('update','');

    }

    public function destroy(Post $post)
    {
        $post->delete($post);
        // $id->save();
        $action        = 'Delete Post';
        $doer          = auth()->user()->email;
        $user          = 'Admin Is Deleted Post' . ' Id : ' . $post->id;
        $color         = 'danger';
        $description   = 'Post Is Deleted';

        logs::create([
            'action'       => $action,
            'doer'         => $doer,               
            'user'         => $user,  
            'color'        => $color,  
            'description'  => $description,     
        ]);

        // return back();
        return redirect("/post")->with('delete','');
    }
}
