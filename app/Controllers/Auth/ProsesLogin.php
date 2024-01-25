<?php 

namespace App\Controllers\Auth;

use App\Models\ModelUser;

use App\Controllers\BaseController;

class ProsesLogin extends BaseController
{
	
	public function __construct()
    {
        $this->ModelUser = new ModelUser();
    }

    public function proses_login()
    {
        $email = $this->request->getPost('Email');
        $password = $this->request->getPost('Password');
        $username = $this->request->getPost('Username');

       $dapatkan_user = $this->ModelUser->dapatkan_user($email)->getRow();

       if ($email === 'admin@admin.com' && $password === 'admin') {
           return redirect()->to(base_url('/admin/dashboard'));
       } else {
           if ($dapatkan_user) {
               if (password_verify($password, $dapatkan_user->Password)) {
                   session()->set([
                    'Email'=>$dapatkan_user->Email, 
                    'Status_login'=> TRUE,
                   ]);

                   return redirect()->to(base_url('/'));
               }else {
                    return redirect()->to(base_url('/login'));

               }
           } else {
                return redirect()->to(base_url('/login'));

            }
       }

    }
}
 ?>