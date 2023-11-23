<div>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>

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
    <div class="container-fluid position-fixed">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #2D2A70">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">

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
            <div class="col py-3">
                <div>
                    <div class="container mt-3  table-responsive">
                        <h4 class="mb-4">Daftar Tamu</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kontak</th>
                                    <th scope="col">Instansi</th>
                                    <th scope="col">Tujuan</th>
                                    <th scope="col">Konfirmasi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td scope="row">Putra Wahyudi Akbar</td>
                                    <td scope="row">087801350884</td>
                                    <td scope="row">Universitas Bina Darma</td>
                                    <td scope="row">Ingin bertemu pak tamawwwwwwwwwwwwwwww</td>
                                    <td scope="row">
                                        <i class="btn btn-success bi bi-check-lg"></i>
                                        <i class="btn btn-danger bi bi-x"></i>
                                    </td>
                                    <td scope="row">
                                        <div class="dropdown me-4">
                                            <button class="btn  rounded-pill dropdown-toggle text-black"
                                                data-bs-toggle="dropdown">
                                                Action
                                            </button>
                                            <ul class=" dropdown-menu">
                                                <li>
                                                    <i class="btn bi bi-eye"></i>Lihat
                                                </li>
                                                <li><i class="btn bi bi-pencil-square"></i>Edit</li>
                                                <li><i class="btn bi bi-trash"></i>hapus</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
