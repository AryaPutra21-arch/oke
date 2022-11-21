
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Data Artikel;</h1>
            <a href="{{ url('artikel/create') }}" class="btn btn-primary">Tambah Buku</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Foto</th>

                        <th scope="col">Tanggal Artikel</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $a)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $a->judul }}</td>
                        <td>{{ $a->isi }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$a->foto) }}" alt="" width="100px">
                        </td>

                        <td>{{ $a->tglArtikel }}</td>
                        <td>{{ $a->kategori->name }}</td>
                        <td>
                            <div class="d-flex align-items-center list-user-action">
                             <a href="{{ route('artikel.edit', $a->id) }}" class="btn btn-primary">edit</a>
                                &nbsp;|&nbsp;
                                        <a>
                                            <form action="{{ route('artikel.destroy', $a->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger text-light" onclick="return confirm('Are you sure you want to delete this item ?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
