@extends('pertemuan-7.admin_temp.Layout')
@section('content')
    <div class="card card-flush h-md-100">
        <div class="card-header p-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-1">Edit Categories</span>
                <span class="text-gray-500 mt-1 fw-semibold fs-6">Please fill up the form correctly</span>
            </h3>
        </div>
        <div class="card-body">
            <div class="w-50 m-auto">
                <form action="/categories-books/update/{{$category->id}}/edit" method="post" enctype="multipart/form-data" autocomplete="off">
                    @method("PUT")
                    @csrf
                    <div class="form-group mb-5">
                        <label>Name</label>
                        <input type="text" required class="form-control" name="name" value="{{ $category->name }}" />
                    </div>

                    <div class="text-end mt-20 mb-10">
                        <button class="py-5 px-10 btn btn-lg btn-light" type="reset">Clear</button>
                        <button class="py-5 px-10 btn btn-lg btn-warning" type="submit">Save Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
