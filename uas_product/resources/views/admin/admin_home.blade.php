@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Admin</div>

                <div class="panel-body">
                    Selamat Datang <b>{{ Auth::user()->name }}</b><br>
                    Anda Telah Login Kembali Admin Kita
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
