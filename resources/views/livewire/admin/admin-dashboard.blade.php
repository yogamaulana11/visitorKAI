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
                    <img class="img-profile rounded-circle" src="{{ asset('assets/img/profiel.png') }}" height="20">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-black" href="#">Pengaturan</a></li>
                    <li><a class="dropdown-item text-black" href="#">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}


    {{-- sidebar --}}
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
            {{-- end sidebar --}}


            {{-- card --}}
            <div class="col-10">
                <div class="row row-cols-sm-12">
                    <div class="col mt-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Total
                            </div>
                            <div class="card-body">
                                <div class="card-text">5</div>
                            </div>
                            <div class="card-footer">
                                Pengunjung Hari Ini
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Total
                            </div>
                            <div class="card-body">
                                <div class="card-text">5</div>
                            </div>
                            <div class="card-footer">
                                Pengunjung Minggu Ini
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Total
                            </div>
                            <div class="card-body">
                                <div class="card-text">5</div>
                            </div>
                            <div class="card-footer">
                                Pengunjung Bulan Ini
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Total
                            </div>
                            <div class="card-body">
                                <div class="card-text">5</div>
                            </div>
                            <div class="card-footer">
                                Pengunjung Tahun Ini
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end card --}}


                {{-- chart --}}
                <div class="row row-cols-sm-12">
                    <div class="col-12">
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="card-title">Statistik Pengunjung</div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-sm-12">
                    <div class="col-6">
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="card-title">Statistik Pengunjung</div>
                                <div class="cart-container">
                                    <canvas id="myChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="card-title">Statistik Pengunjung</div>
                                <canvas id="myChart3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end chart --}}


            {{-- chart --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.js"></script>

            <script>
                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli, Agustus', 'September',
                            'Oktober', 'November', 'Desember'
                        ],
                        datasets: [{
                            label: 'Jumlah Pengunjung',
                            data: [12, 19, 3, 5, 2, 3, 4, 7, 42, 3, 52, 34, ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });


                const ctx_a = document.getElementById('myChart2');

                new Chart(ctx_a, {
                    type: 'bar',
                    data: {
                        labels: ['Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli, Agustus', 'September',
                            'Oktober', 'November', 'Desember'
                        ],
                        datasets: [{
                            label: 'Jumlah Pengunjung',
                            data: [12, 19, 3, 5, 2, 3, 4, 7, 42, 3, 52, 34, ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });


                const ctx_b = document.getElementById('myChart3');

                new Chart(ctx_b, {
                    type: 'doughnut',
                    data: {
                        labels: ['Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli, Agustus', 'September',
                            'Oktober', 'November', 'Desember'
                        ],
                        datasets: [{
                            label: 'Jumlah Pengunjung',
                            data: [12, 19, 3, 5, 2, 3, 4, 7, 42, 3, 52, 34, ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
            {{-- end Chart --}}

        </div>
    </div>
</div>
