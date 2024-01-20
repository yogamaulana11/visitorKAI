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
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand ms-4" href="/">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
                </a>
                <div class="me-4">
                    {{-- <a href="{{ url('login') }}"class="btn text-dark rounded-pill">Dashboard</a> --}}
                    {{-- <a href="{{ url('login') }}"class="btn  text-dark rounded-pill">Login</a> --}}
                    <a href="/user"class="btn  text-dark rounded-pill">Beranda</a>
                    <a href="/user/dashboard"class="btn  text-dark rounded-pill">Data</a>
                    <a href="#tentang"class="btn  text-dark rounded-pill">Tentang</a>
                    <a href="#kontak"class="btn  text-dark rounded-pill">Kontak</a>
                    @guest
                        <a href="/login" class="btn  text-dark rounded-pill">Login</a>
                    @else
                        <a href="#logout" wire:click="logout" class="btn  text-dark rounded-pill">Logout</a>
                    @endguest
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <div class="row row-cols-sm-12">
                <div class="col mt-4">
                    <div class="card border-dark text-center">
                        <div class="card-header">
                            Total
                        </div>
                        <div class="card-body">
                            <div class="card-text">120</div>
                        </div>
                        <div class="card-footer">
                            Tamu Berkunjung
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <h2>Tabel Tamu</h2>

            <div class="table-responsive">
                <table class="table table-bordered border-dark">
                    <thead class="text-white text-center" style="background-color: #ED6B23">
                        <tr>
                            <th>No</th>
                            <th>Waktu dibuat</th>
                            <th>Jam Keluar</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>2024-01-20 10:00</td>
                            <td>17:00</td>
                            <td>Jika ditolak ambil dari alasan</td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <button class="btn btn-sm btn-success" disabled>Diterima</button>
                                    <button class="btn btn-sm btn-danger" disabled>Ditolak</button>
                                </div>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
