@extends('layouts.app')

@section('content')
<a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>
<form action="/posts/{{ $post->id }}" method="PATCH">
{{ csrf_field() }}
@method('PUT')
{{ method_field('PATCH') }}
<div class="form-group">
           <label for="exampleInputEmail1">Title</label>
           <input name="title" value="{{$post->title}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
       </div>
       <div class="form-group">
           <label for="exampleInputPassword1">Description</label>
           <textarea name="description" class="form-control">{{$post->description}}</textarea>
       </div>


<button type="submit" class="btn btn-primary"> Update </button>
   </form>
@endsection