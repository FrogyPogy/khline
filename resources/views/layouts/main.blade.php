<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sc
    ale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <html lang="en" data-bs-theme="dark">
    <link rel="stylesheet" href="css/main.css">
    <title>Kemenkumham | Konsultasi Hukum</title>
</head>
<body>
    <div class="bg-main">
        @include('partials.navbar')
        <div class="container mt-5 cm">
            <br><br>
            <h1>Layanan Umum Konsultasi</h1>
                <div class="mt-3">
                    <h1>Hukum Kemenkumham</h1>
                </div>
                <div class="mt-3">
                    <h1>Jateng</h1>
                </div>
                <div class="mt-4">
                    <p>Tanyakan Permasalahan Hukum Anda Disini</p>
                </div>
                <div class="mt-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajukan Pertanyaan</button>
                </div>
                <div class="mb-3 cmt">
                    Lihat Selengkapnya
                </div>
        </div>
    </div>
    <div class="container mt-5 cm">

        <div class="btn-group">
            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                --pilih kategori--
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Warisan</a></li>
                <li><a class="dropdown-item" href="#">Korupsi</a></li>
                <li><a class="dropdown-item" href="#">Sertifikat</a></li>
                <li><a class="dropdown-item" href="#">HAM</a></li>
            </ul>
        </div>
        <div class="btn-group ms-2">
            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                --Urutkan Berdasarkan--
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Terbaru</a></li>
                <li><a class="dropdown-item" href="#">Terlama</a></li>
            </ul>
        </div>
        <!--Main Content-->
        <div class="mt-3">
            @yield('container')
        </div>         
    </div>
    <!--Modal pertanyaan-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-3" id="exampleModalLabel">Kolom Pengajuan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @yield('modals')

                
            </div>
        </div>
    </div>
    </div>
       
        
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>