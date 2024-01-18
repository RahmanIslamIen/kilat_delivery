<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Pengiriman Kilat</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .underline-hover:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- nabar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Jasa Pengiriman Kilat ⚡</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link underline-hover" href="<?= site_url('tambah-data') ?>">Input Pengiriman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link underline-hover" href="<?= site_url('download-laporan-excel') ?>">Download
                            laporan
                            <span class="badge text-bg-danger">
                                .xls
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="/js/chart.js"></script>

    <div class="float-start">
        <div class="card m-2 p-2" style="width: 560px; height: 590px;">
            <center>
                <h5>chart berdasarkan destinasi paket 📦</h5>
            </center>
            <canvas id="destinasiChart"></canvas>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('destinasiChart').getContext('2d');
        var data = <?= json_encode($destinasiStats) ?>;
        var labels = data.map(item => item.destinasi_name);
        var values = data.map(item => item.total_destinasi);

        var chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                    ],
                }],
            },
        });
    </script>

    <!-- seluruh daa pengiriman -->
    <div class="float-end">
        <div class="card m-2 p-2">
            <table class="table" style="width: 730px;">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Customer</th>
                        <th>Destinasi Wisata</th>
                        <th>Biaya Pengiriman</th>
                        <th style="width: 100px;">Tanggal Sampai</th>
                        <th>Jumlah Pengiriman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pengiriman_detail as $row): ?>
                        <tr>
                            <td>
                                <?= $row['customer_name'] ?>
                            </td>
                            <td>
                                <?= $row['destinasi_name'] ?>
                            </td>
                            <td>
                                Rp.
                                <?= $row['biaya_pengiriman'] ?>
                            </td>
                            <td>
                                <?= $row['tanggal_sampai'] ?>
                            </td>
                            <td>
                                <center>
                                    <?= $row['jumlah_pengiriman'] ?>
                                </center>
                            </td>
                            <td>
                                <a href="<?= base_url('/detail-data') . '/' . $row['tanggal_sampai'] ?>"
                                    class="btn btn-info text-white">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>