@extends('layout.app')

@section('title', 'Home Page')
@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
    <div class="position-absolute bottom-100 start-50 translate-middle my_square">
        <h1 class="text-center">Cooming Soon!</h1>        
    </div>
@endsection