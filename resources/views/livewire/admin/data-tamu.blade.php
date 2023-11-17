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

      <div class="container mt-3">
        <h4 class="mb-4">Daftar Tamu</h4>            
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Instansi</th>
              <th class="text-center">Kontak</th>
              <th class="text-center">Tujuan</th>
              <th class="text-center">Konfirmasi</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td class="text-center">1</td>
                <td>Syahrul Ramadhan</td>
                <td>Universitas Bina Darma</td>
                <td>081274663467</td>
                <td>Ingin Bertemu Pak Tama Unit IT</td>
                <td>
                    <i class="btn bi bi-check-lg"></i>
                    <i class="btn bi bi-x"></i>
                </td>
                <td>
                    <i class="btn bi bi-eye"></i>
                    <i class="btn bi bi-pencil-square"></i>
                    <i class="btn bi bi-trash"></i>
                </td>
            </tr>
          </tbody>
        </table>
</div>
