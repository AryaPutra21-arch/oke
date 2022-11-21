

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Data User</h1>
            <a href="{{ url('user/create') }}" class="btn btn-primary">Tambah User</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $u)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td> ********** </td>
                        <td>
                            <div class="d-flex align-items-center list-user-action">
                             <a href="{{ route('user.edit', $u->id) }}" class="btn btn-primary">edit</a>
                                &nbsp;|&nbsp;
                                        <a>
                                            <form action="{{ route('user.destroy', $u->id) }}" method="POST">
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
