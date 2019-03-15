<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use App\Post;
class PostsController extends Controller
{
    
    public function index()
    {
        $posts = Post::paginate(3);
        //return Post::all(); -----> to get objects of JSON without changes
        return PostResource::Collection($posts);
    }
    public function show($post)
    {
        $post = Post::findOrFail($post);
        return new PostResource($post);
    }
    public function store(Request $request)
    {
        Post::create($request->all());
        return response()->json([
            'message' => 'Post Created Successfully'
        ],201);
    }
}
