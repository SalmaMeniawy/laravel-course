
@extends('layouts.app')

@section('content')
<br>
  <a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>
    
<br>
<section>

  <h1>Post Info : </h1>
  <h2> Title :</h2> <br><br>
  <h2>{{$post->title}}</h2> 
  <h1> </h1>
  <h1> </h1>
  <h1></h1>
</section>

@endsection  




