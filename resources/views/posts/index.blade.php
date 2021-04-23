@extends('layouts.app')
@section('mycontent')
        <a href="{{route('posts.create')}}" class="btn btn-success mb-2">Create A Specialized Job</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)

                <tr>
                    <th scope="row">{{$post['id']}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->user ? $post->user->name : 'user not found'}}</td><!-- $post-user()->where('name' , 'mohammed') -->
                    <!-- عشان امسح 0000 بحدد الفورمات من الميثود دي (carbon)-->
                    <td>{{$post->created_at->format('d-m-Y')}}</td>
                    <td>
                        <a href="{{route('posts.show',['pid'=>$post->id])}}" class="btn btn-info">View</a>
                        <a href="{{route('posts.edit',['pid'=>$post->id])}}" class="btn btn-primary">Edit</a>
                        <form action="{{route('posts.destroy',['pid'=>$post->id])}}" method="POST" style="display:inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-danger" >Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection