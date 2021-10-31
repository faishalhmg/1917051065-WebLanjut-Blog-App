<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class AdminPostsController extends BaseController
{
	protected $posts;
 
    function __construct()
    {
        $this->posts = new PostModel();
    }
	public function index()
	{
		$PostModel = model("PostModel");
		$data =[
			'posts' => $PostModel->findAll(),
		];
		return view("posts/index",$data);
	}

	public function create()
	{
		session();
		$data =[
			'validation' => \Config\Services::validation(),
		];
		return view("posts/create", $data);
	}
	public function store()
	{
		$valid = $this->validate([
			"judul" =>[
				"label" => "judul",
				"rules" => "required",
				"errors" => [
				"required" => "{field} Harus Diisi!"
				]
			],
			"slug" =>[
				"label" => "slug",
				"rules" => "required|is_unique[posts.slug]",
				"errors" => [
					"required" => "{field} Harus Diisi!",
					"is_unique" => "{field} sudah ada!",
				]
			],
			"kategori" =>[
				"label" => "kategori",
				"rules" => "required",
				"errors" => [
					"required" => "{field} Harus Diisi!",
				]
			],
			"author" =>[
				"label" => "author",
				"rules" => "required",
				"errors" => [
					"required" => "{field} Harus Diisi!",
				]
			],
			"deskripsi" =>[
				"label" => "author",
				"rules" => "required",
				"errors" => [
					"required" => "{field} Harus Diisi!",
				]
			],
		]);
		if($valid){
		$data = [
			'judul' => $this->request->getVar("judul"),
			'slug' => $this->request->getVar("slug"),
			'kategori' => $this->request->getVar("kategori"),
			'author' => $this->request->getVar("author"),
			'deskripsi' => $this->request->getVar("deskripsi"),
		];
		$PostModel = model("PostModel");
		$PostModel->insert($data);
		return redirect()->to(base_url('/admin/posts'));
		}
	else{
		return redirect()->to(base_url('/admin/posts/create'))->withInput()->with('validation',
		$this->validator);
	}
}
public function edit($post_id)
    {
		$dataPosts = $this->posts->find($post_id);
		if (empty($dataPosts)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Tidak ditemukan !');
        }
		$data1['posts'] = $dataPosts;
		$data =[
			'validation' => \Config\Services::validation(),
		];
		return view("posts/edit", $data1+$data);
    }
public function update($post_id)
    {
        if (!$this->validate([
			"judul" =>[
				"label" => "judul",
				"rules" => "required",
				"errors" => [
				"required" => "{field} Harus Diisi!"
				]
			],
			"slug" =>[
				"label" => "slug",
				"rules" => "required|is_unique[posts.slug]",
				"errors" => [
					"required" => "{field} Harus Diisi!",
					"is_unique" => "{field} sudah ada!",
				]
			],
			"kategori" =>[
				"label" => "kategori",
				"rules" => "required",
				"errors" => [
					"required" => "{field} Harus Diisi!",
				]
			],
			"author" =>[
				"label" => "author",
				"rules" => "required",
				"errors" => [
					"required" => "{field} Harus Diisi!",
				]
			],
			"deskripsi" =>[
				"label" => "author",
				"rules" => "required",
				"errors" => [
					"required" => "{field} Harus Diisi!",
				]
			],
		])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
 
        $this->posts->update($post_id, [
            'judul' => $this->request->getVar('judul'),
            'slug' => $this->request->getVar('slug'),
            'kategori' => $this->request->getVar('kategori'),
            'author' => $this->request->getVar('author'),
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);
		
        session()->setFlashdata('message', 'Update Data Berhasil');
        return redirect()->to('/admin/posts');
    }
	function delete($post_id)
    {
        $data = $this->posts->find($post_id);
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pasien Tidak ditemukan !');
        }
        $this->posts->delete($post_id);
        session()->setFlashdata('message', 'Delete Data Pasien Berhasil');
        return redirect()->to('/admin/posts');
    }
}