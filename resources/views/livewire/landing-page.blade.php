<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI"  height="24">
              </a>
            {{-- button login login redirect with icon --}}
            
            <div class="me-4">
                <a href="#home" class="btn text-white rounded-pill fw-semibold" style="background-color: #ED6B23">
                    Home
                </a>
                <a href="#contact" class="btn text-white rounded-pill fw-semibold" style="background-color: #2D2A70">
                Contact
                </a>
            </div>
        </div>
      </nav>
      <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-6">
                <h1 class="fw-bold mt-6" id="home">Selamat Datang Pengunjung  </h1>
                <h2 class="mt-3">PT. Kereta Api Indonesia (persero) </h2>
                <h2 class="mt-3">DIVRE III Palembang </h2>
                <p class="fs-5">Jika anda mempunyai keperluan <br>Silahkan lakukan pengisian data</p>
                <button class="btn text-light rounded-pill fw-semibold" style="background-color: #ED6B23; border-color: #ED6B23" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
<footer class="black text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
          <div
            class="bg-image hover-overlay ripple shadow-1-strong rounded"
            data-ripple-color="light"
          >
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3677590043526!2d104.77453907414551!3d-2.9952366398803476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b7620745ac795%3A0xf96163bd7b43b45!2sPT.%20KAI%20(Persero)%20Divre%20III%20Palembang!5e0!3m2!1sen!2sid!4v1698498672096!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <a href="#!">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.2);"
              ></div>
            </a>
          </div>
        </div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase" id="contact">Hubungi Kami</h5>

        <ul class="list-unstyled mb-0">
          <li>
          <img
              src="{{ asset('assets/img/lgmaps.png') }}"
              class="w-15"
              class="h-15"
            />
            <a href="#!" class="text-black">Alamat Kantor</a>
          </li>
          <li>
            <a href="#!" class="text-black">JL. Jenderal Ahmad Yani, 13 Ulu No. 541, 
Palembang, 13 Ulu, Seberang Ulu II, 
Palembang City, Sumatera Selatan 30116</a>
          </li>
          <li>
          <img
              src="{{ asset('assets/img/mail.png') }}"
              class="w-15"
              class="h-15"
            />
            <a href="#!" class="text-black">Email</a>
          </li>
          <li>
            <a href="#!" class="text-black">cs@kai.id</a>
          </li>
          <li>
          <img
              src="{{ asset('assets/img/telepon.png') }}"
              class="w-15"
              class="h-15"
            />
            <a href="#!" class="text-black">Telepon</a>
          </li>
          <li>
            <a href="#!" class="text-black">(0711) 515555</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  
</footer>





