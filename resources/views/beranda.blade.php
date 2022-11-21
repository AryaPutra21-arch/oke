@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Daftar Artikel</h1>
        @foreach ($data as $a )
        <div class="col-3 mt-2">
            <div class="card ms-3" style="width: 12rem; height: 300px;">
                <img src="{{ asset('storage/'. $a->foto) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $a->judul }}</h5>
                    <h5 class="card-text">{{ $a->isi }}</h5>
                    <p class="card-text">{{ $a->tglArtikel }}</p>
                 </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
