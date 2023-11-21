<div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI"  height="24">
              </a>
              <div class="me-4">
                <a href="{{route('registrasi')}}" class="btn text-dark rounded-pill fw-semibold">Registrasi</a>
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
                <form wire:submit.prevent="forLogin">
                    <div class="mb-3">
                      <label class="form-label">NIPP</label>
                      <input wire:model="nipp" type="text" class="form-control" placeholder="Masukkan nipp Anda">
                      @error('nipp')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input wire:model="password" type="password" class="form-control" placeholder="Masukkan Password Anda">
                      @error('password')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="mb-3 form-check">
                      <p class="text-end">
                        <a href="lupapassword" class="text-decoration-none">Lupa Kata sandi</a>
                        </p>
                    </div>
                    <button class="btn text-light rounded-pill  " style="background-color: #ED6B23">Masuk</button>
                  </form>
            </div>
        </div>
    </div>
</div>