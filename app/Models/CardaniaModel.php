<?php

namespace App\Models;

use CodeIgniter\Model;

class CardaniaModel extends Model
{
    protected $table = 'tb_home'; //identifikasi tabel
    protected $useTimestamps = true;
    protected $allowedFields = ['title_slide', 'sub_title_slide', 'picture_slide', 'slug']; //identifikasi semua tabel yang boleh diisi

    public function getSlideData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
