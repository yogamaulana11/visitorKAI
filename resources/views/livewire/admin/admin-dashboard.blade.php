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
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="#">
                <img src="{{ asset('assets/img/logo.png') }}" alt="KAI" height="24">
            </a>

            <div class="dropdown me-4">
                <button class="btn  rounded-pill text-black" data-bs-toggle="dropdown">
                    Administrator
                    <img class="img-profile rounded-circle" src="{{ asset('assets/img/profiel.png') }}" height="20">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-black" href="{{ route('setting') }}">Pengaturan</a></li>
                    <li><a class="dropdown-item text-black" href="{{ route('adminlogin') }}">Keluar</a></li>
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
                                    <a href="{{ url('admin/') }}"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-clipboard-data">
                                        <span class="d-none d-sm-inline">Dashboard</span></a>
                                    <a href="{{ url('admin/datatamu') }}"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-book">
                                        <span class="d-none d-sm-inline">Buku Tamu</span></a>
                                    <a href="{{ url('/admin/reportdata') }}"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-file-text">
                                        <span class="d-none d-sm-inline">Export</span></a>
                                    <a href="{{ route('setting') }}"
                                        class="nav-link px-0 align-middle text-white text-decoration-none bi bi-gear-fill">
                                        <span class="d-none d-sm-inline">Pengaturan</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            {{-- end sidebar --}}


            {{-- card --}}
            <div class="col-10">
                <livewire:admin.components.dashboard />
                {{-- cart --}}
                <div class="row row-cols-sm-12">
                    <div class="col-6">
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="card-title">Statistik Line Chart Pengunjung </div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="card-title">Statistik Bar Chart Pengunjung</div>
                                <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end cart --}}
            </div>
            {{-- end chart --}}


            {{-- chart --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.js"></script>

            <script>
                const ctx = document.getElementById('myChart');
                var datas = {{ Js::from($data) }}
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli, Agustus', 'September',
                            'Oktober', 'November', 'Desember'
                        ],
                        datasets: [{
                            label: 'Jumlah Pengunjung',
                            data: datas,
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
                            data: datas,
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
                            data: datas,
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
