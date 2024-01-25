 <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/logo.jpg" width="50" class="icons"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url() ?>">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url() ?>daftarBuku">Daftar Buku</a>
            </li>
            <?php if (session()->get('Status_login')): ?>
            <li class="nav-item" id="daftar-pinjam">
              <a class="nav-link active" href="<?= base_url() ?>daftarPinjam">Daftar Peminjaman</a>
            </li>
            <?php endif; ?>
          </ul>
          <div class="d-flex">
              <ul class="navbar-nav">
                <?php if (session()->get('Status_login')): ?>
                    <!-- Jika sudah login, tampilkan nama pengguna dan tombol logout -->
                    <li class="nav-item">
                      <a class="nav-link active" href="<?= base_url() ?>">
                        <?= session()->get('Email'); ?>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?= base_url() ?>logout">
                      Logout</a>
                    </li>
                <?php else: ?>
                    <!-- Jika belum login, tampilkan tombol login dan registrasi -->
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="<?= base_url() ?>login">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="<?= base_url() ?>register">
                      Register</a>
                    </li>
                <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
  </nav>