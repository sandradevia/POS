<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class POSController extends Controller
{
    public function home()
    {
        return view('pos.home');
    }

    public function products()
    {
        return view('pos.product');
    }

    public function productsByCategory($category)
    {
        return view('pos.product-by-category', ['category' => $category]);
    }

    public function user($id, $name)
    {
        return view('pos.user-profile', ['id' => $id, 'name' => $name]);
    }

    public function sales()
    {
        return view('pos.sales');
    }

    public function processSale(Request $request)
    {
        // Mendapatkan data produk dan jumlah dari formulir penjualan
        $product = $request->input('product');
        $quantity = $request->input('quantity');
        
        // Harga produk
        $productPrice = [
            'Roti-tawar' => 18000,
            'Teh' => 15000,
            'Beras' => 80000,
            'sampo' => 35000,
            'Sabun-cuci-muka' => 34000,
            'Lulur' => 25000,
            'Detergen' => 20000,
            'Kemper' => 25000,
            'Pembersih-lantai' => 20000,
            'Pampers' => 85000,
            'Bubur-bayi' => 25000,
            'Susu-formula' => 350000,
        ];

        // Memastikan produk yang dipilih ada dalam array harga
        if (array_key_exists($product, $productPrice)) {
            // Menghitung total pembelian
            $totalAmount = $quantity * $productPrice[$product];
            
            // Menyimpan data penjualan ke dalam array sementara
            $saleData = [
                'product' => $product,
                'quantity' => $quantity,
                'total_amount' => $totalAmount,
                'timestamp' => now(),
            ];

            // Menyimpan data penjualan ke dalam sesi untuk digunakan di halaman terima kasih
            Session::put('saleData', $saleData);
            
            // Redirect atau tampilkan halaman terima kasih atau struk pembelian
            return view('pos.sales-thankyou', ['saleData' => $saleData]);
        } else {
            // Handle jika produk tidak ditemukan
            return redirect()->route('pos.sales')->with('error', 'Produk tidak ditemukan.');
        }
    }
}


