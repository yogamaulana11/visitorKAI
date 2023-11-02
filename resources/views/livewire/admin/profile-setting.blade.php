<div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI"  height="24">
              </a>
              <div class="dropdown">
                <button class="btn text-white rounded-5 dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #ED6B23">
                  Administrator
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Setting</a></li>
                </ul>
              </div>
        </div>
      </nav>

      <div class="container py-2">
      <div class="container mt-3">  
      <div class="container mx-auto border border-2 shadow-lg rounded-2" style="width: 750px">
        <h3 class="container fw-bold mt-3 mb-3">Edit Profil
            <div class="border"></div>
        </h3>
        <div class="container mx-auto">
            <form>
                <div class="container">
                <div class="mb-3 row">
                    <div class="col-2">
                        <img src="{{ asset ('assets/img/avatar.png') }}" alt="avatar.png" style="height: 100px" >
                    </div>
                    <div class="col">
                        <label for="formFile" class="form-label">Upload Foto</label>
                        <input class="form-control" type="file" id="formFile">   
                    </div>
                </div>
            </div>
                <div class="mb-3">
                  <label class="form-label" style="">Nama Pengguna</label>
                  <input type="text" class="form-control" >
                </div>
                <div class="mb-3">
                  <label class="form-label">Nomor Telepon</label>
                  <input type="text" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Divisi</label>
                    <input type="text" class="form-control" >
                  </div>
                  <div class="mb-5">
                    <label class="form-label">Jabatan</label>
                    <input type="text" class="form-control" >
                  </div>
                <button type="submit" class=" mb-4 btn text-white" style="background-color: #ED6B23">Simpan Perubahan</button>
              </form>
        </div>
      </div>
    </div>
    </div>

    {{-- <div class="container py-2">
        <div class="container mt-3">  
        <div class="container mx-3 border border-2 shadow-lg rounded-2">
          <h3 class="fw-bold mt-3 mb-3">Ubah Email
              <div class="border"></div>
          </h3>
          <div class="mx-auto" style="width: 900px height: 715px">
              <form>
                  <div class="mb-3">
                    <label class="form-label" style="">Nama Pengguna</label>
                    <input type="text" class="form-control" style="width: 650px">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" style="width: 650px">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Divisi</label>
                      <input type="password" class="form-control" style="width: 650px">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Jabatan</label>
                      <input type="password" class="form-control" style="width: 650px">
                    </div>
                  <button type="submit" class=" mb-3 btn text-white" style="background-color: #ED6B23">Simpan Perubahan</button>
                </form>
          </div>
        </div>
      </div>
      </div>
      
      <div class="container py-2">
        <div class="container mt-3">  
        <div class="container mx-3 border border-2 shadow-lg rounded-2">
          <h3 class="fw-bold mt-3 mb-3">Ubah Kata Sandi
              <div class="border"></div>
          </h3>
          <div class="mx-auto" style="width: 900px height: 715px">
              <form>
                  <div class="mb-3">
                    <label class="form-label" style="">Nama Pengguna</label>
                    <input type="text" class="form-control" style="width: 650px">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" style="width: 650px">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Divisi</label>
                      <input type="password" class="form-control" style="width: 650px">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Jabatan</label>
                      <input type="password" class="form-control" style="width: 650px">
                    </div>
                  <button type="submit" class=" mb-3 btn text-white" style="background-color: #ED6B23">Simpan Perubahan</button>
                </form>
          </div>
        </div>
      </div>
      </div>       --}}
</div>
