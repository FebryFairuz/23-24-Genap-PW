@extends('final-apps.admin_temp.Layout')

@section('content')
    @include('final-apps.admin_temp.templates.toolbar', [
        'title' => 'Dashboard',
        'subTitle' => 'Ini page dashboardlah',
    ])

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-xxl" id="kt_content_container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="m-auto">
                        <h1>Current Location</h1>
                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <input type="text" id="latitude" name="latitude" class="form-control">
                        </div>
                        <div class="form-group mb-5">
                            <label for="longitude">Longitude:</label>
                            <input type="text" id="longitude" name="longitude" class="form-control">
                        </div>
                        <div class="btn-block">
                            <button class="btn btn-primary" id="getLocationBtn" type="button" onclick="getLocation()">Get
                                Location</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="text-center">
                        <button class="btn btn-success" id="openMapBtn" type="button" onclick="openMap()" disabled>Open
                            Map</button>
                    </div>
                    <iframe id="mapIframe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getLocation() {
            let getLocationBtn = document.getElementById('getLocationBtn');
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

            let url =
                `https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15854.807847223046!2d${lon}!3d${lat}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z${lat},${lon}!5e0!3m2!1sen!2sid!4v1719622752352`;

            let mapIframe = document.getElementById('mapIframe');
            mapIframe.src = url;

            resetButton();
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

        function resetButton() {
            let getLocationBtn = document.getElementById('getLocationBtn');
            getLocationBtn.disabled = false;
            getLocationBtn.innerText = 'Get Location';
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
    </script>
@endsection
