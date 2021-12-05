@extends('layout')
@section('content')

<h1>My Blog</h1>
@foreach($todoDatas as $data )
    <li>{{$data->task}}</li>
@endforeach

@endsection
