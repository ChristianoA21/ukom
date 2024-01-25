<?php

namespace App\Controllers;

use App\Models\ModelUser;
use App\Models\ModelBuku;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
    }

    public function index(): string
    {
        return view('index');
    }

    public function login() : string
    {
        return view('login');
    }

    public function register() : string 
    {
        return view('register');
    }
    public function daftarBuku() : string 
    {
        $modelBuku = new ModelBuku();
        $data['buku'] = $modelBuku->findAll();
        
        return view ('daftarBuku', $data);
    }

    public function logout()
    {
        // Hapus session
        $session = session();
        $session->remove('Email');
        $session->remove('Status_login');

        // Redirect ke halaman login atau halaman lain yang sesuai
        return redirect()->to(base_url('/login'));
    }

    

}
