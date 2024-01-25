<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin - DaftarBuku</title>
 <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/admin/tambahBuku.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo.jpg" />

  <style type="text/css">
  	.edit-buku {
			display: none;
			background: transparent;
			position: absolute;
			top: 50%;
			left: 50%;
			width: 80%;
			height: 80%;
			transform: translate(-50%, -50%);
			z-index: 999;

		}
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php echo view('partials/admin/navbarAdmin'); ?>
    <!-- partial -->

    <!-- Tambah Buku -->
	<div class="content-wrapper" id="tambah-buku">
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8 grid-margin stretch-card tambah">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-center mb-2">
								<h4>Tambah Buku</h4>
							</div>
							<form method="post" action="<?= site_url('admin/tambahBuku') ?>" enctype="multipart/form-data">
								<div class="mb-3">
									<label for="judul-buku" class="form-label">Judul</label>
									<input type="text" class="form-control" id="judul-buku" name="judul-buku">
								</div>
								<div class="mb-3">
									<label for="penulis-buku" class="form-label">Penulis</label>
									<input type="text" class="form-control" name="penulis-buku" id="penulis-buku">
								</div>
								<div class="mb-3">
									<label for="penerbit-buku" class="form-label">Penerbit</label>
									<input type="text" class="form-control" name="penerbit-buku" id="penerbit-buku">
								</div>
								<div class="mb-3">
									<label for="tahun-terbit" class="form-label">Tahun Terbit</label>
									<input type="text" class="form-control" name="tahun-terbit" id="tahun-terbit">
								</div>
								<div class="mb-3">
								  <label for="cover-buku" class="form-label">Cover Buku</label>
								  <input class="form-control" type="file" name="cover-buku" id="cover-buku">
								</div>
								<button type="submit" class="btn btn-primary">Tambah</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-2"></div>
			</div>
	</div>
	<!-- Akhir Tambah Buku -->

	<!-- Edit Buku -->
	<?php foreach ($buku as $item) : ?>
	<div class="content-wrapper edit-buku" id="editForm<?= $item['BukuID']; ?>" style="display: none;">
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8 grid-margin stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-center mb-2">
								<h4>Edit Buku</h4>
							</div>
							<form method="post" action="<?= site_url('admin/editBuku/' . $item['BukuID']); ?>">
								<div class="mb-3">
									<label for="judul-buku" class="form-label">Judul</label>
									<input type="text" class="form-control" id="judul-buku" name="judul-buku" value="<?= $item['Judul']; ?>">
								</div>
								<div class="mb-3">
									<label for="penulis-buku" class="form-label">Penulis</label>
									<input type="text" class="form-control" name="penulis-buku" id="penulis-buku"  value="<?= $item['Penulis']; ?>">
								</div>
								<div class="mb-3">
									<label for="penerbit-buku" class="form-label">Penerbit</label>
									<input type="text" class="form-control" name="penerbit-buku" id="penerbit-buku"  value="<?= $item['Penerbit']; ?>">
								</div>
								<div class="mb-3">
									<label for="tahun-terbit" class="form-label">Tahun Terbit</label>
									<input type="text" class="form-control" name="tahun-terbit" id="tahun-terbit"  value="<?= $item['TahunTerbit']; ?>">
								</div>
								<button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary" onclick="hideEditForm(<?= $item['BukuID']; ?>)">Batal</button>
            </form>
						</div>
					</div>
				</div>
				<div class="col-lg-2"></div>
			</div>
	</div>
	<?php endforeach; ?>
	<!-- Akhir Edit Buku -->

    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
  <div id="settings-trigger"><i class="ti-settings"></i></div>
  <div id="theme-settings" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <p class="settings-heading">SIDEBAR SKINS</p>
    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
      <div class="img-ss rounded-circle bg-light border me-3"></div>Light
    </div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme">
      <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
    </div>
    <p class="settings-heading mt-2">HEADER SKINS</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles success"></div>
      <div class="tiles warning"></div>
      <div class="tiles danger"></div>
      <div class="tiles info"></div>
      <div class="tiles dark"></div>
      <div class="tiles default"></div>
    </div>
  </div>
</div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
	<?php echo view('partials/admin/sidebarAdmin'); ?>
      <!-- partial -->
	   <div class="main-panel">
	    <div class="content-wrapper">
	        <div class="row">
	            <div class="col-lg-12 grid-margin stretch-card">
	                <div class="card">
	                    <div class="card-body">
	                        <div class="d-flex justify-content-between align-items-center">
	                            <h4 class="card-title">Book List Table</h4>
	                            <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white"><i class="mdi mdi-plus"></i></button>
	                        </div>
	                        <div class="table-responsive">
	                            <table class="table">
	                                <thead>
	                                    <tr>
	                                        <th>Id</th>
	                                        <th>Cover Buku</th>
	                                        <th>Judul</th>
	                                        <th>Penulis</th>
	                                        <th>Penerbit</th>
	                                        <th>Tahun Terbit</th>
	                                        <th>Edit</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	<?php foreach ($buku as $item) : ?>
	                                    <tr>
	                                        <td><?= $item['BukuID']; ?></td>
											                    <td><img src="<?= base_url('/uploads/' . $item['CoverBuku']); ?>" alt="Cover Buku"></td>
											                    <td><?= $item['Judul']; ?></td>
											                    <td><?= $item['Penulis']; ?></td>
											                    <td><?= $item['Penerbit']; ?></td>
											                    <td><?= $item['TahunTerbit']; ?></td>
	                                        <td>
	                                            <button onclick="showEditForm(<?= $item['BukuID']; ?>)" class="badge badge-danger">Edit</button>
	                                            <button onclick="hapusBuku(<?= $item['BukuID'] ?>)" class="badge badge-danger">Hapus</button>
	                                        </td>
	                                    </tr>
	                                    <?php endforeach; ?>
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <!-- content-wrapper ends -->
	    <!-- partial:../../partials/_footer.html -->
	    <?php echo view('partials/admin/footerAdmin'); ?>
	    <!-- partial -->
	</div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- Tambah Data -->
  <script type="text/javascript" src="<?= base_url() ?>js/tambahBuku.js"></script>

  <!-- Edit Data -->
  <script type="text/javascript">
  	function showEditForm(bukuID) {
        // Sembunyikan semua formulir edit
        hideAllEditForms();
        // Tampilkan formulir edit yang sesuai dengan bukuID
        document.getElementById('editForm' + bukuID).style.display = 'table-row';
		}

		function hideEditForm(bukuID) {
		        // Sembunyikan formulir edit yang sesuai dengan bukuID
		        document.getElementById('editForm' + bukuID).style.display = 'none';
		}

		function hideAllEditForms() {
		        // Sembunyikan semua formulir edit
		        <?php foreach ($buku as $item) : ?>
		            document.getElementById('editForm<?= $item['BukuID']; ?>').style.display = 'none';
		        <?php endforeach; ?>
		}
  </script>

  <!-- Hapus Data -->
  <script type="text/javascript" src="<?= base_url() ?>js/hapusBuku.js"></script>
 <!-- plugins:js -->
  <script src="<?= base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url() ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url() ?>assets/vendors/chart.js/Chart.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/progressbar.js/progressbar.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url() ?>assets/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url() ?>assets/js/template.js"></script>
  <script src="<?= base_url() ?>assets/js/settings.js"></script>
  <script src="<?= base_url() ?>assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url() ?>assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/js/dashboard.js"></script>
  <script src="<?= base_url() ?>assets/js/proBanner.js"></script>
  <!-- <script src="../<?= base_url() ?><?= base_url() ?>assets/js/Chart.roundedBarCharts.js"></script> -->
  <script src="<?= base_url() ?>assets/js/time.js" type="text/javascript" ></script>
  <!-- End custom js for this page-->
</body>

</html>