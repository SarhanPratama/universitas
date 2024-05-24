<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card text-center">
                    <div class="card-header">
                        <h3 class="fw-bolder">SISTEM AKADEMIK</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title my-5">Selamat Datang!</h5>
                        <a href="{{ url('fakultas') }}" class="btn btn-primary">Kelola Fakultas</a>
                        <a href="{{ url('jenjang') }}" class="btn btn-secondary mx-4">Kelola Jenjang</a>
                        <a href="{{ url('kelas') }}" class="btn btn-warning ">Kelola Kelas</a>
                        <a href="{{ url('prodi') }}" class="btn btn-success mx-4">Kelola Program Studi</a>
                        <a href="{{ url('ruang') }}" class="btn btn-danger me-4">Kelola ruang</a>
                        <a href="{{ url('tahun_akademik') }}" class="btn btn-info ">Kelola Tahun Akademik</a>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
