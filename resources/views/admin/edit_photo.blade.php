@extends('layouts.main_admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1 class="pb-3"><b>Edit Foto</b></h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="{{ route('admin.gallery.update', $photo->id) }}" method="post">
                                @method('put')
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default"
                                                @error('caption') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="caption">Caption <span class="required-label">*</span></label>
                                                <input type="text" class="form-control"
                                                    value="{{ old('caption', $photo->caption) }}" id="caption"
                                                    name="caption">
                                                @error('caption')
                                                    <small style="color: #dc3545">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="d-flex pl-3">
                                                <img src="{{ asset('storage/' . $photo->photo) }}"
                                                    alt="{{ $photo->caption }}" style="height:100%; width:100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button class="btn btn-success" type="submit">Simpan</button>
                                    {{-- <button class="btn btn-danger">Cancel</button> --}}
                                    <a class="btn btn-danger" href="{{ route('admin.gallery') }}">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
