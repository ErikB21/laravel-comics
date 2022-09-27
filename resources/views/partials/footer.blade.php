<footer class="container-fluid ">

        <div class="row my_personal_bg justify-content-center">
            <div class="col-12 col-md-6 col-lg-5 d-flex justify-content-center pt-3">

                <div class="px-3">
                    <h3 class="text-white">DC COMICS</h3>
                    <ul class="p-0">
                        
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">Characters</a></li>
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">Comics</a></li>
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">Movies</a></li>
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">TV</a></li>
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">Games</a></li>
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">Videos</a></li>
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">News</a></li>

                    </ul>
                    <h3 class="text-white">SHOP</h3>
                    <ul class="p-0">
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">Shop DC</a></li>
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">Shop DC Collectibles</a></li>
                    </ul>        
                </div>

                <div class="px-3">
                    <h3 class="text-white">DC</h3>
                    <ul class="p-0">
                        @foreach(config('linkFoot') as $val)
                            <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">{{$val['link']}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="px-3">
                    <h3 class="text-white">SITES</h3>
                    <ul class="p-0">
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">DC</a></li>
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">MAD Magazine</a></li>
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">DC Kids</a></li>
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">DC Universe</a></li>
                        <li class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">DC Power Visa</a></li>                        
                    </ul>
                </div>
            </div>         
            <div class="d-none d-lg-block col-lg-6 my_personal_bg_logo"></div>
        </div>
        <div class="row my_personal_color_bg py-3">
            <div class="col-12 d-flex justify-content-around align-items-center m-auto">
                <div class="btn btn-2 btn-2a border-primary rounded-0 p-3 text-white">
                    SIGN-UP NOW!
                </div>
                
                <div class="section_social">
                    <span class="px-2 text-primary">FOLLOW US</span>
                    @foreach(config('secLogo') as $links)
                        <a href="{{$links['url']}}"><img  class="px-1" src="{{asset('/image/$links['link'])" alt=""/></a>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>