<?php
 
namespace App\Controllers;
 
use App\Models\PasienModel;
 
class Pasien extends BaseController
{
    protected $pasien;
 
    function __construct()
    {
        $this->pasien = new PasienModel();
    }

    
    public function index()
    {
        $data = [
			'title' => "Covid - Data",
			'nama'	=> "Faishal Hariz"
		];
        $data1['pasien'] = $this->pasien->findAll();
        echo view('layouts/header',$data);
        echo view('pasien/index', $data1);
		
    }
    public function index1()
    {
        
        $data1['pasien'] = $this->pasien->findAll();
        echo view('pasien/index', $data1);
	
    }
    public function create()
    {
        $data = [
			'title' => "Covid - Tambah",
		];
        echo view('layouts/header',$data);
        return view('pasien/create');
		
    }
    public function data()
    {
        if (!$this->validate([
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'wilayah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->pasien->insert([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'wilayah' => $this->request->getVar('wilayah'),
            'alamat' => $this->request->getVar('alamat'),
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('message', 'Tambah Data Pasien Berhasil');
        return redirect()->to('pasien');
    }
    function edit($id)
    {
        $dataPasien = $this->pasien->find($id);
        if (empty($dataPasien)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pasien Tidak ditemukan !');
        }
        $data['pasien'] = $dataPasien;
      
            $data1 = [
                'title'=> "Covid 19 - edit"
            ];
            echo view('layouts/header', $data1);
            
            return view('pasien/edit', $data);
            
    }
    public function update($id)
    {
        if (!$this->validate([
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'wilayah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
 
        $this->pasien->update($id, [
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'wilayah' => $this->request->getVar('wilayah'),
            'alamat' => $this->request->getVar('alamat'),
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('message', 'Update Data Pasien Berhasil');
        return redirect()->to('pasien');
    }
    function delete($id)
    {
        $dataPasien = $this->pasien->find($id);
        if (empty($dataPasien)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pasien Tidak ditemukan !');
        }
        $this->pasien->delete($id);
        session()->setFlashdata('message', 'Delete Data Pasien Berhasil');
        return redirect()->to('pasien');
    }

    
}