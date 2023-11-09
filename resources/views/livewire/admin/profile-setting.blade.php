<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
  body {
    font-family: 'Poppins', sans-serif;
  }
</style>
</head>

<div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI"  height="24">
              </a>
              <div class="dropdown">
                <button class="btn text-bold rounded-5 dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false">
                  Administrator
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                  <li><a class="dropdown-item" href="#">Keluar</a></li>
                </ul>
              </div>
        </div>
      </nav>

      <div class="container py-2">
      <div class="container mt-3">  
      <div class="container mx-auto border border-2 shadow-lg rounded-2" style="">
        <h3 class="container fw-bold mt-3 mb-3">Edit Profil
            <div class="border"></div>
        </h3>
        <div class="container mx-auto">
            <form>
                <div class="container">
                <div class="mb-3 row">
                    <div class="col-2">
                        <img src="{{ asset ('assets/img/avatar.png') }}" class="img-fluid img-thumbnail" alt="avatar.png" style="" >
                    </div>
                    <div class="col mb-2 mt-4">
                        <label for="formFile" class="form-label">Upload Foto</label>
                        <input class="form-control" type="file" id="formFile">   
                    </div>
                </div>
            </div>
                <div class="mb-3">
                  <label class="form-label" style="">NPP</label>
                  <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                  <label class="form-label">Kata Sandi</label>
                  <input type="password" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi kata sandi</label>
                    <input type="password" class="form-control" >
                </div>
                <div class="mb-3">
                  <label class="form-label">Nomor Telpon</label>
                  <input type="text" class="form-control">
                </div>
                  <div class="mb-3">
                    <label class="form-label">Unit</label>
                    {{-- <label class="input-group-text">Unit</label> --}}
                    <select class="form-select" id="unit">
                      <option value="1">Pilih</option>
                      <option value="1">Unit 1</option>
                      <option value="2">Unit 2</option>
                      <option value="3">Unit 3</option>
                      <option value="4">Unit 4</option>
                    </select>
                  </div>
                {{-- <button type="submit" class="mb-4 mt btn text-white" style="background-color: #ED6B23">Simpan Perubahan</button> --}}
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4 mt-4">
                  <button class="btn me-md-2 text-white" type="button" style="background-color: #2D2A70">Batal</button>
                  <button class="btn text-white" type="button" style="background-color: #ED6B23">Simpan Perubahan</button>
                </div>
              </form>
        </div>
      </div>
    </div>
    </div>
  
    {{-- <div class="container py-2">
      <div class="container mt-3">
        <div class="container mx-auto border border-2 shadow-lg rounded-2" style="width: 750px">
          <h3 class="container fw-bold mt-3 mb-4">Ubah email
            <div class="border"></div>
          </h3>
          <div class="container mx-auto">
            <form>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Masukkan email anda">
              </div>
              <button type="submit" class="mt-3 mb-3 btn text-white" style="background-color: #ED6B23">Ubah email</button>
            </form>
          </div>
        </div>
      </div>
    </div> --}}

    
</div>
