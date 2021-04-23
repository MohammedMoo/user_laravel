@extends('layouts.app')
@section('mycontent')
<form method="POST" action="{{route('posts.stor')}}">
    <!--  -->
    @csrf
    <!--  -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" Required>
  </div>
  
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" Required></textarea>
        </div>

        <div class="mb-3">
        <label class="form-label">Users</label>
        <select  class="form-control" name = "user_id">
        @foreach($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
        </div>
  <button type="submit" class="btn btn-success">Create Posts</button>
</form>
@endsection