function hapusBuku(UserID) {
        if (confirm('Apakah Anda yakin ingin menghapus akun ini?')) {
            window.location.href = `<?= site_url('admin/hapusUser/') ?>${UserID}`;
        }
    }