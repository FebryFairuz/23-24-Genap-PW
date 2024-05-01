@extends('pertemuan-7.admin_temp.Layout')

@section('content')
    <div>
        <div class = "w-100 bg-warning" style="height:75vh">
        </div>
        <div>
            <h4 class="fs-1 my-10">Recently</h4>
            <div class="d-flex flex-row" style = "overflow-x:scroll">
                @if (count($books) > 0)
                    @foreach ($books as $book)
                        <div class="me-8 d-block">
                            <div style = "height:36vh; width:24vh;">
                                <img class="w-100 rounded" src="{{ url('/assets/media/uploads/books/' . $book->image) }}">
                            </div>
                            <div class="fs-4 fw-bold mt-6">
                                {{ $book->title }}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div>
            <h4>Recommended</h4>
            <div class="d-flex flex-row" style = "overflow-x:scroll">
                @if (count($books) > 0)
                    @foreach ($books as $book)
                        <div class="me-8 d-block">
                            <div style = "height:36vh; width:24vh;">
                                <img class="w-100 rounded" src="{{ url('/assets/media/uploads/books/' . $book->image) }}">
                            </div>
                            <div class="fs-4 fw-bold mt-6">
                                {{ $book->title }}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div>
            <h4>Popular</h4>
            <div class="d-flex flex-row" style = "overflow-x:scroll">
                @if (count($books) > 0)
                    @foreach ($books as $book)
                        <div class="me-8 d-block">
                            <div style = "height:36vh; width:24vh;">
                                <img class="w-100 rounded" src="{{ url('/assets/media/uploads/books/' . $book->image) }}">
                            </div>
                            <div class="fs-4 fw-bold mt-6">
                                {{ $book->title }}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

@endsection
