@extends('layouts.main_admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1><b>Edit Wisata</b></h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="{{ route('admin.tour.update', [$tour[0]->id]) }}" method="post">
                                @method('put')
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default"
                                                @error('name') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="name">Nama <span class="required-label">*</span></label>
                                                <input type="text" class="form-control" value="{{ $tour[0]->name }}"
                                                    name="name">
                                                <span class="text-danger">
                                                    @error('name')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default"
                                                @error('description') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="description">Deskripsi <span
                                                        class="required-label">*</span></label>
                                                <input type="text" class="form-control"
                                                    value="{{ $tour[0]->description }}" name="description">
                                                <span class="text-danger">
                                                    @error('description')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default"
                                                @error('instagram') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="instagram">Instagram (tanpa @) <span
                                                        class="required-label">*</span></label>
                                                <input type="text" class="form-control" value="{{ $tour[0]->instagram }}"
                                                    name="instagram">
                                                <span class="text-danger">
                                                    @error('instagram')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default"
                                                @error('contact') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="contact">Kontak <span class="required-label">*</span></label>
                                                <input type="text" class="form-control" value="{{ $tour[0]->contact }}"
                                                    name="contact">
                                                <span class="text-danger">
                                                    @error('contact')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default"
                                                @error('open_hour') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="open_hour">Jam buka <span
                                                        class="required-label">*</span></label>
                                                <input type="text" class="form-control" value="{{ $tour[0]->open_hour }}"
                                                    name="open_hour">
                                                <span class="text-danger">
                                                    @error('open_hour')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default"
                                                @error('close_hour') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="close_hour">Jam tutup <span
                                                        class="required-label">*</span></label>
                                                <input type="text" class="form-control"
                                                    value="{{ $tour[0]->close_hour }}" name="close_hour">
                                                <span class="text-danger">
                                                    @error('close_hour')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default"
                                                @error('adult_price') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="adult_price">Harga dewasa <span
                                                        class="required-label">*</span></label>
                                                <input type="text" class="form-control"
                                                    value="{{ $tour[0]->adult_price }}" name="adult_price">
																										<span class="text-danger">
																											@error('adult_price')
																													{{ $message }}
																											@enderror
																									</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default"
                                                @error('child_price') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="child_price">Harga anak <span
                                                        class="required-label">*</span></label>
                                                <input type="text" class="form-control"
                                                    value="{{ $tour[0]->child_price }}" name="child_price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button class="btn btn-success" type="submit">
                                        <span class="btn-label">
                                            <i class="fas fa-save"></i>
                                        </span>
                                        Simpan
                                    </button>
                                    <a class="btn btn-danger" href="{{ route('admin.tour') }}">
                                        <span class="btn-label">
                                            <i class="fas fa-times"></i>
                                        </span>
                                        Batal
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
