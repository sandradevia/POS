<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Berdasarkan Kategori - POS</title>
</head>
<body>
    <h1>Daftar Produk untuk Kategori: {{ $category }}</h1>
    <ul>
        @if ($category == 'food-beverage')
            <li>Roti Tawar</li>
            <li>Teh</li>
            <li>Beras</li>
        @elseif ($category == 'beauty-health')
            <li>sampo</li>
            <li>Sabun Cuci Muka</li>
            <li>Lulur</li>
        @elseif ($category == 'home-care')
            <li>Detergen</li>
            <li>Kemper</li>
            <li>Pembersih Lantai</li>
        @elseif ($category == 'baby-kid')
            <li>Pampers</li>
            <li>Bubur Bayi</li>
            <li>Susu Formula</li>
        @else
            <li>Belum ada produk untuk kategori ini</li>
        @endif
    </ul>
</body>
</html>
