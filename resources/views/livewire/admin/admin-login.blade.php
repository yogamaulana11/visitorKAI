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

        .sh {
            cursor: pointer;
        }

        .sh,
        sh:hover {
            color: #333
        }
    </style>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>
            <div class="me-4">
                <a href="{{ route('registrasi') }}" class="btn text-dark rounded-pill">Registrasi</a>
            </div>
        </div>
    </nav>
    {{-- @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif --}}
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/kereta.jpg') }}" alt="" class="img-fluid" height="200"
                    width="450">
                <div>
                    <h3 class="text-center">PT.Kereta Api Indonesia</h3>
                    <h3 class="text-center">(PERSERO)</h3>
                    <h3 class="text-center">DIVRE III PALEMBANG</h3>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-center">Selamat Datang</h1>
                <p class="text-center">Silahkan Login akun Anda</p>
                <form wire:submit.prevent="forLogin">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">NIPP</label>
                        <input wire:model="nipp" type="text" class="form-control" placeholder="Masukkan nipp Anda">
                        @error('nipp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" id="myInput" wire:model='password' class="form-control"
                            placeholder="Masukkan Password Anda">
                        <label for="">Show Password</label>
                        <input type="checkbox" onclick="myFunction()" value="show">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <p class="text-end">
                            <a href="{{ route('LupaPassword') }}" class="text-decoration-none">Lupa Kata sandi</a>
                        </p>
                    </div>
                    <button type="submit" class="btn text-light rounded-pill  "
                        style="background-color: #ED6B23">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
