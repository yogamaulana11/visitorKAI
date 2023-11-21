<div>

    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <div>
        {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand ms-4" href="/">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
                </a>
                {{-- button login login redirect with icon --}}

                <div class="dropdown me-4">
                    <button class="btn  rounded-pill dropdown-toggle text-black" data-bs-toggle="dropdown">
                        Administrator
                    </button>
                    <ul class=" dropdown-menu">
                        <li><a class="dropdown-item text-black" href="#">Pengaturan</a></li>
                        <li><a class="dropdown-item text-black" href="#">Keluar</a></li>
                    </ul>
                </div>
        </nav>

        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #2D2A70">
                    <div
                        class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/"
                            class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Buku Tamu</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                            id="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link align-middle px-0 text-white text-decoration-none">
                            <li class="w-100">
                                <a href="#"
                                    class="nav-link px-0 align-middle text-white text-decoration-none bi bi-clipboard-data">
                                    <span class="d-none d-sm-inline">DashBoard</span></a>
                                <a href="#"
                                    class="nav-link px-0 align-middle text-white text-decoration-none bi bi-book"> <span
                                        class="d-none d-sm-inline">Buku Tamu</span></a>
                                <a href="#"
                                    class="nav-link px-0 align-middle text-white text-decoration-none bi bi-file-text">
                                    <span class="d-none d-sm-inline">Laporan</span></a>
                                <a href="#"
                                    class="nav-link px-0 align-middle text-white text-decoration-none bi bi-gear-fill">
                                    <span class="d-none d-sm-inline">Pengaturan</span></a>
                            </li>
                            </a>
                            </li>
                    </div>
                </div>

                <div class="container "> Detail Data Tamu
                    <div class="border border-2 shadow-lg mt-3">
                        <h6 class="px-3 mb-3 mt-3"> Nama Lengkap : Syahrul Ramadhan</h6>
                        <h6 class="px-3 mb-3 mt-3"> Kontak : 081274663467</h6>
                        <h6 class="px-3 mb-3 mt-3"> Instansi : Universitas Bina Darma</h6>
                        <h6 class="px-3 mb-3 mt-3"> Tujuan : Ingin Bertemu Pak Tama</h6>
                        <h6 class="px-3 mb-3 mt-3"> Keperluan : Bimbingan Project</h6>
                        <h6 class="px-3 mb-3 mt-3"> Waktu Bertemu : -</h6><br>

                        <div>
                            <form>
                                <div class="px-3 mb-3">
                                    <label for="" class="form-label">Waktu bertemu</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="px-3">
                                    <button type="submit" class="btn btn-primary mb-3"
                                        style="background-color: #ED6B23">Konfirmasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
