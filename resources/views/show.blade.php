@extends('layout')
@section('content')

<h1>My Blog</h1><br>
<div class="card">
    <div class="card-header">
        Blog Posts
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$post->username}}</h5>
        <p class="card-text">{{$post->task}}</p>
        <a href="/home" class="btn btn-success">Back</a>
    </div><hr>
</div>

@endsection
