@extends('layouts.main_admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1 class="pb-3"><b>Tambah Foto</b></h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="{{ route('admin.gallery.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default"
                                                @error('caption') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="caption">Caption <span class="required-label">*</span></label>
                                                <input type="text" class="form-control" value="{{ old('caption') }}"
                                                    id="caption" name="caption">
                                                @error('caption')
                                                    <small style="color: #dc3545">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default"
                                                @error('photo') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="photo">File <span class="required-label">*</span></label>
                                                <input type="file" class="form-control" value="" id="photo"
                                                    name="photo">
                                                @error('photo')
                                                    <small style="color: #dc3545">{{ $message }}</small>
                                                @enderror
                                                <small>Jenis file: .jpg, .png, .jpeg, ukuran maksimal: 10 MB</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <hr> --}}
                                {{-- <div class="col-md-4">
                                    <div class="row">
                                        <div class="card-body">
                                            <div class="form-group form-group-default"
                                                @error('password_admin') style="border: 1px solid rgb(255, 0, 0)" @enderror>
                                                <label for="password_admin">Password Anda (Admin) <span
                                                        class="required-label">*</span></label>
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
                                </div> --}}
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

    <script>
        // // Get a reference to the file input element
        // const inputElement = document.querySelector('input[id="photo"]');

        // // Create a FilePond instance
        // const pond = FilePond.create(inputElement);

        // FilePond.setOptions({
        //     server: {
        //         url: '/admin/gallery/upload',
        //         headers: {
        //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //         }
        //     }
        // })
    </script>
@endsection
