<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengiriman</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }
    </style>
</head>

<body>

    <a href="<?= site_url('/') ?>" class="m-4 btn btn-danger">Kembali</a>

    <div class="container">
        <div class="row">
            <?php foreach ($pengiriman_detail as $row): ?>
                <div class="col">
                    <div class="card m-2 p-2">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $row['customer_name'] ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?= $row['destinasi_name'] ?>
                            </h6>
                            <p class="card-text">
                                <strong>Biaya Pengiriman:</strong> Rp.
                                <?= $row['biaya_pengiriman'] ?><br>
                                <strong>Tanggal:</strong>
                                <?= $row['tanggal'] ?><br>
                                <strong>Tanggal Sampai:</strong>
                                <?= $row['tanggal_sampai'] ?><br>
                                <strong>Jumlah Pengiriman:</strong>
                                <?= $row['jumlah_pengiriman'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
<script src="/js/bootstrap.bundle.min.js"></script>

</html>