@extends('layout.app')

@section('title', 'Home Page Comics')
@section('css')
    <link rel="stylesheet" href="{{asset('css/homeComics.css')}}">
@endsection

@section('content')
    <div class="my_button btn btn-primary position-absolute p-3 rounded-0 fw-bold ms-5">CURRENT SERIES</div>
    <div class="row my_width_main pb-5 py-5 justify-content-center">
        @foreach($comics as $key => $comic)
            <div class="card d-flex flex-column border border-0 px-0">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <a class="text-decoration-none text-white" href="{{route('details', ['id' => $key])}}"><h3 class="h5 text-white text-center py-1">{{$comic['title']}}</h3></a>
            </div>
        @endforeach
        <div class="btn btn-primary my_second_button rounded-0 fw-bold">LOAD MORE</div>
    </div>

    <div class="container-fluid px-0">
        <div class="row bg-primary py-2">
           <div class="col-12 col-md-9 justify-content-center m-auto">
                <ul  class="list-unstyled my_role d-flex flex-wrap py-5 justify-content-evenly align-items-center">
                    @foreach(config('mainLink') as $link)
                        <li class="cl-effect-18 rounded-5 py-5 px-3 fs-6 d-flex justify-content-center align-items-center list-unstyled">
                            <a class="text-white text-decoration-none d-flex justify-content-evenly align-items-center" href="#">
                                <img src="{{asset($link['url'])}}" alt=""/>
                                <span class="px-1">{{$link['title']}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
           </div>
        </div>
    </div>

@endsection