<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckoutUsersModel extends Model
{
    protected $table = "checkoutuser";
    protected $primaryKey = "namapanggilan";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['namapanggilan', 'namaasli', 'password', 'email', 'banyak_barang', 'alamat_pelanggan'];
}