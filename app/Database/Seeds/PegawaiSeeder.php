<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PegawaiSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama'          =>  'Syarif',
				'jenis_kelamin' =>  'pria',
				'no_telp'       =>  '081234555678',
				'email'         =>  'syarif@gmail.com',
				'alamat'	=>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
				'created_at' => Time::now()
			],
			[
				'nama'          =>  'Michael',
				'jenis_kelamin' =>  'pria',
				'no_telp'       =>  '08571234567',
				'email'         =>  'michael@gmail.com',
				'alamat'	=>  'Jl. Melati Putih No. 77, Gedangan Sidoarjo',
				'created_at' => Time::now()
			],
			[
				'nama'          =>  'Desi',
				'jenis_kelamin' =>  'wanita',
				'no_telp'       =>  '08122334455',
				'email'         =>  'desi@gmail.com',
				'alamat'	=>  'Jl. Rembulan No. 90, Krian Sidoarjo',
				'created_at' => Time::now()
			],
			[
				'nama'          =>  'Maysita',
				'jenis_kelamin' =>  'wanita',
				'no_telp'       =>  '08122334455',
				'email'         =>  'maysita@gmail.com',
				'alamat'	=>  'Jl. Rembulan No. 90, Krian Sidoarjo',
				'created_at' => Time::now()
			],
			[
				'nama'          =>  'Winda',
				'jenis_kelamin' =>  'wanita',
				'no_telp'       =>  '08122334455',
				'email'         =>  'winda@gmail.com',
				'alamat'	=>  'Jl. Rembulan No. 90, Krian Sidoarjo',
				'created_at' => Time::now()
			],
		];
		$this->db->table('pegawai')->insertBatch($data);
	}
}