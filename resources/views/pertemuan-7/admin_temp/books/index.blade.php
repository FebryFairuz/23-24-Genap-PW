@extends('pertemuan-7.admin_temp.Layout')

@section('content')

    <div class="card card-flush h-md-100">
        <div class="card-header p-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-1">List of books</span>
                <span class="text-gray-500 mt-1 fw-semibold fs-6">Data master table</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ url('catalog-books/create') }}" class="btn btn-sm btn-primary fw-bolder">
                    <i class="bi bi-plus-circle"></i> Add New
                </a>
            </div>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-info">
                    {{ $errors->info }}
                </div>
            @endif
            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                <thead>
                    <tr class="fs-7 fw-bold">
                        <th>Title Book</th>
                        <th>Author</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($books) > 0)
                        @foreach ($books as $book)
                            <tr>
                                <td>
                                    <div class="w-50 d-flex">
                                        <img class="w-100px rounded"
                                            src="{{ url('/assets/media/uploads/books/' . $book->image) }}"
                                            alt="{{ $book->title }}">
                                        <div class="mx-2">
                                            <h3>{{ $book->title }}</h3>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-muted">
                                        <span class="d-block"></span>
                                        <span>{{ $book->author }}</span>
                                    </p>

                                </td>
                                <td>{{ $book->created_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/catalog-books/delete/{{$book->id}}">

                                            <button class="btn btn-sm btn-icon" type="button" onclick="return confirm('Are you sure to delete the data?')">
                                                <i class="bi bi-trash text-danger"></i>
                                            </button>
                                        </a>

                                        <a href="/catalog-books/update/{{$book->id}}" class="btn btn-sm btn-icon" type="button">
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

@endsection
