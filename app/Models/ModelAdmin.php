<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function detailSetting()
    {
        return $this->db->table('tbl_setting')
            ->where('id', 1)
            ->get()->getRowArray();
    }

    public function saveSetting($data)
    {
        return $this->db->table('tbl_setting')
            ->where('id', 1)
            ->update($data);
    }

    public function detailTa()
    {
        return $this->db->table('tbl_ta')
            ->where('id_ta', 1)
            ->get()->getRowArray();
    }

    public function saveTa($data)
    {
        return $this->db->table('tbl_ta')
            ->where('id_ta', 1)
            ->update($data);
    }

    public function resetStatus()
	{
		$this->db->table('tbl_ta')
		->update(['status' => 0]);
	}

    public function statusTa()
    {
        return $this->db->table('tbl_ta')
        ->where('id_ta', 1)
        ->get()->getRowArray();
    }
}
