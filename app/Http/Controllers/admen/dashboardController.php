<?php

namespace App\Http\Controllers\admen;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        // URL API
        $url = 'https://superappuat.bengkaliskab.go.id/api/home';

        // Mengambil data dari API menggunakan fungsi GetApi (asumsi fungsi ini sudah didefinisikan)
        $responseData = GetApi($url);

        // Cek apakah data ada dan 'list_layanan' ditemukan dalam response
        if ($responseData && isset($responseData['data']['list_layanan'])) {
            $layanan = [];

            // Konversi array asosiatif 'list_layanan' menjadi object agar lebih mudah diakses di view
            foreach ($responseData['data']['list_layanan'] as $item) {
                $layanan[] = (object) $item;
            }

            // Mengirim data 'layanan' ke view
            return view('theme.default.pages.dashboard.layanan.index', compact('layanan'));
        } else {
            // Jika data tidak ditemukan, menampilkan halaman error 404
            return abort(404, 'Data tidak ditemukan');
        }
    }

    public function layanan()
    {
    }
}
