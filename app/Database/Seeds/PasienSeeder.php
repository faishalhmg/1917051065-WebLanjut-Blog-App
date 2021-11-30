<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PasienSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nik'           =>  1234567891011121,
				'nama'          =>  'Anton',
				'jenis_kelamin' =>  'pria',
				'no_telp'       =>  '081234555678',
				'email'         =>  'anton@gmail.com',
				'wilayah'       =>  'Tangerang Selatan',
				'alamat'	=>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
				'status'	=>  'Isolasi Mandiri',
				'created_at' => Time::now()
			],
			[
				'nik'           =>  1234567891011122,
				'nama'          =>  'Budi',
				'jenis_kelamin' =>  'pria',
				'no_telp'       =>  '08571234567',
				'email'         =>  'budi@gmail.com',
				'wilayah'       =>  'Jakarta',
				'alamat'	=>  'Jl. Melati Putih No. 77, Gedangan Sidoarjo',
				'status'	=>  'Isolasi Mandiri',
				'created_at' => Time::now()
			],
			[
				'nik'           =>  1234567891011123,
				'nama'          =>  'Dita',
				'jenis_kelamin' =>  'wanita',
				'no_telp'       =>  '08122334455',
				'email'         =>  'dita@gmail.com',
				'wilayah'       =>  'Lampung',
				'alamat'	=>  'Jl. Rembulan No. 90, Krian Sidoarjo',
				'status'	=>  'Isolasi Mandiri',
				'created_at' => Time::now()
			]
		];
		$this->db->table('pasien')->insertBatch($data);
	}
}
