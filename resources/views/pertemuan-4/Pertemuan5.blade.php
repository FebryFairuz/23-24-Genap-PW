<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pertemuan 5</title>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> --}}

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>

</head>

<body>
    <div class="container bg-warning">
        <h1 class="text-primary">Hi</h1>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


        {{-- GRID SYSTEM --}}
        <h3>Grid System dengan Index</h3>
        <div class="row">
            <div class="col-11 bg-info">
                ini column 11
            </div>
            <div class="col-12 bg-info">
                ini column 12
            </div>
        </div>

        <h3>Grid System tanpa Index</h3>
        <div class="row mt-5">
            <div class="col border border-primary">
                ini col
            </div>
            <div class="col border border-primary">
                ini col
            </div>
        </div>

        <h3>Grid System Responsive</h3>
        <div class="row">
            <div class="col-xs-1 col-sm-2 col-lg-12 col-xxl-12 border border-danger">
                ini column
            </div>
        </div>

    </div>
</body>

</html>
