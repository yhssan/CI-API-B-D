<?php

namespace App\Models;

use CodeIgniter\Model;

class Minuman extends Model
{
    protected $table            = 'minuman';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama', 'deskripsi', 'harga', 'gambar', 'kategori', 'ukuran', 'merek', 'abv'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

   
}
