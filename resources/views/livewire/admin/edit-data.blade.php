<div>

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
                    <li><a class="dropdown-item text-black" href="{{ route('setting') }}">Pengaturan</a></li>
                    <li><a class="dropdown-item text-black" href="{{ route('adminlogin') }}">Keluar</a></li>
                </ul>
            </div>
    </nav>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #2D2A70">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Buku Tamu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">

                        <li class="w-100">
                            <a href="#"
                                class="nav-link px-0 align-middle text-white text-decoration-none bi bi-clipboard-data">
                                <span class="d-none d-sm-inline">DashBoard</span></a>
                            <a href="#"
                                class="nav-link px-0 align-middle text-white text-decoration-none bi bi bi-book">
                                <span class="d-none d-sm-inline">Buku Tamu</span></a>
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
            <div class="col py-3">
                <h2>Edit Data Tamu</h2>
                <form class="container border border-2 shadow-lg rounded-2">
                    <div class="mb-3 mt-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kontak</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Instansi</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tujuan</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Keperluan</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4 mt-4">
                        <button class="btn text-white me-md-2" style="background-color: #2D2A70;"
                            type="button">Batal</button>
                        <button class="btn text-white" style="background-color: #ED6B23;" type="button">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
