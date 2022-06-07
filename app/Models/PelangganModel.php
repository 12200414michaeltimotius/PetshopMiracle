<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = "pelanggan";
    protected $primaryKey = "id_pelanggan";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pelanggan', 'nama', 'jenis_kelamin', 'no_telp', 'email', 'alamat'];
}