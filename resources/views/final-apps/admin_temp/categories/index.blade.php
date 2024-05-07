@extends('final-apps.admin_temp.Layout')

@section('content')
    @include('final-apps.admin_temp.templates.toolbar', [
        'title' => 'Categories',
        'subTitle' => 'Show all data master',
    ])

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-xxl" id="kt_content_container">

            <div class="card card-flush h-md-100">
                <div class="card-header p-7">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-1">Master table categories</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="{{ url('categories-books/create') }}" class="btn btn-sm btn-primary fw-bolder">
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
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($categories) > 0)
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                {{ $category->name }}

                                            </td>
                                            <td>{{ $category->created_at }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="/categories-books/delete/{{ $category->id }}">
                                                        <button class="btn btn-sm btn-icon" type="button"
                                                            onclick="return confirm('Are you sure wants  to delete this category?');">
                                                            <i class="bi bi-trash text-danger"></i>
                                                        </button>
                                                    </a>
                                                    <a href="/categories-books/update/{{ $category->id }}"
                                                        class="btn btn-sm btn-icon" type="button">
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
