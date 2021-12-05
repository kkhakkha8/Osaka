@extends('layout')
@section('content')
<h1>My Blog</h1>
@foreach($personalDatas as $data )
<?php 
        if(!array_key_exists("job",$data)){
        return "error";
        } else {
            print_r($data['job']."<br>");
        }
       
?>


@endforeach




@endsection
