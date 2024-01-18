<?php

namespace App\Controllers;

use App\Models\PengirimanModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class LaporanController extends BaseController
{
    public function index()
    {
        // Load model
        $pengirimanModel = new PengirimanModel();

        // Get data pengiriman
        $data['pengiriman'] = $pengirimanModel->findAll();

        // Load library untuk export Excel
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set header kolom
        $sheet->setCellValue('A1', 'No. Transaksi');
        $sheet->setCellValue('B1', 'Tanggal Input');
        $sheet->setCellValue('C1', 'Customer Name');
        $sheet->setCellValue('D1', 'Destinasi');
        $sheet->setCellValue('E1', 'Biaya Pengiriman');
        $sheet->setCellValue('F1', 'Tanggal Perkiraan Sampai');

        // Set data pada kolom
        $row = 2;
        foreach ($data['pengiriman'] as $pengiriman) {
            $sheet->setCellValue('A' . $row, $pengiriman['id']);
            $sheet->setCellValue('B' . $row, $pengiriman['tanggal']);
            $sheet->setCellValue('c' . $row, $pengiriman['customer_id']);
            $sheet->setCellValue('d' . $row, $pengiriman['destinasi_id']);
            $sheet->setCellValue('e' . $row, $pengiriman['biaya_pengiriman']);
            $sheet->setCellValue('f' . $row, $pengiriman['tanggal_sampai']);

            $row++;
        }

        // Set nama file dan header
        $filename = 'laporan_pengiriman.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        // Export ke Excel
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
