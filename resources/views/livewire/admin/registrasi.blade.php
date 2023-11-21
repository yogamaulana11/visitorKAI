<div>
{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI"  height="24">
              </a>
            {{-- button login login redirect with icon --}}
            
            <div class="me-4">
                <a href="{{route('adminlogin')}}" class="btn text-dark rounded-pill fw-semibold">Masuk</a>
            </div>
        </div>
      </nav>
      <div class="container py-5">
      <div class="container mt-5 " >
        <div class="mx-auto " style="width: 500px; height: 500px;">
          <div class="container mx-3 border border-2 shadow-lg rounded-2">
            <form wire:submit.prevent="forRegistrasi">
              <div class="mb-2">
                <h3 class="text-center mt-3">Registrasi</h3>
                  <div class="mb-2"> 
                    <label for="exampleInputEmail1" class="form-label">NIPP</label>
                    <input wire:model="nipp" type="text" class="form-control" placeholder="Masukan NIPP Anda">
                    @error('nipp')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-2">
                    <label  for= class="form-label">Role</label>
                    <select wire:model="role" class="form-select" id="">
                      <option value="">Pilih</option>
                      <option value="admin">Admin</option>
                      <option value="pegawai">Pegawai</option>
                      <option value="it support">IT Support</option>
                      <option value="sdm">SDM</option>
                    </select>
                  </div>
                  <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">kata Sandi</label>
                    <input wire:model="password" type="password" class="form-control" placeholder="Masukan Kata Sandi Anda">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-1 form-check"></div>
                  <button type="submit" class="btn text-light rounded-pill" style="background-color: #ED6B23">Daftar</button>
              </div>
            </form>
                  <div class="mb-2">
                  <p class="text-center">
                  <p class="text-center">Sudah punya akun? <a href="{{route('adminlogin')}}" class="text-center">Masuk</a></p> 
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
