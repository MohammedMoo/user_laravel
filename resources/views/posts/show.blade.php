@extends('layouts.app')
@section('mycontent')
                <div class="card">
                <div class="card-header">
                    {{$post->title}}
                </div>
                <div class="card-body">
                  <h5 class="card-title">ID : {{$post->id}}</h5>
                  <h5 class="card-title">Created At : {{$post->created_at}}</h5>
                  <h6 class="card-title">Description : {{$post->description}}</h6>
                </div>
                </div>
@endsection