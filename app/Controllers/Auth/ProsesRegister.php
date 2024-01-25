<?php 

namespace App\Controllers\Auth;

use App\Models\ModelUser;

use App\Controllers\BaseController;

class ProsesRegister extends BaseController
{
	
	public function __construct()
    {
        $this->ModelUser = new ModelUser();
    }

    public function proses_register() : string
    {
        $username = $this->request->getPost('Username');
        $password = $this->request->getPost('Password');
        $email = $this->request->getPost('Email');
        $namalengkap = $this->request->getPost('NamaLengkap');
        $alamat = $this->request->getPost('Alamat');

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $data = [
            'Username' => $username, 
            'Password' => $hashedPassword, 
            'Email' => $email, 
            'NamaLengkap' => $namalengkap, 
            'Alamat' => $alamat,
        ];

        $this->ModelUser->tambah_akun($data);
        return view('login');

    }
}

 ?>