@extends('layout.app')

@section('title', 'Home Page')
@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
        <div class="row">
            <div class="my_jumbotron d-flex justify-content-center align-items-center">
                <h1 class=" text-center text-light">Benvenuti nel mondo Comics!</h1>
            </div> 
        </div>     
@endsection



