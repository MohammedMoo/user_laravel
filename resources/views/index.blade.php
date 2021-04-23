@extends('layouts.app')
@section('mycontent')
<div class="card" style="width: 100%;">

  <img src="img/back.jpg" class="card-img-top" alt="...">

  <div class="card-body" width ='50%' style="display: flex;
    justify-content: space-around;">
    <a href="{{route('user.index')}}" class="btn btn-primary">Creat User</a>
    <a href="{{route('posts.index')}}" class="btn btn-primary" >Show Products</a>
  </div>
</div>
@endsection('mycontent')