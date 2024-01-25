<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBuku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'BukuID';
    protected $allowedFields = ['BukuID', 'Judul', 'Penulis', 'Penerbit', 'TahunTerbit', 'CoverBuku'];

    // Fungsi untuk menyimpan data buku
    public function saveBuku($data)
    {
        return $this->insert($data);
    }

    // Fungsi untuk mendapatkan data buku
    public function getBuku()
    {
        return $this->findAll();
    }
}
