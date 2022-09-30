@extends('layout.app')
@section('title', 'Dettaglio Comics')
@section('css')
    <link rel="stylesheet" href="{{asset('css/details.css')}}">

@section('content')
    <div class="flex-column position-relative">
        <div class="my_card position-absolute">
            <img src="{{$details['thumb']}}" alt="">
        </div>
        <div class="blue_bg"></div> 
    </div> 
    <div class="details d-flex justify-content-center align-items-start">
        <div class="my_details px-0 py-3 d-flex flex-column">      
            <h3>{{$details['title']}}</h3>
            <div class="my_width d-flex py-3 align-items-center">
                <div class="my_price d-flex justify-content-between align-items-center p-3">
                    <span>U.S. Price: {{$details['price']}}</span>
                    <span>AVAILABLE</span>
                </div>
                <div class="my_option p-3">
                    Check Availability
                </div>
            </div>
            <p class="pe-5">{{$details['description']}}</p>
        </div>
        <div class="my_adv py-3">
            <h5 class="text-end">Advertisement</h5>
            <img src="{{asset('images/adv.jpg')}}" alt="">
        </div>
    </div>
    
    <div class="my_bg container-fluid px-0 pt-2 d-flex justify-content-center align-items-start">
        <div class="sec_width">
            <h3 class="px-5 py-2">Talent</h3>
            <div class="my_talent">
                <div class="art_by px-3 d-flex border-top">
                    <p class="fw-bold px-2">Art: </p>
                    <ul class="list-unstyled d-flex flex-wrap">
                    @foreach ($details['artists'] as $detail)     
                        <li class=""><a class="text-decoration-none" href="">{{$detail}}</a></li>
                    @endforeach
                    </ul>
                </div>
                <div class="art_by px-3 pb-2 border-top border-bottom d-flex">
                    <p class="fw-bold px-2">Written: </p>
                    <ul class="list-unstyled d-flex flex-wrap">
                    @foreach ($details['writers'] as $detail)     
                        <li class=""><a class="text-decoration-none" href="">{{$detail}}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="sec_width">
            <h3 class="px-5 py-2">Specs</h3>
            <div class="my_specs d-flex border-top">
                <span class="fw-bold px-2">Series</span>
                <ul class="list-unstyled d-flex flex-wrap">  
                    <li class=""><a class="text-decoration-none" href="">{{$details['series']}}</a></li>
                </ul>
            </div>
            <div class="my_specs d-flex border-top">
                <span class="fw-bold px-2">Series</span>
                <ul class="list-unstyled d-flex flex-wrap">  
                    <li class=""><a class="text-decoration-none" href="">{{$details['price']}}</a></li>
                </ul>
            </div>
            <div class="my_specs d-flex border-top">
                <span class="fw-bold px-2">Series</span>
                <ul class="list-unstyled d-flex flex-wrap">  
                    <li class=""><a class="text-decoration-none" href="">{{$details['sale_date']}}</a></li>
                </ul>
            </div>
        </div>
    </div> 
    
    
@endsection