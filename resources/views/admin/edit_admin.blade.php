@extends('layouts.main_admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1 class="pb-3"><b>Edit Pengguna</b></h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="{{ route('admin.setting.update', $admin->id) }}" method="post">
                                @method('put')
                                @csrf
                                <div class="card-body" style="border-bottom: 1px solid #f3f3f3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default"
                                                @error('name') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="name">Nama <span class="required-label">*</span></label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('name', $admin->name) }}" id="name" name="name">
                                                @error('name')
                                                    <small style="color: #dc3545">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group form-group-default"
                                                @error('password') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" value="" id="password"
                                                    name="password">
                                                <small class="form-text text-muted">Isi jika ingin melakukan perubahan
                                                    password.</small>
                                                @error('password')
                                                    <small style="color: #dc3545">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default"
                                                @error('username') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="username">Username <span class="required-label">*</span></label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('username', $admin->username) }}" id="username"
                                                    name="username">
                                                @error('username')
                                                    <small style="color: #dc3545">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-group form-group-default"
                                                @error('password_confirm') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="password_confirm">Konfirmasi Password</label>
                                                <input type="password" class="form-control" value=""
                                                    id="password_confirm" name="password_confirm">
                                                <small class="form-text text-muted">Isi jika ingin melakukan perubahan
                                                    password.</small>
                                                @error('password_confirm')
                                                    <small style="color: #dc3545">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <hr> --}}
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="card-body">
                                            <div class="form-group form-group-default"
                                                @error('password_admin') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="password_admin">Password Anda (Admin)</label>
                                                <input type="password" class="form-control" value=""
                                                    id="password_admin" name="password_admin">
                                                <small class="form-text text-muted">Memastikan bahwa perubahan data admin
                                                    hanya dilakukan oleh admin.</small>
                                                @if (session()->has('error'))
                                                    <small style="color: #dc3545">Password admin tidak sesuai.</small>
                                                @endif
                                                @error('password_admin')
                                                    <small style="color: #dc3545">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button class="btn btn-success" type="submit">Simpan</button>
                                    {{-- <button class="btn btn-danger">Cancel</button> --}}
                                    <a class="btn btn-danger" href="{{ route('admin.setting') }}">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
