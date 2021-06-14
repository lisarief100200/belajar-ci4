<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendidikan;

class Pendidikan extends BaseController
{
    public function __construct()
    {
        $this->ModelPendidikan = new ModelPendidikan();
        helper('form');
    }

    public function index()
    {
        $data = [
			'title' => 'PPDB Online',
			'subtitle'=> 'Pendidikan',
			'pendidikan' => $this->ModelPendidikan->getAllData(),
		];
		return view('admin/v_pendidikan', $data);
    }

    public function insertData()
	{
		$data = [
			'pendidikan' => $this->request->getPost('pendidikan1'),
		];

		$this->ModelPendidikan->insertData($data);
		session()->setFlashdata('tambah', 'Data pendidikan berhasil ditambah.');
		return redirect()->to(base_url('pendidikan'));
	}

	public function editData($id_pendidikan)
	{
		$data = [
			'id_pendidikan' => $id_pendidikan,
			'pendidikan' => $this->request->getPost('pendidikan1'),
		];

		$this->ModelPendidikan->editData($data);
		session()->setFlashdata('edit', 'Data pendidikan berhasil diubah.');
		return redirect()->to(base_url('pendidikan'));
	}

	public function deleteData($id_pendidikan)
	{
		$data = [
			'id_pendidikan' => $id_pendidikan,
		];

		$this->ModelPendidikan->deleteData($data);
		session()->setFlashdata('delete', 'Data pendidikan berhasil dihapus.');
		return redirect()->to(base_url('pendidikan'));
	}
}