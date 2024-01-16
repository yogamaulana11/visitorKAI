<div>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>
            <div class="me-4">
                <a href="#" class="btn rounded-pill fw-normal">
                    Masuk
                </a>
            </div>
        </div>
    </nav>
    <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="position-relative">
            <div class="card p-2 text-center">
                <h3 class="mb-4"> <strong>Kode Verifikasi</strong></h3>
                <div><span>Kode OTP sudah dikirim ke nomor</span> <br> <small>*******3467</small></div>
                <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                    <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" />
                </div>
                <div class="mt-4">
                    <button class="btn btn-danger px-4 validate">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>


</div>
