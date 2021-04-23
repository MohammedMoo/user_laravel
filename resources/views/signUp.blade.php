@extends('layouts\app')
@section('mycontent')
<form method = "POST" action = "{{route('user.stor')}}" >
@csrf
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" name = "name" id="exampleInputName" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name = "email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  
  <button type="submit" class="btn btn-success">Create User</button>
</form>
@endsection