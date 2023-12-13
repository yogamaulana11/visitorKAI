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

    {{-- navbar --}}
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="20">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="#">Beranda</a>
                        <a class="nav-link active" href="#">Tentang</a>
                        <a class="nav-link active" href="#">Kontak</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    {{-- end navbar --}}

    <div class="container">
        <div class="container">

            {{-- jumbotron --}}
            <div class="row mt-5">
                <div class="col text-center text-white bg-image rounded"
                    style="background-image: url('{{ asset('assets/img/kai.jpg') }}');">
                    <h1 class="fw-bold mt-3 mb-4">Selamat Datang Pengunjung</h1>
                    <h2 class="fw-semibold">PT. Kereta Api Indonesia (Persero)</h2>
                    <h2 class="fw-semibold">Divre III Palembang</h2>
                    <p class="fs-5 mt-3 ">Jika anda mempunyai keperluan, silahkan lakukan <br> pengisian data.</p>

                    {{-- buttonn input --}}
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Isi Keperluan</button>
                    </div>
                    {{-- end button input --}}
                </div>

                {{-- card About --}}
                <div class="container mt-5">
                    <div class="row">
                        <div class="card">
                            <div class="card-header fw-bold fs-4 text-center" style="color: #ED6B23;">
                                Tentang Perusahaan
                            </div>
                            <div class="card-body fw-normal fs-6 text-center">
                                <div class="card-title fw-normal fs-6 text-center">
                                    PT Kereta Api Indonesia atau disingkat PT KAI adalah Badan Usaha Milik Negara (BUMN)
                                    yang memiliki
                                    produk utama berupa layanan transportasi umum dengan kereta api. Adapun layanan yang
                                    disediakan PT
                                    Kereta Api Indonesia mencakup angkutan penumpang dan barang.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end card About --}}


                {{-- card visi misi --}}
                <div class="container mt-5">
                    <div class="row">
                        <div class="card">
                            <div class="card-header fw-bold fs-4 text-center" style="color: #ED6B23;">
                                Visi dan Misi
                            </div>
                            <div class="card-body">
                                <div class="card-title fw-normal fs-6">
                                    <p class="fw-bold">Visi
                                    <ul>
                                        <li>Menjadi solusi ekosistem transportasi terbaik untuk Indonesia</li>
                                    </ul>
                                    </p>
                                    <dl>
                                        Misi
                                        <dd>
                                            <ul>
                                                <li>Untuk menyediakan sistem transportasi yang aman, efisien, berbasis
                                                    digital, dan
                                                    berkembang pesat untuk memenuhi kebutuhan pelanggan</li>
                                                <li>Untuk mengembangkan solusi transportasi massal yang terintegrasi
                                                    melalui investasi dalam
                                                    sumber daya manusia, infrastruktur, dan teknologi.</li>
                                                <li>Untuk memajukan pembangunan nasional melalui kemitraan dengan para
                                                    pemangku kepentingan,
                                                    termasuk memprakarsai dan melaksanakan pengembangan
                                                    infrastruktur-infrastruktur penting
                                                    terkait transportasi.</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end card visi misi --}}

                {{-- card kontak --}}
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ratio ratio-16x9">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3677590043526!2d104.77453907414551!3d-2.9952366398803476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b7620745ac795%3A0xf96163bd7b43b45!2sPT.%20KAI%20(Persero)%20Divre%20III%20Palembang!5e0!3m2!1sen!2sid!4v1698498672096!5m2!1sen!2sid"
                                            width="" height="" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header fw-bold fs-4 text-center" style="color: #ED6B23;">
                                    Hubungi Kami
                                </div>
                                <div class="card-body">
                                    <i class="bi bi-geo-alt-fill px-1" style="color: #ED6B23"></i><span
                                        class="fw-semibold">Alamat
                                        Kantor</span>
                                    <p class="px-4">JL. Jenderal Ahmad Yani, 13 Ulu No. 541, Palembang, 13 Ulu,
                                        Seberang Ulu II, Kota
                                        Palembang, Sumatera Selatan 30116</p>
                                    <i class="bi bi-envelope-fill px-1" style="color: #ED6B23"></i><span
                                        class="fw-semibold">Email</span>
                                    <p class="px-4">cs@kai.id</p>
                                    <i class="bi bi-telephone-forward-fill px-1" style="color: #ED6B23"></i><span
                                        class="fw-semibold">Telepon</span>
                                    <p class="px-4">(0711) 515555</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end card kontak --}}

                <footer class="bg-body-tertiary text-center text-lg-start mt-4">
                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                        © 2024 Copyright:
                        <a class="text-body" href="">visitorkai.id</a>
                    </div>
                    <!-- Copyright -->
                </footer>

            </div>
            {{-- end jumbotron --}}

        </div>
    </div>
</div>
