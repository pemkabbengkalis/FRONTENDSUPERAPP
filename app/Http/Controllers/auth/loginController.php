<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class loginController extends Controller
{
    public function index()
    {
        return view('theme.default.pages.auth.login');
    }

    public function validasi_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $client = new Client();

        try {
            $response = $client->post('https://superappuat.bengkaliskab.go.id/api/login', [
                'form_params' => $data,
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $result = json_decode($response->getBody(), true);
            if (isset($result['status']) && $result['status'] === true) {
                // Jika login berhasil
                $userData = $result['data']['user'];
                $token = $result['data']['token'];
                session([
                    'user' => $userData,
                    'token' => $token,
                ]);
                return redirect()
                    ->route('layanan.dashboard')
                    ->with('success', $result['message']);
            } else {
                if ($result['status'] === false) {
                    $errorMessage = $result['pesan'] ?? 'Login gagal, coba lagi.';
                    return back()->with('error', $errorMessage);
                } else {
                    return back()->with('error', 'Login gagal, coba lagi.');
                }
            }
        } catch (\Exception $e) {
            // Tangani error jaringan atau error lainnya
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
