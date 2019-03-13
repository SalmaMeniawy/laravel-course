<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class PostsController extends Controller
{
    public function index()
    {
       
        
        return view('posts.index',[
            'posts'=> Post::all()
        ]);
    }
    public function store()
    {
        Post::create(request()->all());
        return redirect()->route('posts.index');

    }
    public function create(){
        $users = User::all();
        return view('posts.create',[
            'users' => $users,
        ]);
        
    }
    // public function play()
    // {
       
    //     //dd($data);
    //     $data = Post::all();
    //     dd($data);
    //     return view('posts.play',$data);
    // }
}