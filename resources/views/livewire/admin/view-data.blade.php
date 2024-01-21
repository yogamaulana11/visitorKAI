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

    <div>
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand ms-4" href="#">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
                </a>

                <div class="dropdown me-4">
                    <button class="btn  rounded-pill text-black" data-bs-toggle="dropdown">
                        Administrator
                        {{-- <img class="img-profile rounded-circle" src="{{ asset('assets/img/profiel.png') }}"
                            height="20"> --}}
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
                                        <a href="{{ url('admin/') }}"
                                            class="nav-link px-0 align-middle text-white text-decoration-none bi bi-clipboard-data">
                                            <span class="d-none d-sm-inline">Dashboard</span></a>
                                        <a href="{{ url('admin/datatamu') }}"
                                            class="nav-link px-0 align-middle text-white text-decoration-none bi bi-book">
                                            <span class="d-none d-sm-inline">Buku Tamu</span></a>
                                        <a href="{{ url('/admin/datatamu') }}"
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
                    <hr>
                </div>
                {{-- end sidebar --}}

                <div class="col py-3">
                    <h2>Detail Data Tamu</h2>
                    <div>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item fw-bold" style="width:175px">Nama</li>
                            <li class="list-group-item" style="width:220px">{{ $tamuData->nama }}</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item fw-bold" style="width:175px">Kontak</li>
                            <li class="list-group-item" style="width:220px">{{ $tamuData->kontak }}</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item fw-bold" style="width:175px">Instansi</li>
                            <li class="list-group-item" style="width:220px">{{ $tamuData->instansi }}</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item fw-bold" style="width:175px">Tujuan</li>
                            <li class="list-group-item" style="width:220px">{{ $tamuData->tujuan }}</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item fw-bold" style="width:175px">Keperluan</li>
                            <li class="list-group-item" style="width:220px">{{ $tamuData->keperluan }}</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item fw-bold" style="width:175px">Janji Temu</li>
                            <li class="list-group-item" style="width:220px">{{ $tamuData->jadwal_temu }}</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item fw-bold" style="width:175px">Jam Keluar</li>
                            <li class="list-group-item" style="width:220px">{{ $tamuData->waktu_keluar }}</li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item fw-bold" style="width:175px">Alasan Ditolak</li>
                            <li class="list-group-item" style="width:220px">{{ $tamuData->keterangan_tolak }}</li>
                        </ul>
                    </div>

                    <div class="mt-3">
                        <a href="{{ url('admin/datatamu') }}">
                            <button type="button" class="btn text-light" style="background-color: #ED6B23">
                                Kembali
                            </button>
                        </a>
                    </div>
                    {{-- <form class="container">
                        <div class="mb-3 mt-3">
                            <label for="exampleInputEmail1" class="form-label fw-semibold">Waktu Bertemu</label>
                            <input type="time" class="form-control">
                        </div>
                        <button class="btn text-light rounded-pill"
                            style="background-color: #ED6B23">Konfirmasi</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
