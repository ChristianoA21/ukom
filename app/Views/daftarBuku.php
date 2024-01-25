<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku - Perpuskuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/images/logo.jpg" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/daftarBuku.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/partialsCSS/navbar.css">
  </head>
  <body>
    <?php echo view('partials/navbar'); ?>
  
  <div class="container-fluid bg-transparent my-4 p-3" style="position: relative;">
    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
      
      <!-- Card -->
      <?php foreach ($buku as $item) : ?>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img class="card-img-top" src="<?= base_url('/uploads/' . $item['CoverBuku']); ?>" alt="Cover Buku">
          <div class="card-body">
            <h5 class="card-title text-center"><?= $item['Judul']; ?></h5>
            <div class="text-center my-4">
              <a href="#" class="btn btn-warning">Pinjam</a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>