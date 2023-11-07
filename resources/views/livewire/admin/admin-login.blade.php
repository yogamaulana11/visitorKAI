<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI"  height="24">
              </a>
              <div class="me-4">
                <a href="/login" class="btn text-dark rounded-pill fw-semibold">
                    Home
                </a>
                <a href="/register" class="btn text-dark rounded-pill fw-semibold">Contact</a>
              </div>
        </div>
      </nav>
      <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/kereta.jpg')}}" alt="" class="img-fluid" height="200" width="450">
                <div> 
                <h3 class="text-center">PT.Kereta Api Indonesia</h3>
                <h3 class="text-center">(PERSERO)</h3>
                <h3 class="text-center">DIVRE III PALEMBANG</h3>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-center" >Selamat Datang</h1>
                <p class="text-center">Silahkan Login akun Anda</p>
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">NPP</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NPP Anda">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password Anda">
                    </div>
                    <div class="mb-3 form-check">
                      
                      <p class="text-end">
                        <a href="lupapassword" class="text-decoration-none">Lupa Kata sandi</a>
                        </p>
                    </div>
                    <button type="submit" class="btn text-light rounded-pill  " style="background-color: #ED6B23">Masuk</button>
                  </form>
            </div>
        </div>
    </div>
</div>
</body>