@extends('layout')
@section('content')

<h1 style="text-align: center;">My Blog</h1><br>
    
    <div class="container">
        <form action="/home/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Enter username" name='username' value={{$post->username}}>
            </div><br>
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Enter age" name='age' value={{$post->age}}>
            </div><br>
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Enter task" name='task' value={{$post->task}}>
            </div><br>
            <div class="form-group">
                <input type="radio" id="done" name="complete" value={{$post->complete}}>
                <label>complete</label><br>
                <input type="radio" id="css" name="complete" value={{$post->complete}}>
                <label>not complete</label>
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/home" class="btn btn-success">Back</a>
        </form>
    </div>
    

@endsection
