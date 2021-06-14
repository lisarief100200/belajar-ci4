<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;

class Admin extends BaseController
{
	public function __construct()
	{
		$this->ModelAdmin = new ModelAdmin();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Admin',
		];
		return view('admin/v_dashboard', $data);
	}

	public function setting()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Setting',
			'setting1' => $this->ModelAdmin->detailSetting(), // v_setting variable $setting1 ambil dari sini ternyata
		];
		return view('admin/v_setting', $data);
	}

	public function saveSetting()
	{
		$file = $this->request->getFile('logo');

		// Jika logo tidak diganti
		if ($file->getError() == 4) {
			$data = [
				'nama_sekolah' => $this->request->getPost('nama_sekolah'),
				'no_telpon' => $this->request->getPost('no_telpon'),
				'email' => $this->request->getPost('email'),
				'web' => $this->request->getPost('web'),
				'alamat' => $this->request->getPost('alamat'),
				'kecamatan' => $this->request->getPost('kecamatan'),
				'kabupaten' => $this->request->getPost('kabupaten'),
				'provinsi' => $this->request->getPost('provinsi'),
				'deskripsi' => $this->request->getPost('deskripsi'),
			];
			$this->ModelAdmin->saveSetting($data);
		}else {
			$setting = $this->ModelAdmin->detailSetting();
			if ($setting['logo'] != "") {
				unlink('./logo/'.$setting['logo']);
			}

			$nama_file = $file->getRandomName();
			$data = [
				'nama_sekolah' => $this->request->getPost('nama_sekolah'),
				'no_telpon' => $this->request->getPost('no_telpon'),
				'email' => $this->request->getPost('email'),
				'web' => $this->request->getPost('web'),
				'alamat' => $this->request->getPost('alamat'),
				'kecamatan' => $this->request->getPost('kecamatan'),
				'kabupaten' => $this->request->getPost('kabupaten'),
				'provinsi' => $this->request->getPost('provinsi'),
				'deskripsi' => $this->request->getPost('deskripsi'),
				'logo' => $nama_file,
			];
			$file->move('logo/', $nama_file);
			$this->ModelAdmin->saveSetting($data);
		}
		session()->setFlashdata('pesan', 'Setting berhasil diganti.');
		return redirect()->to(base_url('admin/setting'));
	}

	public function ta()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Tahun Ajaran',
			'ta' => $this->ModelAdmin->detailTa(), // v_ta variable $ta ambil dari sini ternyata
		];
		return view('admin/v_ta', $data);
	}

	public function saveTa()
	{
		$data = [
			'ta' => $this->request->getPost('ta'),
			'tahun' => $this->request->getPost('tahun'),
			'status' => $this->request->getPost('status'),
		];

		$this->ModelAdmin->saveTa($data);
		session()->setFlashdata('pesan', 'Data tahun ajaran berhasil diubah.');
		return redirect()->to(base_url('admin/ta'));
	}

	public function statusAktif()
	{
		$data = [
			'status' => 1,
		];

		$this->ModelAdmin->resetStatus();
		$this->ModelAdmin->saveTa($data);
		session()->setFlashdata('tambah', 'Status tahun ajaran berhasil diubah.');
		return redirect()->to(base_url('admin/ta'));
	}

	public function statusNonaktif()
	{
		$data = [
			'status' => 0,
		];

		$this->ModelAdmin->saveTa($data);
		session()->setFlashdata('tambah', 'Status tahun ajaran berhasil diubah.');
		return redirect()->to(base_url('admin/ta'));
	}

	public function beranda()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Beranda',
			'beranda' => $this->ModelAdmin->detailSetting(), // v_setting variable $setting1 ambil dari sini ternyata
		];
		return view('admin/v_beranda', $data);
	}

	public function saveBeranda()
	{
		$data = [
			'beranda' => $this->request->getPost('beranda'),
		];
		$this->ModelAdmin->saveSetting($data);
		session()->setFlashdata('pesan', 'Beranda berhasil diubah.');
		return redirect()->to(base_url('admin/beranda'));

	}
}
