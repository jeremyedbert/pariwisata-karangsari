@extends('layouts.main_admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header d-flex justify-content-between">
                    <h1 class="pb-3"><b>Galeri</b></h1>
                    <a href="{{ route('admin.gallery.create') }}" class="btn btn-warning">Tambah foto</a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Caption</th>
                                                <th>Ditambahkan oleh</th>
                                                <th>Ditambahkan pada</th>
                                                <th>Foto</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($galleries as $photo)
                                                <tr>
                                                    <td>{{ $photo->caption }}</td>
                                                    <td>{{ $photo->admin->name }}</td>
                                                    <td>{{ $photo->created_at->translatedFormat('d F Y') }}</td>
                                                    <td><img src="{{ asset('storage/' . $photo->photo) }}"
                                                            alt="{{ $photo->caption }}" height=280></img></td>
                                                    <td>
                                                        <a href="{{ route('admin.gallery.edit', $photo->id) }}"
                                                            class="btn btn-info btn-sm my-2 mx-2"><span><i
                                                                    class="fas fa-eye"></i></span> Edit</a>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#del{{ $photo->id }}"
                                                            class="btn btn-danger btn-sm my-2 mx-2"><span><i
                                                                    class="fas fa-trash"></i></span> Delete</a>
                                                    </td>
                                                </tr>

                                                {{-- Modal Delete --}}
                                                <div class="modal fade bd-example-modal-sm" id="del{{ $photo->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h2 class="modal-title" id="exampleModalLongTitle">
                                                                    Hapus?</h2>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div>
                                                                    <h4><b>Foto yang sudah Anda hapus tidak bisa dikembalikan lagi</b></h4>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light btn-sm"
                                                                    data-dismiss="modal">Batal</button>
                                                                <form
                                                                    action="{{ route('admin.gallery.destroy', $photo->id) }}"
                                                                    method="post" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="btn btn-danger btn-sm"><span><i
																																			class="fas fa-trash"></i></span> Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- End of modal --}}
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable();
        })
    </script>
@endsection
