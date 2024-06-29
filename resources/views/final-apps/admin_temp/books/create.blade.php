    @extends('final-apps.admin_temp.Layout')

    @section('content')
        @include('final-apps.admin_temp.templates.toolbar', [
            'title' => 'Books Catalogue',
            'subTitle' => 'Form Create book',
        ])

        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div class="container-xxl" id="kt_content_container">

                <div class="card card-flush h-md-100">
                    <div class="card-header p-7">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-1">Form boook</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Please fill up the form with correctly</span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="m-auto">
                            <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <div class="form-group mb-5">
                                            <label class="required fw-bolder">Title</label>
                                            <input type="text" required class="form-control" name="title" />
                                        </div>
                                        <div class="form-group mb-5">
                                            <label class="required fw-bolder">Author</label>
                                            <input type="text" required class="form-control" name="author" />
                                        </div>
                                        <div class="form-group mb-5">
                                            <label class="required fw-bolder">Sinopsis</label>
                                            <input type="text" required class="form-control" name="sinopsis" />
                                        </div>
                                        <div class="form-group mb-5">
                                            <label class="required fw-bolder">Story</label>
                                            <textarea name="story" required class="form-control" rows="10" name="story" id="story"></textarea>
                                        </div>
                                        <div class="form-group mb-5">
                                            <label class="required fw-bolder">Categories</label>
                                            <div class="my-5">
                                                @foreach ($categories as $category)
                                                    <label class="me-2">
                                                        <input type="checkbox" name="categories[]"
                                                            value="{{ $category->id }}" />
                                                        {{ $category->name }}
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="bg-light rounded p-5 mb-5">
                                            <div class="form-group mb-5">
                                                <h4>Image Cover</h4>
                                                <div class="my-5 text-center">
                                                    <img id="previewImg"
                                                        src="{{ url('./assets/media/images/prev-img.png') }}"
                                                        alt="Preview Image" class="rounded w-50 bg-secondary">
                                                </div>
                                                <input type="file" required class="form-control" name="image"
                                                    id="image" onchange="previewFile()">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="latitude">Latitude:</label>
                                            <input type="text" id="latitude" name="latitute" class="form-control">
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="longitude">Longitude:</label>
                                            <input type="text" id="longitude" name="longtitute" class="form-control">
                                        </div>
                                        <button class="btn btn-success" id="openMapBtn" type="button" onclick="openMap()"
                                            disabled>Open
                                            Map</button>
                                    </div>
                                </div>

                                <div class="text-end mt-20 mb-10">
                                    <a href="{{ url('catalog-books') }}" class="py-5 px-10 btn btn-lg btn-light"
                                        type="reset">Cancel</a>
                                    <button class="py-5 px-10 btn btn-lg btn-primary" id="btn-submit" type="submit">Save
                                        changes</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
            function getLocation() {
                let getLocationBtn = document.getElementById('btn-submit');
                getLocationBtn.disabled = true;
                getLocationBtn.innerText = 'Processing...';

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition, showError);
                } else {
                    alert("Geolocation is not supported by this browser.");
                    resetButton();
                }
            }

            function showPosition(position) {
                let lat = position.coords.latitude;
                let lon = position.coords.longitude;

                console.log("Latitude: " + lat + " Longitude: " + lon);

                document.getElementById('latitude').value = lat;
                document.getElementById('longitude').value = lon;

                let openMapBtn = document.getElementById('openMapBtn');
                openMapBtn.disabled = false;

                let getLocationBtn = document.getElementById('btn-submit');
                getLocationBtn.disabled = false;
                getLocationBtn.innerText = 'Save Changes';
            }

            function showError(error) {
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        alert("User denied the request for Geolocation.");
                        break;
                    case error.POSITION_UNAVAILABLE:
                        alert("Location information is unavailable.");
                        break;
                    case error.TIMEOUT:
                        alert("The request to get user location timed out.");
                        break;
                    case error.UNKNOWN_ERROR:
                        alert("An unknown error occurred.");
                        break;
                }
                resetButton();
            }

            function openMap() {
                let lat = document.getElementById('latitude').value;
                let lon = document.getElementById('longitude').value;
                if (lat && lon) {
                    let url = `https://www.google.com/maps?q=${lat},${lon}`;
                    window.open(url, '_blank');
                } else {
                    alert("Please get the location first.");
                }
            }

            getLocation();
        </script>
    @endsection
