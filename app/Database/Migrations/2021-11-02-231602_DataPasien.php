<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataPasien extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pasien'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nik'       => [
				'type'           => 'INT',
				'constraint'     => 16,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jenis_kelamin'       => [
				'type'              => 'ENUM',
				'constraint'        => "'pria','wanita'",
			],
			'no_telp' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'wilayah' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'alamat' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'status' => [
				'type'           => 'ENUM',
				'constraint'     => "'Karantina','Meninggal','sembuh'",
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_pasien');
		$this->forge->createTable('pasien');
	}

	public function down()
	{
		$this->forge->dropTable('pasien');
	}
}
