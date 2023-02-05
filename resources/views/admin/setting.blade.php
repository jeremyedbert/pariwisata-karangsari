@extends('layouts.main_admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header d-flex justify-content-between">
                    <h1 class="pb-3"><b>Daftar Pengguna</b></h1>
										<a href="{{ route('admin.setting.create') }}" class="btn btn-warning">Tambah admin</a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($admins as $admin)
                                                <tr>
                                                    <td>{{ $admin->name }}</td>
                                                    <td>{{ $admin->username }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.setting.edit', $admin->id) }}"
                                                            class="btn btn-info btn-sm my-2 mx-2"><span><i
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
