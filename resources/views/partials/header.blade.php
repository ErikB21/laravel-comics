

<header class="container-fluid">
    <nav class="d-flex justify-content-evenly align-items-center ">
        <div class="my_height pe-5 py-1">
            <img src="{{asset('images/dc-logo.png')}}" alt="#">
        </div>
        <div class="ps-5">
            <ul class="d-none d-lg-flex justify-content-center align-items-center" >
                @foreach(config('header') as $link)
                <li class="cl-effect-12 position-relative px-3 list-unstyled">
                    <a class="text-dark py-5 fs-6 text-decoration-none" href="{{$link['url']}}">{{$link['text']}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>