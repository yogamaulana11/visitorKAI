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


    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>
            <div class="me-4">
                <a href="{{ route('adminlogin') }}" class="btn text-dark rounded-pill fw-normal">Masuk</a>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <div class="container mt-5">
            <div class="mx-auto" style="width: 500px; height: 500px;">
                <div class="container mx-3 border border-2 rounded-3 shadow-lg">
                    <form wire:submit.prevent="forLupaPassword">
                        <div class="mb-2">
                            <h4 class="text-center mt-3">Lupa Kata Sandi</h4>
                            <label for="exampleInputPassword1" class="form-label">NIPP</label>
                            <input wire:model="nipp" type="text" class="form-control"
                                placeholder="Masukkan nipp Anda">
                            @error('nipp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <label class="form-label">No.Telp</label>
                        <input wire:model="no_telp"type="text" class="form-control" placeholder="Masukkan No.Telp Anda">
                        @error('no_telp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div>
                            <button type="submit" class="btn text-light rounded-pill mt-3 "
                                style="background-color: #ED6B23">Konfirmasi</button>
                        </div>
                        <p class="text-center mt-3">
                            <i class="bi bi-arrow-left-square"></i>
                            <a href ="{{ route('adminlogin') }}" class="text-decoration-none text-dark">Kembali Untuk
                                Masuk</a>
                        </p>
                </div>
                </form>
            </div>
        </div>
        <footer class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid d-flex justify-content-between align-items-center"
                style="background-color: rgba(0, 0, 0, 0.05);">
                <div class="text-start">
                    © 2023 Visitor KAI:
                    <a class="text-reset text-decoration-none" href="#">PT.Kereta Api Indonesia (Persero) Divre
                        III Palembang</a>
                </div>
                <div class="text-end">
                    <!-- Isi bagian sebelah kanan footer di sini -->
                </div>
            </div>
        </footer>

    </div>
</div>
