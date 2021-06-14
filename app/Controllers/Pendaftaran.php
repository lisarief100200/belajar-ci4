<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;
use App\Models\ModelSiswa;

class Pendaftaran extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAdmin = new ModelAdmin();
        $this->ModelSiswa = new ModelSiswa();
    }

	public function index()
	{
		$data = [
            'title' => 'PPDB Online',
            'subtitle' => 'Pendaftaran',
            'ta' => $this->ModelAdmin->statusTa(),
            'validation' => \Config\Services::validation(), // gakepake juga, keskip wkwk
        ];
        return view('v_pendaftaran', $data);
	}

	public function simpanPendaftaran()
    {
        if ($this->validate([
            'nisn' => [
                'label' => 'NISN',
                'rules'  => 'required|min_length[10]|max_length[10]|is_unique[tbl_siswa.nisn]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'min_length' => '{field} minimal 10 karakter.',
                    'max_length' => '{field} maksimal 10 karakter.', 
                    'is_unique' => '{field} ini sudah terdaftar.', 
                ]
            ],
            'nama_lengkap' => [
                'label' => 'Nama Lengkap',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'nama_panggilan' => [
                'label' => 'Nama Panggilan',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'tempat_lahir' => [
                'label' => 'Tempat Lahir',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'jk' => [
                'label' => 'Jenis Kelamin',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'tanggal' => [
                'label' => 'Tanggal',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'bulan' => [
                'label' => 'Bulan',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'tahun' => [
                'label' => 'Tahun',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
        ])) {
            //$tanggal_lahir => $this->request->getPost('tahun'). '-' .('bulan'). '-' . ('tahun');

            $tahun = $this->request->getPost('tahun');
            $bulan = $this->request->getPost('bulan');
            $tanggal = $this->request->getPost('tanggal');
            $no_pendaftaran = $this->ModelSiswa->noPendaftaran();

            $data = [
            'nisn' => $this->request->getPost('nisn'),
            'no_pendaftaran' => $no_pendaftaran,
            'tgl_pendaftaran' => date('Y-m-d'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'nama_panggilan' => $this->request->getPost('nama_panggilan'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'jk' => $this->request->getPost('jk'),
            'tgl_lahir' => $tahun . '-' . $bulan . '-' . $tanggal,
            'password' => $tanggal . $bulan . $tahun,
                    ];
            $this->ModelSiswa->insertData($data);
            session()->setFlashdata('pesan', 'Pendaftaran berhasil, silahkan login untuk melengkapi data.');
            return redirect()->to('/pendaftaran');
            // jika tidak ada validasi maka simpan data
        } else{
            // jika ada validasi
            $validation = \Config\Services::validation(); // gakepake harus di initialized dl, ga tau gimana
            return redirect()->to('/pendaftaran')->withInput()->with('validation', $validation);
        }
    }
}
