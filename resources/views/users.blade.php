@extends('layout')
@section('content')
<h1>list  of users </h1>
@foreach ($list as $user) 
<div>
    <h3>{{$user->nom}}</h3>
    <p> {{$user->email}} </p>
    <p>{{$user->tel}}</p>
</div> 

@endforeach
@endsection