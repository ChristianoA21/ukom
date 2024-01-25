<?php 
namespace App\Models;

use CodeIgniter\Model;

/**
 * 
 */
class ModelUser extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'UserID';
	protected $allowedFields = ['UserID', 'Username', 'Password', 'Email', 'NamaLengkap', 'Alamat'];

	public function tambah_akun($data)
	{
		$builder = $this->db->table($this->table);
		return $builder->insert($data);
	}

	public function dapatkan_user($email) {
		if ($email == false) {
			return $this->findAll();
		} else {
			return $this->getWhere(['email' => $email]);
		}
	}

	public function getUser()
    {
        return $this->findAll();
    }
}
 ?>