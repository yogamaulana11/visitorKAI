<div>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            /* display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0; */
        }

        /* .loginpage {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } */
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
            <a class="navbar-brand ms-4" href="#">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>
            <div class="me-4">
                {{-- <a href="{{ url('/') }}"class="btn text-dark rounded-pill">Beranda</a> --}}
                {{-- <a href="{{ url('register') }}"class="btn fw-semibold text-dark rounded-pill">Registrasi</a> --}}
            </div>
        </div>
    </nav>

    <div class="py-5">
        <div class="container border border-dark rounded" style="width: 500px; height: 400px;">
            <h2 class="text-center mt-4">Login</h2>
            <div class="mt-5">
                <form wire:submit.prevent="login" class="">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input wire:model="email" type="email" class="form-control" id=""
                            placeholder="Masukan Email Anda">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input id="myInput" wire:model='password' type="password" class="form-control"
                            placeholder="Masukan Password Anda">
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
                    <button type="submit" class="btn text-white" style="background-color: #ED6B23">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
