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
    public function create(){

        $users = User::all();
        return view('posts.create',[
            'users' => $users,
        ]);
    
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|min:3',
            'description'=> 'required|min:10',
        ],[
            'title.required'=> 'the Title is Required',
            'title.unique'=>'The Title Exist Before',
            'title.min'=>'Minimum length 3 Character',
            'description.required'=>'The Description is Required',
            'description.min'=> 'the Minimum Length for Description 10 character',
        ]);
        Post::create(request()->all());
        return redirect()->route('posts.index');

    }
    
    public function show(Post $post)
    {
       
        $post = Post::findOrFail($post);
       // $user = User::findOrFail($post->user_id);
        $myPost = json_decode(json_encode($post), true);// --> to convert it to array
        
        return view('posts.show',$myPost);
            
        ///old ONE///
        // return view('posts.show',[
        //     'post'=>$post,
        // ]);
    }
    // public function edit(Post $post)
    // {
        
    //     return view ('posts.edit',[
    //         'post'=> $post,
    //     ]);
    // }
    public function edit(Post $post)
    {
        $users= User::all();
        
        return view('posts.edit', [
            'post' => $post,
            'users' => $users,
        ]);
    }
    public function update( Request $request,Post $post)//UpdatePostRequest
    {
    
        $post->update([
            'title'=>$request->title,
            'descriptions'=>$request->description,
            ]);

        return redirect()->route('posts.index');
    }

    // public function update(Request $request ,Post $post)
    // {
    //    // return view('posts.update',['post'=> $post]);
    // //    $post->'title' = $request->'title'
    // //    $post->'description' = $post->'description';
    // dd($post);

    // }
    public function destroy(Post $post)
    {
        $post = Post::find($post);
        $post->delete();
        return view('posts.destroy',[
            'flash_message' => 'Deleted',
            'flash_message_important' => false,
        ]);
    }
}
