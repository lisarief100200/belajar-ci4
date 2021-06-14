<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBaner extends Model
{
	public function getAllData()
	{
		return $this->db->table('tbl_baner')
			->orderBy('id_baner', 'ASC')
			->get()
			->getResultArray(); // Menampilkan banyak baris
	}

	public function detailBaner($id_baner)
	{
		return $this->db->table('tbl_baner')
			->where('id_baner', $id_baner)
			->get()
			->getRowArray(); // Satu baris aja
	}

	public function insertData($data)
	{
		$this->db->table('tbl_baner')->insert($data);
	}

	public function editData($data)
	{
		$this->db->table('tbl_baner')
		->where('id_baner', $data['id_baner'])
		->update($data);
	}

	public function deleteData($data)
	{
		$this->db->table('tbl_baner')
		->where('id_baner', $data['id_baner'])
		->delete($data);
	}
}
