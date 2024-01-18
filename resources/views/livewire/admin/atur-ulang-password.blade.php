<div>
    <!-- Sertakan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Sertakan Font Poppins dari Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <!-- Sertakan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        #footer {
            position: fixed;
            bottom: -3%;
            width: 100%;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>
            <div class="me-4">
                <a href="" class="btn text-dark rounded-pill">Masuk</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-6 centergrid">
                <div class="container border border-2 rounded-3 shadow-lg">
                    <form>
                        <div class="mb-1">
                            <h4 class="text-center mb-4 mt-3">Atur Ulang Kata Sandi</h4>
                            <label for="exampleInputPassword1" class="form-label">Kata Sandi Baru</label>
                            <input type="password" class="form-control mb-3" id="exampleInputPassword1"
                                placeholder="Masukkan Kata Sandi Baru Anda">
                            <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Masukkan Kata Sandi Anda">
                        </div>
                        <div class="mt-1 form-check">
                        </div>
                        <div class="d-flex justify-content-end mb-3 mt-0">
                            <button type="button" class="btn text-light rounded-pill"
                                style="background-color: #ED6B23; margin-bottom: 5px;" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Selesai</button>
                        </div>
                        <p class="text-center">
                            <i class="bi bi-arrow-left-square"></i>
                            <a href ="" class="text-decoration-none text-dark">Kembali Untuk Masuk</a>
                        </p>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berhasil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Kata Sandi Anda Berhasil di ubah.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Selesai</button>
                </div>
            </div>
        </div>
    </div>
</div>
