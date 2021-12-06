@extends('layout')
@section('content')

<h1>My Blog</h1><br>
<div>
<a href="/home/create" class="btn btn-success">Create Post</a>
</div><br>
<div class="card">
    <div class="card-header">
        Blog Posts
    </div>
@foreach($todoDatas as $data )
    
    <div class="card-body">
        <h5 class="card-title">{{$data->username}}</h5>
        <p class="card-text">{{$data->task}}</p>

            <a href="home/{{$data->id}}" class="btn btn-primary ">View More</a>
            <a href="home/{{$data->id}}/edit" class="btn btn-warning ">Edit</a>
            <form action="home/{{$data->id}}" method="POST" class="delete-form">
                @csrf
                @method('delete')
                <button type='submit' class="btn btn btn-danger " >Delete</button>
            </form>

        
    </div><hr>
    
@endforeach
</div>

@endsection
