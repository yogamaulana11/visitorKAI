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

    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>
            <div class="me-4">
                <a href="{{ url('login') }}"class="btn text-dark rounded-pill">Masuk</a>
                {{-- <a href="{{ url('register') }}"class="btn fw-semibold text-dark rounded-pill">Registrasi</a> --}}
            </div>
        </div>
    </nav>

    <div class="py-5">
        <div class="py-5">
            <div class="container border border-dark rounded" style="width: 500px; height: 410px;">
                <h2 class="text-center mb-2 mt-2">Daftar</h2>
                <div class="">
                    <form class="" wire:submit.prevent="register">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input wire:model="name" type="text" class="form-control" id=""
                                placeholder="Masukan Email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input wire:model="email" type="email" class="form-control" id=""
                                placeholder="Masukan Email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nomor Telepon</label>
                            <input wire:model="kontak" type="text" class="form-control" id=""
                                placeholder="Masukan Nomor Telepon Anda">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input wire:model="password" id="myInput" wire:model='password' type="password"
                                class="form-control" placeholder="Masukan Password Anda">
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input onclick="myFunction()" value="show" type="checkbox" class="form-check-input"
                                    id="">
                                <label class="form-check-label" for="dropdownCheck">
                                    Tampilkan
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn text-white" style="background-color: #ED6B23">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
