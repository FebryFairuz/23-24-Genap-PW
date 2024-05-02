@extends('pertemuan-7.admin_temp.Layout')

@section('content')

    <div class="card card-flush h-md-100">
        <div class="card-header p-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-1">List of categories</span>
                <span class="text-gray-500 mt-1 fw-semibold fs-6">Data master table</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ url('users-books/create') }}" class="btn btn-sm btn-primary fw-bolder">
                    <i class="bi bi-plus-circle"></i> Add New
                </a>
            </div>
        </div>
        <div class="card-body">
            <p class="fw-bolder alert alert-info">Made by Risma & Dimas</p>
            @if ($errors->any())
                <div class="alert alert-info">
                    {{ $errors->info }}
                </div>
            @endif
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <thead>
                    <tr class="fs-7 fw-bold">
                        <th>Profile Picture</th>
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>No Hp</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    <img class="w-100px rounded"
                                            src="{{ url('/assets/media/uploads/users/' . $user->image) }}"
                                            alt="{{ $user->username }}">
                                </td>
                                <td>
                                    {{ $user->username }}
                                </td>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>
                                <td>{{ $user->no_hp }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/users-books/delete/{{$user->id}}">
                                        <button class="btn btn-sm btn-icon" type="button" onclick="return confirm('Apakah data tersebut mau dihapus?')">
                                            <i class="bi bi-trash text-danger"></i>
                                        </button>
                                        </a>
                                        <a href="/users-books/update/{{$user->id}}">
                                        <button class="btn btn-sm btn-icon" type="button">
                                            <i class="bi bi-pencil text-warning"></i>
                                        </button>
                                        </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No record found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
