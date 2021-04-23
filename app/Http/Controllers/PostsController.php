<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use App\Models\User; 
class PostsController extends Controller
{
    // createUser
    public function createUser()
    {
        return view('signUp');
    }

    public function storUser()
    {
        $name       = request()->name;
        $email      = request()->email;

        $userDB     = User:: create([
            'name'  => $name,
            'email' => $email
        ]);
        return redirect(route('posts.index'));
    }

    public function index()
    {
        //preing all of the posts and query on all of data all()
        // the all of data here ==>> Post
        //  $user  = User::all();
        //   dd($user);
        $postFormDB  = Post:: all();
        return view('posts/index' , ['posts'=> $postFormDB]);
    }


    // show
    public function show($pid)
    {
     
        $singlePost  = Post:: findOrFail($pid); //////// lock here 
       
        return view('posts/show' , ['post' => $singlePost]);
    }

    // to create form
    public function create()
    {
        $user = User:: all();
        return view('posts/create',['users' => $user]);
    }

    // stor 
    public function stor()
    {
        $title         = request()->title;
        $description   = request()->description;
        $userID        = request()->user_id;
        $postDB        = Post:: create([
            'title'          => $title,
            'description'    => $description,
            'user_id'        => $userID
        ]);
        return redirect(route('posts.index'));
    }

    // edit
    public function edit($pid)  //Post $pid =>7
    {
        $singlePost  = Post:: findOrFail($pid); //////// lock here 
        $users  = User:: all();
        return view('posts.edit' , ['post' => $singlePost , 'users' => $users]); // posts.edit like posts/edit
    }

    // update
    public function update ($pid , Request $request)
    {
        $singlePost  = Post:: findOrFail($pid); //////// lock here 

        $singlePost->update([
            'title'       => $request->title, /// new way
            'description' => $request->description,
            'user_id'     => $request->user_id 
        ]);

        return redirect()->route('posts.index');
    }

    // delete
    public function destroy($pid)
    {
        // Post:: where('id' , $pid)->delete(); //// in single query

        $singlePost = Post:: findOrFail($pid);
        $singlePost->delete();
        return redirect()->route('posts.index');
    }

}
