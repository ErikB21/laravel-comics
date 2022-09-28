@extends('layout.app')
@section('title', 'Dettaglio Comics')
@section('css')
    <link rel="stylesheet" href="{{asset('css/details.css')}}">

@section('content')
    <div class="row flex-column position-relative">
        <div class="my_card position-absolute">
            <img src="{{$details['thumb']}}" alt="">
        </div>
        <div class="blue_bg"></div> 
    </div> 
    <div class="details">
        <div class="container-fluid px-0 py-3 d-flex flex-column align-items-center justify-content-center">      
            <h3>{{$details['title']}}</h3>
            <p class="px-5">{{$details['description']}}</p>
        </div>
    </div>
@endsection