@extends('final-apps.admin_temp.Layout')

@section('content')
    @include('final-apps.admin_temp.templates.toolbar', [
        'title' => 'Users Account',
        'subTitle' => 'list of member',
    ])


    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-xxl" id="kt_content_container">

            <div class="card card-flush h-md-100">
                <div class="card-header p-7">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-1">List of users</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="{{ url('users-books/create') }}" class="btn btn-sm btn-primary fw-bolder">
                            <i class="bi bi-plus-circle"></i> Add New
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('info'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>{{ session('info') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th>Fullname</th>
                                    <th>Username</th>
                                    <th>Email</th>
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
                                                <div class="d-flex">
                                                    <img src="{{ url('/assets/media/uploads/users/' . $user->image) }}"
                                                        alt="{{ $user->username }}" class="w-50px rounded me-1" />
                                                    <div class="d-flex flex-column ms-2">
                                                        <span class="text-dark fw-bolder">
                                                            {{ $user->fullname }}
                                                        </span>
                                                        <span class="text-muted">
                                                            {{ $user->gender == 'm' ? 'Male' : 'Female' }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->no_hp }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="/users-books/delete/{{ $user->id }}">
                                                        <button class="btn btn-sm btn-icon" type="button"
                                                            onclick="return confirm('Are youe sure wants  to delete this user?')">
                                                            <i class="bi bi-trash text-danger"></i>
                                                        </button>
                                                    </a>
                                                    <a href="/users-books/update/{{ $user->id }}"
                                                        class="btn btn-sm btn-icon">
                                                        <i class="bi bi-pencil text-warning"></i>
                                                    </a>
                                                </div>
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
            </div>

        </div>
    </div>
@endsection
