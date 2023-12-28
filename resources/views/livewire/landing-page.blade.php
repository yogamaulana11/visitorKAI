<div>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>
            <div class="me-4">
                <a href="#beranda"class="btn fw-semibold text-dark rounded-pill">Beranda</a>
                <a href="#tentang"class="btn fw-semibold text-dark rounded-pill">Tentang</a>
                <a href="#kontak"class="btn fw-semibold text-dark rounded-pill">Kontak</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @if ($showSuccess)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil di Buat!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row mt-5">
            <div class="col-md-6">
                <h2 class="fw-bold mt-6" id="beranda">Selamat Datang Pengunjung </h2>
                <h4 class="fw-semibold mt-3">PT. Kereta Api Indonesia (persero) Divre III</h4>
                <h4 class="fw-semibold mt-3">Palembang</h4>
                <p class="fs-5">Jika anda mempunyai keperluan, Silahkan lakukan<br> pengisian data</p>
                <button class="btn text-light rounded-pill fw-semibold"
                    style="background-color: #2D2A70; border-color: #2D2A70" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Isi Keperluan
                </button>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/kereta.jpg') }}" alt="" class="img-fluid" height="240"
                    width="500">
            </div>
            <div class="col-md-6">

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="{{ asset('assets/img/kereta 1.jpg') }}" alt="" class="img-fluid" height="240"
                    width="400">
            </div>
            <div class="col-md-8">
                <h2 class="fw-bold" style="color: #ED6B23; font-size: 24px" id="tentang">Tentang Perusahaan</h2>
                <p>PT Kereta Api Indonesia atau disingkat PT KAI adalah Badan Usaha Milik Negara (BUMN) yang memiliki
                    produk utama berupa layanan transportasi umum dengan kereta api. Adapun layanan yang disediakan PT
                    Kereta Api Indonesia mencakup angkutan penumpang dan barang.</p>
            </div>
            <div class="row mt-5">
                <h4 class="fw-semibold" style="color: #ED6B23">Visi dan Misi</h4>
                <p>Visi <br>Menjadi solusi ekosistem transportasi terbaik untuk Indonesia</p>
                <dl>
                    Misi
                    <dd>
                        <ul>
                            <li>Untuk menyediakan sistem transportasi yang aman, efisien, berbasis digital, dan
                                berkembang pesat untuk memenuhi kebutuhan pelanggan</li>
                            <li>Untuk mengembangkan solusi transportasi massal yang terintegrasi melalui investasi dalam
                                sumber daya manusia, infrastruktur, dan teknologi.</li>
                            <li>Untuk memajukan pembangunan nasional melalui kemitraan dengan para pemangku kepentingan,
                                termasuk memprakarsai dan melaksanakan pengembangan infrastruktur-infrastruktur penting
                                terkait transportasi.</li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Silahkan isi data diri anda</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent='buatKeperluan'>
                        <div class="mb-3">
                            <label class="form-label">Nama Anda</label>
                            <input type="text" wire:model='nama' class="form-control">
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kontak</label>
                            <input type="text" wire:model='kontak' class="form-control">
                            @error('kontak')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Perusahaan/Instansi</label>
                            <input type="text" wire:model='instansi' class="form-control">
                            @error('instansi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tujuan</label>
                            <input type="text" wire:model='tujuan' class="form-control">
                            @error('tujuan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keperluan</label>
                            <textarea type="text" wire:model='keperluan' class="form-control"> </textarea>
                            @error('keperluan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button data-bs-dismiss="modal" type="submit" class="btn btn-primary"
                                style="background-color: #ED6B23">Kirim</button>
                        </div>
                    </form>
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
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3677590043526!2d104.77453907414551!3d-2.9952366398803476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b7620745ac795%3A0xf96163bd7b43b45!2sPT.%20KAI%20(Persero)%20Divre%20III%20Palembang!5e0!3m2!1sen!2sid!4v1698498672096!5m2!1sen!2sid"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5 class="fw-bold px-1 mb-3"style="color: #ED6B23;" id="kontak">Hubungi Kami</h5>
                    <i class="bi bi-geo-alt-fill px-1"></i><span class="fw-semibold">Alamat Kantor</span>
                    <p class="px-4">JL. Jenderal Ahmad Yani, 13 Ulu No. 541, Palembang, 13 Ulu, Seberang Ulu II, Kota
                        Palembang, Sumatera Selatan 30116</p>
                    <i class="bi bi-envelope-fill px-1"></i><span class="fw-semibold">Email</span>
                    <p class="px-4">cs@kai.id</p>
                    <i class="bi bi-telephone-forward-fill px-1"></i><span class="fw-semibold">Telepon</span>
                    <p class="px-4">(0711) 515555</p>
                </div>
            </div>
        </div>
    </footer>
</div>
