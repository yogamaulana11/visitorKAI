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
        {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand ms-4" href="/">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="KAI"  height="24">
                  </a>
                {{-- button login login redirect with icon --}}
                
                <div class="dropdown me-4" style="background-color: #2D2A70">
                    <button class="btn text-light rounded-pill dropdown-toggle text-white" data-bs-toggle="dropdown">
                        Administrator
                    </button>
                    <ul class="dropdown-menu" style="background-color: #2D2A70">
                        <li><a class="dropdown-item text-white" href="#">Pengaturan</a></li>
                        <li><a class="dropdown-item text-white" href="#">Keluar</a></li>
                    </ul>
                </div>
          </nav>
          <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #2D2A70">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Buku Tamu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0 text-white text-decoration-none">
                                <i class=""></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0 align-middle text-white text-decoration-none bi bi-clipboard-data"> <span class="d-none d-sm-inline">DashBoard</span></a>
                                </li>
                            </a>
                        </li>
                        <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white text-decoration-none">
                                
                                <i class=""></i> <span class="ms-1 d-none d-sm-inline">Tools&Components</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0 align-middle text-white text-decoration-none bi bi-book"> <span class="d-none d-sm-inline">Buku Tamu</span></a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white text-decoration-none">
    
                                <i class=""></i> <span class="ms-1 d-none d-sm-inline">Management User</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                               
                                    <a href="#" class="nav-link px-0 text-white text-decoration-none bi bi-people-fill"> <span class="d-none d-sm-inline">User</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white text-decoration-none">
                                <i class=""></i> <span class="ms-1 d-none d-sm-inline">Report</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0 text-white text-decoration-none bi bi-file-text"> <span class="d-none d-sm-inline">Laporan</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white text-decoration-none">
                                <i class=""></i> <span class="ms-1 d-none d-sm-inline">Settings</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                <a href="#" class="nav-link px-0 text-white text-decoration-none bi bi-person-fill"> <span class="d-none d-sm-inline">Profil</span></a>
                                </li>
                                
                        </li>
                        
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col py-3">
                Content area...
            </div>
        </div>
    </div>