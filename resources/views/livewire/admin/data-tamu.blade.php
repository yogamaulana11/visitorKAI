<div>
    <style>
        .table-container {
            max-height: 95vh;
            /* Sesuaikan dengan tinggi maksimum yang diinginkan */
            overflow-y: auto;
        }
    </style>

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
                    </ul>
                </div>
            </div>
            <div class="col py-3" wire:poll>
                <div>
                    <div class="container mt-3 table-responsive">
                        <h4 class="mb-4">Daftar Tamu</h4>
                        <table class="table table-bordered caption-top">
                            <caption><strong>Daftar Tamu</strong></caption>
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kontak</th>
                                    <th scope="col">Instansi</th>
                                    <th scope="col">Tujuan</th>
                                    <th scope="col">Waktu dibuat</th>
                                    <th scope="col">Konfirmasi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n = 1; ?>
                                @forelse($datas as $data)
                                    <tr>
                                        <th scope="row">{{ $n }}</th>
                                        <td scope="row">{{ $data->nama }}</td>
                                        <td scope="row">{{ $data->kontak }}</td>
                                        <td scope="row">{{ $data->instansi }}</td>
                                        <td scope="row">{{ $data->tujuan }}</td>
                                        <td scope="row">{{ $data->created_at }}</td>
                                        <td scope="row">
                                            <button class="btn btn-sm btn-success" data-bs-toggle="modal"
                                                data-bs-target="#konfirmasiModal">Terima</button>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#konfirmasiModalditolak"> Tolak</button>
                                        </td>
                                        <td scope="col">
                                            <div class="col">
                                                <button type="button" class="btn btn-sm btn-primary">Lihat</button>
                                                <button type="button" class="btn btn-sm btn-secondary">Edit</button>
                                                <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $n++; ?>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Konfirmasi -->
    <div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="konfirmasiModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="konfirmasiModalLabel">Tentukan Jadwalnya</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="date" class="px-4">
                    <input type="time" class="px-4">
                    <p class="mt-3">Apakah Anda Yakin ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="konfirmasiModalditolak" tabindex="-1" aria-labelledby="konfirmasiModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="konfirmasiModalLabel">Beri Alasan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="exampleInputEmail1" class="form-label fw-semibold">Alasan</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> </textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>

</div>
