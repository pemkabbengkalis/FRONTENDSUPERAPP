<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $url = 'https://superappuat.bengkaliskab.go.id/api/home';
        // Asumsikan tidak ada parameter khusus yang diperlukan
        $responseData = GetApi($url);

        if ($responseData && isset($responseData['data'])) {
            $data = $responseData['data'];
            $layanan = [];
            $slider = [];

            // Mengubah array asosiatif ke object agar lebih mudah diakses di view
            foreach ($data['list_layanan'] as $item) {
                $layanan[] = (object) $item;
            }

            foreach ($data['slider'] as $item) {
                $slider[] = (object) $item;
            }

            // Mengirim data ke view dengan nama file view 'pages.home2'
            return view('pages.home2', compact('layanan', 'slider'));
        } else {
            // Mengirim pesan error jika data tidak ditemukan
            return abort(404, 'Data tidak ditemukan');
        }
    }

    public function landing()
    {
        return view('theme.landing');
    }
}
