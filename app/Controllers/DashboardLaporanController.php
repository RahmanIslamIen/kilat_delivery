<?php
namespace App\Controllers;

use App\Models\PengirimanModel;
use App\Models\CustomerModel;
use App\Models\DestinasiModel;
use App\Models\DashboardModel;

use App\Controllers\LaporanController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DashboardLaporanController extends BaseController
{
    public function index(): string
    {
        // Mengambil data dari model dengan JOIN
        $pengirimanModel = new PengirimanModel();
        $customerModel = new CustomerModel();
        $destinasiModel = new DestinasiModel();

        $data['destinasi'] = $pengirimanModel
            ->select('pengiriman.destinasi_id, destinasi.destinasi_name, COUNT(*) as jumlah_pengiriman')
            ->join('destinasi', 'destinasi.destinasi_id = pengiriman.destinasi_id')
            ->groupBy('pengiriman.destinasi_id')
            ->get()
            ->getResultArray();

        $data['pengiriman_detail'] = $pengirimanModel
            ->select('customer.customer_name, destinasi.destinasi_name, pengiriman.biaya_pengiriman, pengiriman.tanggal_sampai, COUNT(*) as jumlah_pengiriman')
            ->join('customer', 'customer.customer_id = pengiriman.customer_id')
            ->join('destinasi', 'destinasi.destinasi_id = pengiriman.destinasi_id')
            ->groupBy('customer.customer_name, destinasi.destinasi_name, pengiriman.biaya_pengiriman, pengiriman.tanggal_sampai')
            ->get()
            ->getResultArray();

        $model = new DashboardModel();
        $data['destinasiStats'] = $model->getDestinasiStats();

        // return view('laporan/index', $data);
        return view('list_pengiriman', $data);
    }

    public function detailData($id)
    {
        $pengirimanModel = new PengirimanModel();

        $data['pengiriman_detail'] = $pengirimanModel
            ->select('customer.customer_name, destinasi.destinasi_name, pengiriman.biaya_pengiriman, pengiriman.tanggal, pengiriman.tanggal_sampai, COUNT(*) as jumlah_pengiriman')
            ->join('customer', 'customer.customer_id = pengiriman.customer_id')
            ->join('destinasi', 'destinasi.destinasi_id = pengiriman.destinasi_id')
            ->where('pengiriman.tanggal', $id)
            ->groupBy('customer.customer_name, destinasi.destinasi_name, pengiriman.biaya_pengiriman, pengiriman.tanggal, pengiriman.tanggal_sampai')
            ->get()
            ->getResultArray();

        return view('detail_data', $data);
    }
}