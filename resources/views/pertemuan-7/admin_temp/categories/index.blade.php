@extends('pertemuan-7.admin_temp.Layout')

@section('content')

    <div class="card card-flush h-md-100">
        <div class="card-header p-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-1">List of categories</span>
                <span class="text-gray-500 mt-1 fw-semibold fs-6">Data master table</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ url('categories-books/create') }}" class="btn btn-sm btn-primary fw-bolder">
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
                        <th>name</th>
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
                                        <a href="/categories-books/update/{{$category->id}}" class="btn btn-sm btn-icon" type="button">
                                            <i class="bi bi-pencil text-warning"></i>
                                        </a>
                                        <a href="/categories-books/delete/{{$category->id}}">
                                        <button class="btn btn-sm btn-icon" type="button" onclick="return confirm('Apakah data tersebut mau dihapus?')">
                                            <i class="bi bi-trash text-danger"></i>
                                        </button>
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

@endsection
