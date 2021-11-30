<?php

namespace App\Models;

use CodeIgniter\Model;

class Builder extends Model
{
		protected $db, $builder;

		public function __construct()
		{
			$this->db = \Config\Database::connect();
			$this->builder = $this->db->table('pasien'); // tabel employees  
		}
		public function hitungJumlahSembuh()
	{
		$this->builder->like('status', 'Sembuh');
		return$this->builder->countAllResults();
	}
	public function hitungJumlahMeninggal()
	{
		$this->builder->like('status', 'Meninggal');
		return$this->builder->countAllResults();
	}
	
	public function hitungJumlahKarantina()
	{
		$this->builder->like('status', 'karantina');
		return$this->builder->countAllResults();
	}
	public function tampildatawilayah1()
	{
		$this->builder->like('wilayah', 'Ciputat');
		return$this->builder->countAllResults();
	}
	public function tampildatawilayah2()
	{
		$this->builder->like('wilayah', 'Timur');
		return$this->builder->countAllResults();
	}
	public function tampildatawilayah3()
	{
		$this->builder->like('wilayah', 'Pamulang');
		return$this->builder->countAllResults();
	}
	public function tampildatawilayah4()
	{
		$this->builder->like('wilayah', 'Pondok Aren');
		return$this->builder->countAllResults();
	}
	public function tampildatawilayah5()
	{
		$this->builder->like('wilayah', 'Serpong');
		return$this->builder->countAllResults();
	}
	public function tampildatawilayah6()
	{
		$this->builder->like('wilayah', 'Utara');
		return$this->builder->countAllResults();
	}
	public function tampildatawilayah7()
	{
		$this->builder->like('wilayah', 'Setu');
		return$this->builder->countAllResults();
	}
	public function tampillaki()
	{
		$this->builder->like('jenis_kelamin', 'pria');
		return$this->builder->countAllResults();
	}	
	public function tampilperempuan()
	{
		$this->builder->like('jenis_kelamin', 'Wanita');
		return$this->builder->countAllResults();
	}
}
