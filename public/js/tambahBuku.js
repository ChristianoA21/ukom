// Mengambil referensi tombol btn-icons
    var btnIcons = document.querySelector('.btn-icons');

    // Mengambil referensi section tambah-buku
    var tambahBukuSection = document.getElementById('tambah-buku');

    // Menambahkan event listener untuk tombol btn-icons
    btnIcons.addEventListener('click', function() {
        // Toggle (menyembunyikan/menampilkan) class tambah-buku
        if (tambahBukuSection.style.display === 'none') {
            tambahBukuSection.style.display = 'block';
        } else {
            tambahBukuSection.style.display = 'none';
        }
    });