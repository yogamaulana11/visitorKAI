<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI"  height="24">
              </a>
            {{-- button login login redirect with icon --}}
            
            <div class="me-4">
                <a href="/login" class="btn text-light rounded-pill fw-semibold" style="background-color: #F5A623; border-color: #F5A623">
                    Masuk
                </a>
                <a href="/register" class="btn text-light rounded-pill fw-semibold" style="background-color: #F5A623; border-color: #F5A623">
                Registrasi
                </a>
            </div>
        </div>
      </nav>
      <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-6">
                <h1 class="fw-bold mt-6">Selamat Datang Pengunjung  </h1>
                <h2 class="mt-3">PT. Kereta Api Indonesia (persero) </h2>
                <h2 class="mt-3">DIVRE III Palembang </h2>
                <p class="fs-5">Jika anda mempunyai keperluan <br>Silahkan lakukan pengisian data</p>
                <button class="btn text-light rounded-pill fw-semibold" style="background-color: #F5A623; border-color: #F5A623" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Isi data diri Anda
                </button>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/kereta.jpg') }}" alt="" class="img-fluid" height="800" width="700">
            </div>
        </div>
        </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Silahkan isi data diri anda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Anda</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Kontak</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Perusahaan/Instansi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Tujuan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Keperluan</label>
    <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> </textarea>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Kirim</button>
      </div>
    </div>
  </div>
</div>




