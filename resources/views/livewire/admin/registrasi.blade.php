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

            <div class="me-4">
                <a href="{{ route('adminlogin') }}" class="btn text-dark rounded-pill fw-semibold">Masuk</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="container mt-5 ">
            <div class="mx-auto " style="width: 500px; height: 500px;">
                <div class="container mx-3 border border-2 shadow-lg rounded-2">
                    <form wire:submit.prevent="forRegistrasi">
                        <div class="mb-2">
                            <h3 class="text-center mt-3">Registrasi</h3>
                            <div class="mb-2">
                                <label class="form-label">NIPP</label>
                                <input wire:model="nipp" type="text" class="form-control"
                                    placeholder="Masukan NIPP Anda">
                                @error('nipp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">No.Telp</label>
                                <input wire:model="no_telp" type="text" class="form-control"
                                    placeholder="Masukan No.Telp Anda">
                                @error('no_telp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Role</label>
                                <select wire:model="role" class="form-select" id="">
                                    <option value="">Pilih</option>
                                    <option value="admin">Unit 1</option>
                                    <option value="pegawai">Unit 2</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">kata Sandi</label>
                                <input wire:model="password" type="password" class="form-control"
                                    placeholder="Masukan Kata Sandi Anda">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-1 form-check"></div>
                            <button data-bs-toggle="modal" data-bs-target="#modalSuccess" type="submit"
                                class="btn text-light rounded-pill" style="background-color: #ED6B23">Daftar</button>

                        </div>
                    </form>
                    <div class="mb-2">
                        <p class="text-center">
                        <p class="text-center">Sudah punya akun? <a href="{{ route('adminlogin') }}"
                                class="text-center">Masuk</a></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<!-- Copyright -->
{{-- <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset" href="#"> 2023 Visitor KAI | PT. Kereta Api Indonesia (Persero) Divre III Palembang.</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div> --}}
