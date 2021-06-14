<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
        helper('form');
    }

    public function index()
    {
        $data = [
			'title' => 'PPDB Online',
			'subtitle'=> 'User',
			'user' => $this->ModelUser->getAllData(),
		];
		return view('admin/v_user', $data);
    }

    public function insertData()
	{
		$file = $this->request->getFile('foto');
		$nama_file = $file->getRandomName();

		$data = [
			'nama_user' => $this->request->getPost('nama_user1'),
			'email' => $this->request->getPost('email'),
			'password' => $this->request->getPost('password'),
			'foto' => $nama_file
		];

		// Upload file foto
		$file->move('foto/', $nama_file);

		$this->ModelUser->insertData($data);
		session()->setFlashdata('tambah', 'Data user berhasil ditambah.');
		return redirect()->to(base_url('user'));
	}

	public function editData($id_user)
	{
		$file = $this->request->getFile('foto');
		if ($file->getError() == 4) {
			$data = [
				'id_user' => $id_user,
				'nama_user' => $this->request->getPost('nama_user1'),
				'email' => $this->request->getPost('email'),
				'password' => $this->request->getPost('password'),
			];
			$this->ModelUser->editData($data);
		}else {
			// Delete foto yang lama
			$user = $this->ModelUser->detailData($id_user);
			if ($user['foto'] != "") {
				unlink('./foto/' . $user['foto']);
			}

			$nama_file = $file->getRandomName();

			$data = [
				'id_user' => $id_user,
				'nama_user' => $this->request->getPost('nama_user1'),
				'email' => $this->request->getPost('email'),
				'password' => $this->request->getPost('password'),
				'foto' => $nama_file
			];
	
			// Upload file foto
			$file->move('foto/', $nama_file);
			$this->ModelUser->editData($data);
		}

		session()->setFlashdata('edit', 'Data user berhasil diubah.');
		return redirect()->to(base_url('user'));
	}

	public function deleteData($id_user)
	{
		// Delete foto yang lama
		$user = $this->ModelUser->detailData($id_user);
		if ($user['foto'] != "") {
			unlink('./foto/' . $user['foto']);
		}
	
		$data = [
			'id_user' => $id_user,
		];

		$this->ModelUser->deleteData($data);
		session()->setFlashdata('delete', 'Data user berhasil dihapus.');
		return redirect()->to(base_url('user'));
	}
}