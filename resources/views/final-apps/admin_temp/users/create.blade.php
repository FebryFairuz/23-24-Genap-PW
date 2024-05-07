@extends('final-apps.admin_temp.Layout')

@section('content')
    @include('final-apps.admin_temp.templates.toolbar', [
        'title' => 'Users Account',
        'subTitle' => 'Form create user',
    ])


    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-xxl" id="kt_content_container">

            <div class="card card-flush h-md-100">
                <div class="card-header p-7">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-1">Form User</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Please fill up the form with correctly</span>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="w-600px m-auto">
                        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <input type="hidden" name="id" value="{{ (!empty($user) ? $user->id : "") }}" />
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group mb-5">
                                        <label class="required fw-bolder">Username</label>
                                        <input type="text" required class="form-control" name="username"  value="{{ (!empty($user) ? $user->username : "") }}" />
                                    </div>

                                    <div class="form-group mb-5">
                                        <label class="required fw-bolder">Email</label>
                                        <input type="text" required class="form-control" name="email"  value="{{ (!empty($user) ? $user->email : "") }}" />
                                    </div>
                                    <div class="form-group mb-5">
                                        <label class="{{ (!empty($user) && $user->password) ? '' : 'required' }} fw-bolder">Password</label>
                                        <input type="password" {{ (!empty($user) && $user->password) ? '' : 'required' }} class="form-control" name="password" />
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form-group mb-5">
                                        <label class="{{ (!empty($user) && $user->image) ? '' : 'required' }} fw-bolder">Profile Picture</label>
                                        <div class="my-5 text-center">
                                            <img id="previewImg" src="{{ (!empty($user) ? url('./assets/media/uploads/users/'.$user->image)  : url('./assets/media/images/prev-img.png')  )   }}"
                                                alt="Preview Image" class="rounded w-50 bg-secondary">
                                        </div>
                                        <input type="file" {{ (!empty($user) && $user->image) ? '' : 'required' }} class="form-control" name="image" id="image"
                                            accept="image/*" onchange="previewFile()">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-5">
                                        <label class="required fw-bolder">Fullname</label>
                                        <input type="text" required class="form-control" name="fullname"  value="{{ (!empty($user) ? $user->fullname : "") }}" />
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group mb-5">
                                                <label class="required fw-bolder">No Hp</label>
                                                <input type="text" required class="form-control" name="no_hp"  value="{{ (!empty($user) ? $user->no_hp : "") }}" />
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group mb-5">
                                                <label class="required fw-bolder">Gender</label>
                                                <div class="mt-3">
                                                    <label>
                                                        <input type="radio" required name="gender" value="m" {{ (!empty($user) && $user->gender == "m") ? 'checked' : '' }} />
                                                        Male
                                                    </label>
                                                    <label>
                                                        <input type="radio" required name="gender" value="f" {{ (!empty($user) && $user->gender == "f") ? 'checked' : '' }} />
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end mt-20 mb-10">
                                <a href="{{ url('users-books') }}" class="py-5 px-10 btn btn-lg btn-light"
                                    type="reset">Cancel</a>
                                <button class="py-5 px-10 btn btn-lg btn-primary" type="submit">Save changes</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
