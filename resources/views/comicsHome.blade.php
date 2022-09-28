@extends('layout.app')

@section('title', 'Home Page Comics')
@section('css')
    <link rel="stylesheet" href="{{asset('css/homeComics.css')}}">
@endsection

@section('content')
    <div class="row">
        <div class="my_jumbotron"></div>
    </div>
    <div class="my_button btn btn-primary position-absolute start-0 p-3 rounded-0 fw-bold ms-5">CURRENT SERIES</div>
    <div class="row my_width_main pb-3 justify-content-center">
        @foreach($comics as $comic)
        <div class="card d-flex flex-column border border-0 px-0 pt-5">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            <a class="text-decoration-none text-white" href=""><h3 class="h5 text-white text-center py-1">{{$comic['title']}}</h3></a>
        </div>
        @endforeach
        <div class="btn btn-primary my_second_button rounded-0 fw-bold">LOAD MORE</div>
    </div>
    <div class="container-fluid">
        <div class="row bg-primary py-2">
           <div class="col-12 col-md-9 justify-content-center m-auto">
                <ul  class="list-unstyled my_role d-flex flex-wrap py-5 justify-content-evenly align-items-center">
                    @foreach(config('mainLink') as $link)
                        <li class="cl-effect-18 rounded-5 py-4 px-2 fs-6 d-flex justify-content-center align-items-center list-unstyled">
                            <a class="text-white text-decoration-none d-flex justify-content-evenly align-items-center" href="#">
                                <img src="{{$link['url']}}" alt="{{$link['title']}}"/>
                                <span class="px-1">{{$link['title']}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
           </div>
        </div>
    </div>

@endsection