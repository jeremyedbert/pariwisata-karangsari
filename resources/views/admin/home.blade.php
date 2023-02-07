@extends('layouts.main_admin')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner text-center">
							<h1>Hai, {{ auth()->user()->name }}! &#128516;</h1>
            </div>
        </div>
    </div>
@endsection
