<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengiriman Form</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <a href="<?= site_url('/') ?>" class="btn btn-info text-white m-3">kembali</a>

    <div class="container">
        <h2 style="font-weight: bolder;">Pengiriman Form 🚚</h2>
        <form action="<?= base_url('tambah-data'); ?>" method="post" class="card p-2">

            <div class="form-group">
                <label for="customer_id" class="form-label">Customer:</label>
                <select name="customer_id" id="customer_id" class="form-select">
                    <?php foreach ($customers as $customer): ?>
                        <option value="<?= $customer['customer_id']; ?>">
                            <?= $customer['customer_name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="destinasi_id" class="form-label">Destinasi Wisata:</label>
                <select name="destinasi_id" id="destinasi_id" class="form-select">
                    <?php foreach ($destinasis as $destinasi): ?>
                        <option value="<?= $destinasi['destinasi_id']; ?>">
                            <?= $destinasi['destinasi_name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal" class="form-label">Biaya Pengiriman:</label>
                <input type="number" name="biaya_pengiriman" id="biaya_pengiriman" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal" class="form-label">Tanggal sampai:</label>
                <input type="date" name="tanggal_sampai" id="tanggal_sampai" class="form-control" required>
            </div>


            <button type="submit" class="btn btn-primary m-1 mt-3">Submit</button>
        </form>
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>