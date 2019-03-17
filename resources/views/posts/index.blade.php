
        @extends('layouts.app')

        @section('content')
        <br>
        <a href="{{route('posts.create')}}" class= "btn btn-success btn-block">Create Post</a>
        <br>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#Pagination Ponus</th>
            <th scope="col">Title</th>
            <th scope="col">Posted by </th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
            <th scope="col">Slug for Title </th>

            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{isset($post->user)?$post->user->name:'Not Found'}}</td>
            <td>{{$post->created_at->format('d/m/Y')}}</td>
            <td>
                <a href="{{route('posts.show',$post->id)}}" class="btn btn-info">View</a>
                <a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning">Edit</a>             
                <a href="{{route('posts.destroy',$post->id)}}" class="btn btn-danger">Delete</a>
               
            </td>
           
            </tr>
           
            @endforeach
        </tbody>
        </table>
        @endsection