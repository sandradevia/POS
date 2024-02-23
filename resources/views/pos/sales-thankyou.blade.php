<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih atas Pembelian Anda - POS</title>
</head>
<body>
    <h1>Terima Kasih atas Pembelian Anda</h1>
    <p>Detail Pembelian:</p>
    <ul>
        <li>Produk: {{ $saleData['product'] }}</li>
        <li>Jumlah: {{ $saleData['quantity'] }}</li>
        <li>Total Pembelian: {{ $saleData['total_amount'] }}</li>
    </ul>
</body>
</html>
