@extends('final-apps.admin_temp.Layout')

@section('content')

@include('final-apps.admin_temp.templates.toolbar', ['title' => 'Categories', 'subTitle' => 'Form Create category'])

<div class="post d-flex flex-column-fluid" id="kt_post">
    <div class="container-xxl" id="kt_content_container">

        <div class="card card-flush h-md-100">
            <div class="card-header p-7">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-1">Form Category</span>
                    <span class="text-gray-500 mt-1 fw-semibold fs-6">Please fill up the form with correctly</span>
                </h3>
            </div>
            <div class="card-body">
                <div class="w-50 m-auto">
                    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <input type="hidden" name="id" value="{{ !empty($category) ? $category->id : "" }}" />
                        <div class="form-group mb-5">
                            <label>Name</label>
                            <input type="text" required class="form-control" name="name" value="{{ !empty($category) ? $category->name : "" }}" />
                        </div>

                        <div class="text-end mt-20 mb-10">
                            <a href="{{ url('categories-books') }}" class="py-5 px-10 btn btn-lg btn-light" type="reset">Cancel</a>
                            <button class="py-5 px-10 btn btn-lg btn-primary" type="submit">Save changes</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
