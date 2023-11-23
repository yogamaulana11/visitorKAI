<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<div>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal show border-end" style="background-color: #2D2A70;">
                    <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                        <h3 class="text-white">Buku Tamu</h3>
                        <a href="" class=" text-white" data-bs-parent="#sidebar"><i class="bi bi-clipboard-data"></i>Dashboard</a>
                        <a href="" class="   text-white" data-bs-parent="#sidebar"><i class="bi bi-book"></i>Buku Tamu</a>
                        <a href="" class="   text-white" data-bs-parent="#sidebar"><i class="bi bi-file-text"></i>Laporan</a>
                        <a href="" class="   text-white" data-bs-parent="#sidebar"><i class="bi bi-gear-fill"></i>Pengaturan</a>
                    </div>
                </div>
            </div>
            <main class="col ps-md-2 pt-2">
                <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="border rounded-3 p-1 text-decoration-none "><i class="bi bi-list bi-lg py-2 p-1"></i></a>
                <a class="navbar-brand ms-4" href="/">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
                </a>
                <h4 class="text-center pt-5">Dashboard Statistik Pengunjung</h4>
                <div class="row justify-content-evenly px-5">
                    <div class="col-md-4">
                        Pengunjung Hari Ini
                        <div class="container border rounded-3">
                            <div class="col-12">
                                <div class="text-center fs-5 pt-3">Total Pengunjung</div>
                                <div class="text-center fs-5 pt-3">5</div>
                                <div class="text-center fs-5 pt-3">Total Keseluruhan Pengunjung</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        Pengunjung Kemarin
                        <div class="container border rounded-3">
                            <div class="col-12">
                                <div class="text-center fs-5 pt-3">Total Pengunjung</div>
                                <div class="text-center fs-5 pt-3">5</div>
                                <div class="text-center fs-5 pt-3">Total Keseluruhan Pengunjung</div>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-5">
                        <div class="row justify-content-evenly px-1">
                            <div class="col-md-4">
                                Pengunjung Bulan Ini
                                <div class="container border rounded-3">
                                    <div class="col-12">
                                        <div class="text-center fs-5 pt-3">Total Pengunjung</div>
                                        <div class="text-center fs-5 pt-3">5</div>
                                        <div class="text-center fs-5 pt-3">Total Keseluruhan Pengunjung</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row justify-content-evenly px-1">
                                    Pengunjung Tahun Ini
                                    <div class="container border rounded-3">
                                        <div class="col-12">
                                            <div class="text-center fs-5 pt-3">Total Pengunjung</div>
                                            <div class="text-center fs-5 pt-3">5</div>
                                            <div class="text-center fs-5 pt-3">Total Keseluruhan Pengunjung</div>
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>

            </main>
        </div>
    </div>