@extends('layouts.main_user')
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/user/images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Travel Tips &amp; Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                @foreach ($blog as $blog)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="blog-single.html" class="block-20"
                                style="background-image: url('assets/user/images/image_1.jpg');">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center mb-4 topp">
                                    <div class="one">
                                        <span class="day">{{ $blog->created_at->translatedFormat('d') }}</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">{{ $blog->created_at->translatedFormat('Y') }}</span>
                                        <span class="mos">{{ $blog->created_at->translatedFormat('F') }}</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#">{{ $blog->title }}</a>
                                </h3>
                                <p>{{ substr($blog->body, 0, 80) }}...
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
