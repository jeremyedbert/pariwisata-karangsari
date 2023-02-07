@extends('layouts.main_user')
@section('content')
    {{-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/user/images/bg_1.jpg');"
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
    </section> --}}

    <section class="ftco-section">
        <div class="container">
            <h2 style="font-weight:600" class="mb-3 bread">Galeri</h2>
            <div class="row d-flex">
                {{-- Looping --}}
                @foreach ($galleries as $photo)
                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="blog-entry w-100 justify-content-end">
                            <a href="#" class="block-20" data-toggle="modal" data-target="#modal{{ $photo->id }}"
                                style="background-image: url('storage/{{ $photo->photo }}');">
                            </a>
                            <div class="text mt-3 float-right w-100">
                                <p>{{ $photo->caption }}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Modal --}}
                    <div class="modal fade bd-example-modal-lg" id="modal{{ $photo->id }}" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p>{{ $photo->caption }}</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('storage/' . $photo->photo) }}" alt="{{ $photo->caption }}"
                                            class="img-fluid" style="max-height:540px; width:auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End of Modal --}}
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    {{ $galleries->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
