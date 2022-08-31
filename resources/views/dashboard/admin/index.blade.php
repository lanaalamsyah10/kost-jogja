@extends('dashboard.layouts.main')
@section('container')
    <div class="contianer mt-5">
        <div class="d-flex justify-content-between border-bottom">
            <h3 class="mt-3">Tabel Pengguna</h3>
            <a href="/dashboard/admin/create" class="btn btn-success mb-4 "> Tambah <span data-feather="plus"></span></a>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mt-5">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->is_admin == 1)
                                            <span class="badge bg-primary">Super Admin</span>
                                        @elseif($user->is_admin == 2)
                                            <span class="badge bg-success">Admin</span>
                                        @elseif($user->is_admin == 0)
                                            <span class="badge bg-secondary">User</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/dashboard/admin/{{ $user->is_admin }}" class="badge bg-info"><span
                                                data-feather="eye"></span></a>
                                        <a href="/dashboard/admin/{{ $user->is_admin }}/edit" class="badge bg-warning"><span
                                                data-feather="edit"></span></a>

                                        <form action="/dashboard/admin/{{ $user->is_admin }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Yakin mau dihapus?')">
                                                <span data-feather="x-circle"></span></button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
