@extends('layouts.main_user')
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb4">
                <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
                    <h2 class="mb-4">Login Admin</h2>
                </div>
                <form action="{{ route('admin.authenticate') }}" class="bg-light p-5 contact-form" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                            placeholder="Username" name="username" value="{{ old('username') }}" autocomplete="off">
                        <div class="pl-1" style="color:#dc3545">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password"
                            class="form-control @error('password') is-invalid @enderror @if (session()->has('loginError')) is-invalid @endif"
                            placeholder="Password" name="password" autocomplete="off">
                        <div class="pl-1" style="color:#dc3545">
                            @error('password')
                                {{ $message }}
                            @enderror
                            @if (session()->has('loginError'))
                                {{ session('loginError') }}
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <p><b>Lupa password?</b> Hanya admin lain yang dapat mengganti.</p>
                    </div>
                    <div class="form-group justify-content-center d-flex pt-3">
                        <button type="submit" class="btn btn-primary py-3 px-5">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection
