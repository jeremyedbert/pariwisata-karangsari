@extends('layouts.main_user')
@section('content')
    <section class="ftco-section ftco-no-pb contact-section">
        <div class="container">
					<h2 style="font-weight:600" class="mb-3 bread">Kontak</h2>
            <div class="row d-flex contact-info">
                <div class="col-md-4 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-2">Alamat</h3>
                        <p>Dusun Karangsari, Desa Lumeneng</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-2">Nomor HP</h3>
                        <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-2">Email</h3>
                        <p><a href="mailto:info@yoursite.com">-</a></p>
                    </div>
                </div>
                {{-- <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-2">Website</h3>
                        <p><a href="#">yoursite.com</a></p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
