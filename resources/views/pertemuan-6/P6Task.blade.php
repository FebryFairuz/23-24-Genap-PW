<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <link href="{{ url('./assets/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('./assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="container pt-10">
        <div class="card card-flush">
            <div class="card-header">
                <h3 class="card-title align-items-start flex-column">
                    <span class="fw-bolder">Tugas 3</span>
                    <span class="text-muted mt-1 fw-semibold fs-6">PW - TI-22-PA/PB</span>
                </h3>
            </div>
            <div class="card-body pt-0">
                <p>Silakan lanjutkan program dari masing-masing tugas yang telah diberikan sebagai berikut:</p>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="card border h-100">
                            <div class="card-body">
                                <h3>Kelas PA</h3>
                                <ul>
                                    <li>
                                        <p>Buatlah action untuk mengubah tampilan `password` menjadi bentuk `text`, jika
                                            mengklik tombol
                                            <a href="https://icons.getbootstrap.com/icons/eye/"
                                                target="_blank">`eye`</a>
                                            maka
                                            password
                                            terlihat dan jika mengklik tombol <a
                                                href="https://icons.getbootstrap.com/icons/eye-slash/"
                                                target="_blank">`eye-slash`</a> menjadi *****
                                            <br />Contoh:
                                        </p>
                                        <div
                                            class="border rounded bg-light p-5 d-flex justify-content-center align-items-center mb-5">
                                            <div class="input-group">
                                                <input id="password" type="password" class="form-control" readonly
                                                    placeholder="Password" name="password" value="ibik123">
                                                <button class="input-group-text bg-white" type="button">
                                                    <i id="eye-icon" class="bi bi-eye"></i>
                                                </button>
                                            </div>
                                            <p class="mx-5">Menjadi</p>
                                            <div class="input-group">
                                                <input id="password" type="text" class="form-control" readonly
                                                    placeholder="Password" name="password" value="ibik123">
                                                <button class="input-group-text bg-white" type="button">
                                                    <i id="eye-icon" class="bi bi-eye-slash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        Buatlah action ketika tombol Sign In di klik berubah nama menjadi <span
                                            class="text-warning">`Loading...`</span>, jika kondisi validasi tidak
                                        terpenuhi
                                        menampilkan
                                        tulisan <span class="text-info">`Sign In`</span> dan jika kondisi terpenuhi
                                        menjadi
                                        <span class="text-success">`Success Sign In`</span>.
                                    </li>
                                    <li>Jika Sign In dengan account anda (email ibik anda) dan password npm anda, maka
                                        akan
                                        menampilkan
                                        output hasil dari yang telah disubmit</li>
                                </ul>
                                <div class="text-center">
                                    <a href="{{ url('sign-in/pa') }}" class="btn btn-lg btn-primary">
                                        Click disini untuk melihat hasil kerja yang telah dibuat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="card border h-100">
                            <div class="card-body">
                                <h3>Kelas PB</h3>
                                <ul>
                                    <li>
                                        <p>Buatlah validasi yang sebelumnya menggunakan Alert, menjadi tulisan berwarna
                                            merah
                                            menampilkan <span class="text-danger">Email atau password required</span>
                                            <br />Contoh:
                                        </p>
                                        <div class="w-200px border rounded p-5">
                                            <div class="form-group">
                                                <label class="required fw-bolder">Email</label>
                                                <input id="email" type="email" readonly
                                                    class="form-control form-control-sm" placeholder="name@example.com"
                                                    name="email">
                                                <small class="text-danger error-email">Email is required</small>
                                            </div>
                                        </div>

                                    </li>
                                    <li>
                                        Buatlah action ketika tombol Sign In di klik berubah nama menjadi <span
                                            class="text-warning">`Loading...`</span>, jika kondisi validasi tidak
                                        terpenuhi
                                        menampilkan
                                        tulisan <span class="text-info">`Sign In`</span> dan jika kondisi terpenuhi
                                        menjadi
                                        <span class="text-success">`Success Sign In`</span>.
                                    </li>
                                    <li>Jika Sign In dengan account anda (email ibik anda) dan password npm anda, maka
                                        akan
                                        menampilkan
                                        output hasil dari yang telah disubmit</li>
                                </ul>
                                <div class="text-center">
                                    <a href="{{ url('sign-in/pb') }}" class="btn btn-lg btn-primary">
                                        Click disini untuk melihat hasil kerja yang telah dibuat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="bg-light-info p-5 rounded mt-8">
                    <h1>Deadline Pengumpulan</h1>
                    <ul>
                        <li>Diterima paling lambat tgl <span class="fw-bolder text-danger"> 12 April 2024 hingga pukul
                                23.00</span></li>
                        <li>Pengumpulan melalui GITHUB masing-masing dengan nama Repository: <span
                                class="fw-bolder">TUGAS-3-PW-NPM</span></li>
                        <li>Tambahkan collaborator @FebryFairuz</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
