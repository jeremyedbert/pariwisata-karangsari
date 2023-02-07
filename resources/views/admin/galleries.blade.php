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
                                                    <td><img src="{{ asset('storage/' . $photo->photo) }}" alt="{{ $photo->caption }}" height=280></img></td>
                                                    <td>
                                                        <a href="{{ route('admin.gallery.edit', $photo->id) }}" class="btn btn-info btn-sm my-2 mx-2"><span><i
                                                                    class="fas fa-eye"></i></span> Edit</a>
                                                    </td>
                                                </tr>
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
