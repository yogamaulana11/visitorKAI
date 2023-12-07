<div>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>

            <div class="dropdown me-4">
                <button class="btn  rounded-pill text-black" data-bs-toggle="dropdown">
                    Administrator
                    <img class="img-profile rounded-circle" src="{{ asset('assets/img/profiel.png') }}" height="20"
                        alt="profile.png">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-black" href="#">Pengaturan</a></li>
                    <li><a class="dropdown-item text-black" href="#">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}


    <div class="container-fluid">
        <div class="row row-cols-sm-12">
            <div class="col-2 " style="background-color: #2D2A70;">
                <div class="">
                    <div class="">
                        <div
                            class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                            <a href="/"
                                class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                id="menu">
                                <li class="nav-item">
                                    <a href="#"
                                        class="nav-link align-middle px-0 text-white text-decoration-none"></a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-clipboard-data">
                                        <span class="d-none d-sm-inline">Dashboard</span></a>
                                    <a href="#"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-book">
                                        <span class="d-none d-sm-inline">Buku Tamu</span></a>
                                    <a href="#"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-file-text">
                                        <span class="d-none d-sm-inline">Laporan</span></a>
                                    <a href="#"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-gear-fill">
                                        <span class="d-none d-sm-inline">Pengaturan</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-10">
                <div class="container">
                    <div class="container mt-3">
                        <div class="container mx-auto border border-2 shadow-lg rounded-2" style="">
                            <h3 class="container fw-bold mt-3 mb-3">Edit Profil
                                <div class="border"></div>
                            </h3>
                            <div class="container mx-auto">
                                <form>
                                    <div class="">
                                        <div class="mb-3">
                                            <div class="">
                                                {{-- <img src="{{ asset('assets/img/avatar.png') }}"
                                                    class="img-fluid img-thumbnail" alt="avatar.png" style=""> --}}
                                            </div>
                                            <div class="">
                                                <label for="formFile" class="form-label">Upload Foto</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" style="">NIPP</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nomor Telpon</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Unit</label>
                                        <select class="form-select" id="">
                                            <option value="1">Pilih</option>
                                            <option value="1">Unit 1</option>
                                            <option value="2">Unit 2</option>
                                            <option value="3">Unit 3</option>
                                            <option value="4">Unit 4</option>
                                        </select>
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4 mt-4">
                                        <button class="btn me-md-2 text-white"
                                            style="background-color: #2D2A70">Batal</button>
                                        <button class="btn text-white" style="background-color: #ED6B23">Simpan
                                            Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-3">
                        <div class="container mx-auto border border-2 shadow-lg rounded-2">
                            <h3 class="container fw-bold mt-3 mb-4">Ubah Kata Sandi
                                <div class="border"></div>
                            </h3>
                            <div class="container mx-auto">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Kata Sandi</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Konfirmasi kata sandi</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4 mt-4">
                                        <button class="btn me-md-2 text-white"
                                            style="background-color: #2D2A70">Batal</button>
                                        <button class="btn text-white" style="background-color: #ED6B23">Simpan
                                            Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
