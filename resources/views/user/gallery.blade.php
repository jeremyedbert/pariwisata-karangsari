@extends('layouts.main_user')
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/user/images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Galeri</h1>
                    <p>
                        Foto-foto Pariwisata Dusun Karangsari
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry w-100 justify-content-end">
                            <a href="#" class="block-20" data-toggle="modal" data-target="#modal{{ $i }}"
                                style="background-image: url('assets/user/images/img_{{ $i }}.jpg');">
                            </a>
                            <div class="text mt-3 float-right w-100">
                                <p>Dari {{ $i }}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Modal --}}
                    <div class="modal fade" id="modal{{ $i }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ url('assets/user/images/img_' . $i . '.jpg') }}" alt=""
                                        style="height: 620px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End of Modal --}}
                @endfor
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
