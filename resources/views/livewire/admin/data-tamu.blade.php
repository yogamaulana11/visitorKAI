<div>
    @if ($detail_data)
        @livewire('admin.view-data', ['ID' => $this->id_tamu])
    @else
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }

            .table-container {
                max-height: 95vh;
                /* Sesuaikan dengan tinggi maksimum yang diinginkan */
                overflow-y: auto;
            }
        </style>

        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand ms-4" href="">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
                </a>

                <div class="dropdown me-4">
                    <button class="btn  rounded-pill text-black" data-bs-toggle="dropdown">
                        Administrator
                        <img class="img-profile rounded-circle" src="{{ asset('assets/img/profiel.png') }}"
                            height="20">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-black" href="{{ route('setting') }}">Pengaturan</a></li>
                        <li><a class="dropdown-item text-black" href="{{ route('adminlogin') }}">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- end navbar --}}


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
                                            <span class="d-none d-sm-inline">Laporan</span></a>
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



                @if ($show_edit)
                    <div class="col-10 py-3">
                        @include('livewire.admin.edit-data')
                    </div>
                @else
                    <div class="col-10 py-3">
                        @if ($showform)
                            <div class="col mt-4">

                                <div class="card text-center" style="width: 18rem;">
                                    <div class="card-header">
                                        Tentukan Jadwal
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text">
                                            <label for="">Waktu bertemu</label>
                                            <input wire:model='jadwal_temu' type="datetime-local" class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button wire:click="showForm('{{ $this->id_tamu }}')"
                                            class="btn btn-danger">Batal</button>
                                        <button wire:click="jadwalTemu" class="btn btn-success">Kirim</button>
                                    </div>
                                </div>
                            @elseif($showform1)
                                <div class="col mt-4">

                                    <div class="card text-center" style="width: 20rem;">
                                        <div class="card-header">
                                            Beri Alasan
                                        </div>
                                        <div class="card-body">
                                            <div class="">
                                                <label for="">Alasan</label>
                                                <textarea wire:model='keterangan_tolak' type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button wire:click="showForm1('{{ $this->id_tamu }}')" class="btn btn-danger">Batal</button>
                                            <button wire:click='keteranganTolak' class="btn btn-success">Kirim</button>
                                        </div>
                                    </div>
                                @else
                                    <div>
                                        <div class="container mt-3 table-responsive">
                                            <h4 class="mb-4">Daftar Tamu</h4>
                                            {{-- <div wire:click="showForm" class="btn">auto Refresh</div> --}}
                                            {{-- @if ($showform)
                        testing
                    @else --}}
                                            <table class="table table-bordered caption-top" wire:poll>
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
                                                            {{-- konfirmasi --}}
                                                            <td scope="row">
                                                                @if($data->jadwal_temu !=null || $data->keterangan_tolak !==null)
                                                                    {{-- sembunyikan --}}
                                                                    @if($data->jadwal_temu)
                                                                    <div class="d-grip gap-2 d-md-flex justify-content-md-center">
                                                                        <button class="btn btn-sm btn-success" disabled>Diterima</button>
                                                                        </div>    
                                                                    @elseif($data->keterangan_tolak)
                                                                    <div class="d-grip gap-2 d-md-flex justify-content-md-center">
                                                                        <button type="button" class="btn btn-sm btn-danger" disabled>Ditolak</button>
                                                                    </div>    
                                                                    @endif
                                                                @else
                                                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                                    <button wire:click="showForm({{ $data->id }})"
                                                                        class="btn btn-sm btn-success">Terima</button>
                                                                    <button wire:click='showForm1({{ $data->id }})'
                                                                        class="btn btn-sm btn-danger">
                                                                        Tolak</button>
                                                                </div>
                                                                @endif
                                                            </td>
                                                            <td scope="col">
                                                                <div class="col d-grid gap-2 d-md-flex justify-content-md-center">
                                                                    <div wire:click="detailData('{{ $data->id }}')"
                                                                        type="button" class="btn btn-sm btn-primary">
                                                                        Lihat</div>

                                                                    <div wire:click="showEdit('{{ $data->id }}')"
                                                                        type="button"
                                                                        class="btn btn-sm btn-secondary">
                                                                        Edit
                                                                    </div>
                                                                    <a href="">
                                                                        <div wire:click="hapusTamu('{{ $data->id }}')"
                                                                            type="button"
                                                                            class="btn btn-sm btn-danger">
                                                                            Hapus</div>
                                                                    </a>
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
                                            {{-- @endif --}}
                                        </div>
                                    </div>
                        @endif
                    </div>
            </div>
        </div>
    @endif
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
</div>
@endif
</div>
