<?php
namespace App\Controllers;

use App\Models\PengirimanModel;
use App\Controllers\LaporanController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class PengirimanController extends BaseController
{
    public function index()
    {
        // ...

        // Load LaporanController
        $laporanController = new LaporanController();
        $laporanController->index();
    }
}