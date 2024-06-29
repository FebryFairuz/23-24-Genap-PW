@extends('final-apps.admin_temp.Layout')

@section('content')

@include('final-apps.admin_temp.templates.toolbar', ['title' => 'Books Catalogue', 'subTitle' => 'Show all catalogue'])

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-xxl" id="kt_content_container">

            <div class="card card-flush h-xl-100">
                <div class="card-header p-7">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-1">List of book</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="{{ url('catalog-books/create') }}" class="btn btn-sm btn-primary fw-bolder">
                            <i class="bi bi-plus-circle"></i> Add New
                        </a>
                    </div>
                </div>
                <div class="card-body pt-0">
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
                                    <th class="w-50">Title Book</th>
                                    <th>Categories</th>
                                    <th>Created At</th>
                                    <th>QR</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($books) > 0)
                                @foreach ($books as $book)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img class="w-100px rounded"
                                                src="{{ url('/assets/media/uploads/books/' . $book->image) }}"
                                                alt="{{ $book->title }}">
                                            <div class="mx-2">
                                                <h3>{{ $book->title }}</h3>
                                                <p class="text-dark mb-0">
                                                    <span class="d-blocks">by </span>
                                                    <span>{{ $book->author }}</span>
                                                </p>
                                                <div class="sinopsis text-muted">
                                                    {{ $book->sinopsis }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @foreach ($book->categories as $category)
                                            <span class="badge badge-warning">
                                                {{ $category->name }}
                                            </span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <span class="d-block">{{ $book->created_at }}</span>
                                        <a target="_blank" href="https://www.google.com/maps/search/?api=1&query={{ $book->latitute }},{{ $book->longtitute }}" class="btn btn-sm btn-info">
                                        open map</a>
                                    </td>
                                    <td>
                                        <div class="mt-2">
                                            {!! QrCode::size(100)->generate($book->id) !!}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-icon" type="button">
                                                <i class="bi bi-trash text-danger"></i>
                                            </button>
                                            <button class="btn btn-sm btn-icon" type="button">
                                                <i class="bi bi-pencil text-warning"></i>
                                            </button>
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
