<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\DestinasiModel;
use App\Models\PengirimanModel;

class TambahPengiriman extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();
        $destinasiModel = new DestinasiModel();
        $pengirimanModel = new PengirimanModel();

        $data = [
            'customers' => $customerModel->findAll(),
            'destinasis' => $destinasiModel->findAll(),
            'pengirimanData' => $pengirimanModel->getData(),
        ];

        return view('tambahData', $data);
    }

    public function save()
    {
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'customer_id' => $this->request->getPost('customer_id'),
            'destinasi_id' => $this->request->getPost('destinasi_id'),
            'biaya_pengiriman' => $this->request->getPost('biaya_pengiriman'),
            'tanggal_sampai' => $this->request->getPost('tanggal_sampai'),
        ];

        $pengirimanModel = new PengirimanModel();
        $pengirimanModel->insert($data);

        return redirect()->to('/');
    }
}
