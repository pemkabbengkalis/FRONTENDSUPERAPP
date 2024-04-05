<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login');
    }

    public function actionLogin(Request $request)
    {
        $response = Http::post('https://superappuat.bengkaliskab.go.id/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Periksa apakah respons berhasil
        if ($response->successful()) {
            // Ambil data dari respons
            $responseData = $response->json()['data'];

            // Simpan ID pengguna dan token dalam sesi
            session(['user_id' => $responseData['user']['id']]);
            session(['api_token' => $responseData['token']]);

            // Redirect pengguna ke halaman dashboard atau ke mana pun setelah login berhasil
            return redirect('/dashboard');
        } else {
            // Jika respons tidak berhasil, tampilkan pesan kesalahan atau tindakan yang sesuai
            return back()->with('error', 'Login failed. Please check your credentials.');
        }
    }
}
