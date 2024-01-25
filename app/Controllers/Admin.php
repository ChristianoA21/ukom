<?php 

namespace App\Controllers;

use App\Models\ModelUser;
use App\Models\ModelBuku;


class Admin extends BaseController
{
	
	public function __construct()
	{
		$this->ModelUser = new ModelUser();
	}

	public function dashboard(): string 
	{
        $modelBuku = new ModelBuku();
        $data['buku'] = $modelBuku->findAll();

		return view('admin/dashboard', $data);
	}
	public function daftarBuku(): string
	{
		$modelBuku = new ModelBuku();
        $data['buku'] = $modelBuku->findAll();

		return view('admin/tabelDaftarBuku', $data);
	}

    public function user(): string
    {
        $modelUser = new ModelUser();
        $data['user'] = $modelUser->findAll();

        return view('admin/tabelUser', $data);
    }

	public function kategoriBuku(): string 
	{
		return view('admin/tabelKategoriBuku');
	}

	public function tambahBuku() 
    {
        $modelBuku = new ModelBuku();

        // Ambil data buku dari form
        $data = [
            'Judul' => $this->request->getPost('judul-buku'),
            'Penulis' => $this->request->getPost('penulis-buku'),
            'Penerbit' => $this->request->getPost('penerbit-buku'),
            'TahunTerbit' => $this->request->getPost('tahun-terbit'),
            'CoverBuku' => $this->handleUpload(), // Panggil fungsi handleUpload
        ];

        var_dump($this->request->getPost());

        // Simpan data buku ke database
        $modelBuku->saveBuku($data);

        return redirect()->to(base_url('/admin/daftarBuku'));
    }
    protected function handleUpload()
    {
        $coverBuku = $this->request->getFile('cover-buku');

        if ($coverBuku->isValid() && !$coverBuku->hasMoved()) {
            // Pindahkan file ke folder penyimpanan
            $newName = $coverBuku->getRandomName();
            $coverBuku->move(ROOTPATH . 'public/uploads', $newName);

            return $newName;
        } else {
            // File tidak valid, mungkin tindakan lain diperlukan
            return null;
        }
    }
    public function saveBuku($data)
	{
	    // Debug: Tampilkan data yang akan disimpan
	    var_dump($data);

	    // Lakukan penyimpanan data
	    return $this->insert($data);
	}

	public function editBuku($id)
    {
        $modelBuku = new ModelBuku();

        // Ambil data buku dari form atau request
        $data = [
            'Judul' => $this->request->getPost('judul-buku'),
            'Penulis' => $this->request->getPost('penulis-buku'),
            'Penerbit' => $this->request->getPost('penerbit-buku'),
            'TahunTerbit' => $this->request->getPost('tahun-terbit'),
        ];

        // Update data buku di database
        $modelBuku->update($id, $data);

        return redirect()->to(base_url('/admin/daftarBuku'));
    }

    public function hapusBuku($id)
    {
        $modelBuku = new ModelBuku();

        // Hapus data buku dari database
        $modelBuku->delete($id);

        return redirect()->to(base_url('/admin/daftarBuku'));
    }

    public function editUser($id)
    {
        $modelUser = new ModelUser();

        // Ambil data buku dari form atau request
        $data = [
            'Username' => $this->request->getPost('Username'),
            'Email' => $this->request->getPost('Email'),
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat' => $this->request->getPost('Alamat'),
        ];

        // Update data buku di database
        $modelUser->update($id, $data);

        return redirect()->to(base_url('/admin/user'));
    }

    public function hapusUser($id)
    {
        $modelUser = new ModelUser();

        // Hapus data buku dari database
        $modelUser->delete($id);

        return redirect()->to(base_url('/admin/user'));
    }

	
}


 ?>