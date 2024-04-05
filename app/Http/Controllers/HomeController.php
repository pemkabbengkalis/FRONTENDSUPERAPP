<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
            $url = 'https://superappuat.bengkaliskab.go.id/api/home';
            $params = ['key' => 'value']; // Optional parameters
            $responseData = GetApi($url, $params);
            if ($responseData !== null) {
            } else {
            }
            $data = $responseData['data'];
            $layanan = [];
            $slider  = [];
            foreach ($data['list_layanan'] as $item) {
                $layanan[] = (object) $item;
            }
            foreach ($data['slider'] as $item) {
                $slider[] = (object) $item;
            }
        return view('pages.home2',compact('layanan','slider'));
        
    }
}
