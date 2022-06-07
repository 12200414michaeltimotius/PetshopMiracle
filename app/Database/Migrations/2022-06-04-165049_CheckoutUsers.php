<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CheckoutUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'namapanggilan'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'namaasli'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'banyak_barang'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'alamat_pelanggan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],


            'created_at' => [
                'type'           => 'DATETIME',
                'null'            => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'            => true,
            ]

        ]);
        $this->forge->addPrimaryKey('namapanggilan', true);
        $this->forge->createTable('checkoutuser');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('checkoutuser');
    }
}