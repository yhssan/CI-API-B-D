<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'project_login';
    protected $primaryKey       = 'id';

    protected $allowedFields    = ['nama', 'username', 'password', 'level'];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
