<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table = 'pengiriman';

    public function getDestinasiStats()
    {
        $builder = $this->db->table('pengiriman');
        $builder->select('destinasi.destinasi_name, COUNT(pengiriman.id) as total_destinasi');
        $builder->join('destinasi', 'destinasi.destinasi_id = pengiriman.destinasi_id');
        $builder->groupBy('pengiriman.destinasi_id');
        $builder->orderBy('total_destinasi', 'DESC');
        return $builder->get()->getResult();
    }
}
