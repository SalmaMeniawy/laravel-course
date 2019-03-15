
@extends('layouts.app')

@section('content')
<br>
  <a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>
    
<br>
<section>

  <h1>Post Info : </h1>
  <h2> Title :</h2> <br><br>
  <h1> {{$myPost['id']}}</h1>
  
  <h1> {{isset($post->user)?$post->user->name:'Not Found'}}</h1>
  


</section>

@endsection  




