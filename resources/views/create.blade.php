@extends('layout')
@section('content')

<h1 style="text-align: center;">My Blog</h1><br>
    
    <div class="container">
        <form action="/home" method="POST">
        @csrf
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Enter username" name='username'>
            </div><br>
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Enter age" name='age'>
            </div><br>
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Enter task" name='task'>
            </div><br>
            <div class="form-group">
                <input type="radio" id="done" name="complete" value=1>
                <label>complete</label><br>
                <input type="radio" id="css" name="complete" value=0>
                <label>not complete</label>
            </div><br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/home" class="btn btn-success">Back</a>
        </form>
    </div>
    

@endsection
