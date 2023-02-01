@extends('layouts.main_admin')
@section('content')
    <style>
        .bld {
            font-weight: bold
        }
    </style>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h1><b>Pengaturan Wisata</b></h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-tools">
                                        <a href="{{ route('admin.tour.edit', [$tour[0]->id]) }}" class="btn btn-warning">
                                            <span class="fas fa-pencil-alt"></span>
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="bld">Nama</td>
                                            <td>{{ $tour[0]->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bld">Deskripsi</td>
                                            <td>{{ $tour[0]->description }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bld">Harga Dewasa</td>
                                            <td>Rp {{ number_format($tour[0]->adult_price, 0, ',', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bld">Harga Anak</td>
                                            <td>Rp {{ number_format($tour[0]->child_price, 0, ',', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bld">Jam Buka</td>
                                            <td>{{ $tour[0]->open_hour }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bld">Jam Tutup</td>
                                            <td>{{ $tour[0]->close_hour }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bld">Instagram</td>
                                            <td>&#64;{{ $tour[0]->instagram }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bld">Kontak</td>
                                            <td>{{ $tour[0]->contact }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bld">Lokasi</td>
                                            <td>{{ $tour[0]->location }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
