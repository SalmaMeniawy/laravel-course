@extends('layout.app')

@section('content')
<br>
<form action="{{route('posts.store')}} " method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Title </label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your post Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your Description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Post Creater</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Name">
  </div>
  <div>
  <button type="submit" class="btn btn-success">Submit</button>
  </div>
</form>



@endsection