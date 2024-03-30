<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>

    <link href="{{ url('./assets/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('./assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <h1>Mahasiswa:</h1>

        <div class ="row">

            @foreach ($mahasiswa as $item)
                <div class ="col-12 col-lg-4">
                    <div class="border border-warning mx-3 my-3 rounded">
                        <div class="row">
                            <div class="col-6 col-lg-12">
                                <img src="{{ url('assets/media/icons/icon-boy-1.png') }}"
                                    class="w-100 h-100 bg-light-warning" />
                            </div>
                            <div class="col-6 col-lg-12">
                                <div class="p-3">
                                    <p>{{ $item['nama'] }}</p>
                                    <p>{{ $item['npm'] }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</body>

</html>
