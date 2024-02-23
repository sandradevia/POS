<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Penjualan - POS</title>
</head>
<body>
    <h1>Halaman Transaksi POS</h1>
    <form action="{{ route('process.sale') }}" method="post">
        @csrf
        <label for="product">Pilih Produk:</label>
        <select name="product" id="product">
            <option value="Roti-tawar">Roti Tawar</option>
            <option value="Teh">Teh</option>
            <option value="Beras">Beras</option>
            <option value="sampo">Shampo</option>
            <option value="Sabun-cuci-muka">Sabun Cuci Muka</option>
            <option value="Lulur">Lulur</option>
            <option value="Detergen">Detergen</option>
            <option value="Kemper">Kemper</option>
            <option value="Pembersih-lantai">Pembersih Lantai</option>
            <option value="Pampers">Pampers</option>
            <option value="Bubur-bayi">Bubur Bayi</option>
            <option value="Susu-formula">Susu Formula</option>
        </select>
        <label for="quantity">Jumlah:</label>
        <input type="number" name="quantity" id="quantity" min="1" value="1">
        <button type="submit">Proses Penjualan</button>
    </form>
    <p>Silakan pilih produk dan masukkan jumlahnya untuk memulai transaksi.</p>
</body>
</html>
