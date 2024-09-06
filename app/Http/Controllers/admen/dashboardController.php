<?php

namespace App\Http\Controllers\admen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('theme.default.pages.dashboard.home');
    }
}
