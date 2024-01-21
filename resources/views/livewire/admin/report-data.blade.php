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


    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="#">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>

            <div class="dropdown me-4">
                <button class="btn  rounded-pill text-black dropdown-toggle" data-bs-toggle="dropdown">
                    Administrator
                    {{-- <img class="img-profile rounded-circle" src="{{ asset('assets/img/profiel.png') }}" height="20"> --}}
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-black" href="{{ route('setting') }}">Pengaturan</a></li>
                    <li><a class="dropdown-item text-black btn" wire:click="logout">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}


    {{-- sidebar --}}
    <div class="container-fluid">
        <div class="row row-cols-sm-12">
            <div class="col-2 " style="background-color: #2D2A70;">
                <div class="">
                    <div class="">
                        <div
                            class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                            <a href="/"
                                class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                id="menu">
                                <li class="nav-item">
                                    <a href="#"
                                        class="nav-link align-middle px-0 text-white text-decoration-none"></a>
                                </li>
                                <li class="">
                                    <a href="{{ url('admin') }}"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-clipboard-data">
                                        <span class="d-none d-sm-inline">Dashboard</span></a>
                                    <a href="datatamu"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-book">
                                        <span class="d-none d-sm-inline">Buku Tamu</span></a>
                                    <a href="{{ route('reportdata') }}"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-file-text">
                                        <span class="d-none d-sm-inline">Export</span></a>
                                    <a href="{{ route('setting') }}"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-gear-fill">
                                        <span class="d-none d-sm-inline">Pengaturan</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end sidebar --}}

            <div class="col-10">
                <div class="card" style="width: 20rem;">
                    <div class="card-header text-center">
                        Export ke Excel
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form class="col" action="">
                                <div class="row mb-4">
                                    <label for="date" class="">Dari</label>
                                    <input wire:model="start_date" class="form-control" type="date" id=""
                                        name="">
                                </div>
                                <div class="row mb-4">
                                    <label for="date">Sampai</label>
                                    <input wire:model="end_date" class="form-control" type="date" id=""
                                        name="">
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button wire:click="exportData" href="#" class="btn btn-success btn-sm"
                                        type="button">Konfirmasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
