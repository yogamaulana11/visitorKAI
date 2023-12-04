<div>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>

            <div class="dropdown me-4">
                <button class="btn  rounded-pill text-black" data-bs-toggle="dropdown">
                    Administrator
                    <img class="img-profile rounded-circle"  src="{{asset('assets/img/profiel.png')}}" height="24">
                </button>
                <ul class=" dropdown-menu">
                    <li><a class="dropdown-item text-black" href="#">Pengaturan</a></li>
                    <li><a class="dropdown-item text-black" href="#">Keluar</a></li>
                </ul>
            </div>
    </nav>
    <div class="container-fluid position-fixed">
        <div class="row mt-3">
            <div class="col-md-2" style="background-color: #2D2A70">
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
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mt-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">Pengunjung Hari ini</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">Total Pengunjung</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                            <h5 class="card-title text-center">100</h5>
                            <h5 class="card-text text-center">Total Keseluruhan Pengunjung</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="mt-5">
                    <div class="card" style="width: 18rem;">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mt-5">
                    <div class="card" style="width: 18rem;">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
