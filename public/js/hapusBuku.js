function hapusBuku(bukuId) {
        if (confirm('Apakah Anda yakin ingin menghapus buku ini?')) {
            window.location.href = `<?= site_url('admin/hapusBuku/') ?>${bukuId}`;
        }
    }