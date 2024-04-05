<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- CDN Bootstrap --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> --}}

    {{-- Download library --}}
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>


</head>

<body>
    <div class="container-fluid bg-info">
        <h1 class="text-primary">Hello world</h1>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <h3>Grid System</h3>
        <div class="row">
            <div class="col bg-success">
                ini column 1
            </div>
        </div>
        <div class="row">
            <div class="col-6 bg-warning">
                column 6 kiri
            </div>
            <div class="col-6 bg-danger">
                column 6 kanan
            </div>
        </div>

        <div class="row">
            <div class="col-6 bg-info">
                col 6
            </div>
            <div class="col-12 col-lg-6 ">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xxl-8 border border-danger">
                        1
                    </div>
                    <div class="col-12 col-lg-6 border border-danger">
                        2
                    </div>
                    <div class="col-12 col-lg-6 border border-danger">
                        3
                    </div>
                    <div class="col-12 col-lg-6 border border-danger">
                        4
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
