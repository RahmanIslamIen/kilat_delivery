<?php

namespace App\Models;

use CodeIgniter\Model;

class PengirimanModel extends Model
{
    protected $table = 'pengiriman';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'tanggal',
        'customer_id',
        'destinasi_id',
        'biaya_pengiriman',
        'tanggal_sampai'
    ];

    // Jika menggunakan auto-increment pada primary key
    protected $useAutoIncrement = true;

    // Format tanggal
    protected $useTimestamps = false;
    protected $dateFormat = 'date';

    // Callback untuk mengonversi tanggal sebelum disimpan
    protected $beforeInsert = ['convertDate'];

    protected function convertDate(array $data)
    {
        if (isset($data['data']['tanggal'])) {
            $data['data']['tanggal'] = date('Y-m-d', strtotime($data['data']['tanggal']));
        }

        if (isset($data['data']['tanggal_sampai'])) {
            $data['data']['tanggal_sampai'] = date('Y-m-d', strtotime($data['data']['tanggal_sampai']));
        }

        return $data;
    }

    public function getData()
    {
        return $this->findAll();
    }
}
