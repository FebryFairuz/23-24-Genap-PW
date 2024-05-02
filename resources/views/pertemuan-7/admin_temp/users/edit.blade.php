@extends('pertemuan-7.admin_temp.Layout')

@section('content')
    <div class="card card-flush h-md-100">
        <div class="card-header p-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-1">Edit User data</span>
                <span class="text-gray-500 mt-1 fw-semibold fs-6">Please fill up the form with correctly</span>
            </h3>
        </div>
        <div class="card-body">
            <div class="w-50 m-auto">
                <form action="/users-books/update/{{$user->id}}/edit" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="form-group mb-5">
                        <label for="username">Username</label>
                        <input type="text" required class="form-control" name="username" value="{{$user->username}}" />
                    </div>
                    <div class="form-group mb-5">
                        <label>Fullname</label>
                        <input type="text" required class="form-control" name="fullname" value="{{$user->fullname}}" />
                    </div>
                    <div class="form-group mb-5">
                        <label>Gender</label>
                        <div>
                            <label>
                                <input type="radio" required name="gender" value="m" {{ $selectedGender === 'm' ? 'checked' : '' }} />
                                Male
                            </label>
                            <label>
                                <input type="radio" required name="gender" value="f" {{ $selectedGender === 'f' ? 'checked' : '' }} />
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-5">
                        <label>Email</label>
                        <input type="text" required class="form-control" name="email" value="{{$user->email}}" />
                    </div>
                    <div class="form-group mb-5">
                        <label>Password</label>
                        <input type="password" required class="form-control" name="password" value="{{$user->password}}" />
                    </div>
                    <div class="form-group mb-5">
                        <label>No Hp</label>
                        <input type="text" required class="form-control" name="no_hp" value="{{$user->no_hp}}" />
                    </div>
                    <div class="form-group mb-5">
                        <label>Profile Picture</label>
                        <input type="file" required class="form-control" name="image" />
                    </div>
                    <div class="text-end mt-20 mb-10">
                        <button class="py-5 px-10 btn btn-lg btn-light" type="reset">Clear</button>
                        <button class="py-5 px-10 btn btn-lg btn-primary" type="submit">Save changes</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
