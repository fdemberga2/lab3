<?php
namespace App\Models;
use CodeIgniter\Model;
class GuestModel extends Model
{
    protected $table = 'fdemberga_masterclass';

    protected $allowedFields = ['NAME', 'EMAIL', 'WEBSITE', 'COMMENT', 'GENDER'];
    
	 public function getGuest()
    {     
        return $this->findAll();
    }
}