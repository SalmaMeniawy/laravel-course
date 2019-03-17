
@extends('layouts.app')

@section('content')
<br>
  <a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>
    
<br>
<hr>
<section>

  <h1>Post Info : </h1>
  <h2> Title : {{$post->title}}</h2> 
  <h2> Description : {{$post->description}} </h2>
  <br>
  <hr>
  <br>
  <h1>User Info: </h1>
  <h2> Name : {{isset($post->user)?$post->user->name:'Not Found'}} </h2>
  <h2> Email : {{isset($post->user)?$post->user->email:'Not Found'}} </h2>
  <h2> Created At : {{$post->created_at->format('d/m/Y')}} </h2>
  <h1></h1>
</section>
<hr>
@endsection  




