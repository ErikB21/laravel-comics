@extends('layout.app')

@section('title', 'Home Page')
@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
    <div class="my_square position-absolute bottom-100 start-50 translate-middle">
        <h1 class="text-center text-light">Benvenuti nel mondo Comics!</h1>         
    </div>
@endsection



