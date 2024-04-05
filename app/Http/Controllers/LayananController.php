<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function getDetailLayanan($id_layanan)
    {
        $response = Http::get('https://superappuat.bengkaliskab.go.id/api/layanan', ['id_layanan' => $id_layanan]);

        // Check if the request was successful
        if ($response->successful()) {
            // Extract JSON data
            $data = $response->json()['data'];
            //    dd($data);
            return view('pages.detail_layanan', compact('data'));
        } else {
            // Handle the case when the request fails
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }

    }

    public function pengajuanLayanan(Request $request, $id_layanan)
    {
        if (session()->has('user_id')) {

            $response = Http::withToken('Bearer ' . session('api_token'))->post('https://superappuat.bengkaliskab.go.id/api/layanan/pengajuan', ['id_layanan' => $id_layanan]);
            // Check if the request was successful
            if ($response->successful()) {
                // Extract JSON data
                $data = $response->json()['data'];
                if ($request->kirim) {
                    $response_submit = Http::withToken('Bearer ' . session('api_token'))->post($data['endpoint']['url'], array_merge($request->all(), ['id_layanan' => $id_layanan, 'id_user' => session('user_id')]));
                    return $response_submit->body();
                }

                //    dd($data);
                return view('pages.formlayanan', compact('data'));
            } else {
                // Handle the case when the request fails
                return response()->json(['error' => 'Failed to fetch data'], $response->status());
            }

        }else{
            return to_route('login');
        }
    }
}
