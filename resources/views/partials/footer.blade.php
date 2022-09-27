<footer class="container-fluid ">

        <div class="row my_personal_bg justify-content-center">
            <div class="col-12 col-md-6 col-lg-5 d-flex justify-content-center pt-3">

                <div class="px-3">
                    <h3 class="text-white">DC COMICS</h3>
                    <ul class="p-0">
                        <!-- <li v-for="(link,index) in links" :key="index.links" class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">{{link.link}}</a></li> -->
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
                        <!-- <li v-for="(link,index) in linksTwo" :key="index.linksTwo" class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">{{link.link}}</a></li> -->
                    </ul>
                </div>

                <div class="px-3">
                    <h3 class="text-white">SITES</h3>
                    <ul class="p-0">
                        <!-- <li v-for="(link,index) in linksThree" :key="index.linksThree" class="fs-6 list-unstyled"><a class="text-decoration-none fs-6" href="">{{link.link}}</a></li> -->
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
                    @foreach(config('footer') as $val)
                        <a v-for="(link,index) in logoLinks" :key="index.logoLinks" :href="link.url"><img  class="px-1" :src="link.link" alt=""/></a>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>