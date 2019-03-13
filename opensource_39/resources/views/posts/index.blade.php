
        @extends('layout.app')

        @section('content')
        <br>
        <a href="{route('posts.store')}}" class= "btn btn-success btn-block">Create Post</a>
        <br>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#Pagination Ponus</th>
            <th scope="col">Title</th>
            <th scope="col">Posted by </th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                <a href="#" class="btn btn-info">View</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-Danger">Delete</a>

            </td>

            </tr>
            <tr>
            @endforeach
        </tbody>
        </table>
        @endsection