@extends('layouts.app')

@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>

   <form action="{{route('posts.update')}}" method="POST">
       @csrf
       <div class="form-group">
           <label for="exampleInputEmail1">Title</label>
           <input name="title" value="{{$post->title}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
       </div>
       <div class="form-group">
           <label for="exampleInputPassword1">Description</label>
           <textarea name="description" class="form-control">{{$post->description}}</textarea>
       </div>

   <button type="submit" class="btn btn-primary">Edit </button>
   </form>

@endsection