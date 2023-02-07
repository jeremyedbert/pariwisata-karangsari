@extends('layouts.main_user')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('assets/user/images/home.png');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    {{-- <a href="" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                        <span class="ion-ios-play"></span>
                    </a> --}}
                    <p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Desa Lumeneng</p>
                    <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><b>{{ $tour[0]->name }}</b>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section services-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
                    <h2 class="mb-4">{{ $tour[0]->name }}</h2>
                    <p>{{ $tour[0]->description }}</p>
                    <p>{{ substr($tour[0]->description, 0, 100) }}
                    </p>
                    {{-- <p><a href="#" class="btn btn-primary py-3 px-4">Search Destination</a></p> --}}
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-block">
                                <div class="icon"><span class="flaticon-paragliding"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Aktivitas</h3>
                                    <p>Tempat yang cocok untuk camping dan melihat sunset
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-block">
                                <div class="icon"><span class="flaticon-route"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Akses Jalan</h3>
                                    <p>Tak perlu khawatir, kami siap membantu Anda sampai ke tujuan
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-block">
                                <div class="icon"><span class="flaticon-tour-guide"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Private Guide</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-block">
                                <div class="icon"><span class="flaticon-map"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Lokasi</h3>
                                    <p>Dusun Karangsari, Desa Lumeneng, Kecamatan Paninggaran, Kabupaten Pekalongan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch"
                        style="background-image:url('assets/user/images/about.jpg');"></div>
                </div>
                <div class="col-md-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">Kami Siap Membantu Anda</h2>
                            <p>Medan ke Dusun Karangsari yang sulit</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center mb-4">
                                <div class="text">
                                    <strong class="number" data-number="300">0</strong>
                                    <span>Successful Tours</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center mb-4">
                                <div class="text">
                                    <strong class="number" data-number="24000">0</strong>
                                    <span>Happy Tourist</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center mb-4">
                                <div class="text">
                                    <strong class="number" data-number="200">0</strong>
                                    <span>Place Explored</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(assets/user/images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Apa Kata Mereka?</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(assets/user/images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Pak Carik</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(assets/user/images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Bu Novi</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Gunung kembarnya indah banget.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(assets/user/images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Ngab Arifin</p>
                                            <span class="position">Ngab ngab ngab</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(assets/user/images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Willy The Kid</p>
                                            <span class="position">Buzzer SJW</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Sangat menyenangkan.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(assets/user/images/rama.png)"></div>
                                        <div class="pl-3">
                                            <p class="name">Rama</p>
                                            <span class="position">Kordes Lumeneng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Tour Destination</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img"
                            style="background-image: url(assets/user/images/destination-1.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">8 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                                <li><span class="flaticon-mountains"></span>Near Mountain</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img"
                            style="background-image: url(assets/user/images/destination-2.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">10 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                                <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img"
                            style="background-image: url(assets/user/images/destination-3.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">7 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                                <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img"
                            style="background-image: url(assets/user/images/destination-4.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">8 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                                <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img"
                            style="background-image: url(assets/user/images/destination-5.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">10 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                                <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img"
                            style="background-image: url(assets/user/images/destination-6.jpg);"></a>
                        <div class="text p-4">
                            <span class="price">$300/person</span>
                            <span class="days">7 Days Tour</span>
                            <h3><a href="#">Bali, Indonesia</a></h3>
                            <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                            <ul>
                                <li><span class="flaticon-shower"></span>2</li>
                                <li><span class="flaticon-king-size"></span>3</li>
                                <li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{--  --}}
@endsection
