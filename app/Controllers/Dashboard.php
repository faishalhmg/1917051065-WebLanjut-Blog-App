<?php

namespace App\Controllers;

use App\Models\Builder;
use App\Models\PasienModel;

class Dashboard extends BaseController
{
	protected $pasien; 
    function __construct()
    {
        $this->pasien = new PasienModel();
        $this->builder = new Builder();
    }
 
    public function index()
    {
        $data = [
			'title' => "Covid - Data",
		];
        $data1['pasien'] = $this->pasien->countAllResults();
        $kondisiPasien = $this->pasien->select('status AS kondisi,COUNT(id_pasien) AS jumlah')->groupBy('kondisi')->get();
        $kondisiPasien1 = $this->pasien->select('status AS kondisilabel');
        $data2 = [
            'sembuh'=> $this->builder->hitungJumlahSembuh(),
            'meninggal'=> $this->builder->hitungJumlahMeninggal(),
            'karantina'=> $this->builder->hitungJumlahKarantina(),
            'jumlah_pasien'=> $this->pasien->countAllResults(),
            'kondisi_pasien'=> $kondisiPasien,
            'pria'=> $this->builder->tampillaki(),
            'wanita'=> $this->builder->tampilperempuan(),
            
        ];
        echo view('layouts/header',$data);
		
        return view('Dashboard',$data1+$data2);

		
        
    }
    public function index1()
    {
        $data = [
			'title' => "Covid - Data Pasien",
		];
        $data1['pasien'] = $this->pasien->findAll();
        echo view('layouts/header',$data);
		echo view('layouts/navbar');
        echo view('dataPasien', $data1);
        echo view('layouts/footer');
    }
    public function index3()
    {
        $data = [
			'title' => "Covid - Data Wilayah",
		];
        $data1 = [
            'Ciputat'=> $this->builder->tampildatawilayah1(),
            'CiputatTimur'=> $this->builder->tampildatawilayah2(),
            'Pamulang'=> $this->builder->tampildatawilayah3(),
            'PondokAren'=> $this->builder->tampildatawilayah4(),
            'Serpong'=> $this->builder->tampildatawilayah5(),
            'SerpongUtara'=> $this->builder->tampildatawilayah6(),
            'Setu'=> $this->builder->tampildatawilayah7(),
            'wilayah'=> ['Ciputat','Ciputat Timur','Pamulang','Pondok Aren','Serpong','Serpong Utara','Setu'],
        ];
        
        echo view('layouts/header',$data);
		echo view('layouts/navbar');
        echo view('daftarWilayah', $data1);
        echo view('layouts/footer');
    }
   
}
