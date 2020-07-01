<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $data = $request->all();
        return 'Selamat datang ' .$data['nama'] .$data['lengkap']. '<br> Terimakasih telah bergabung di Sanberbok . Social Media kita bersama';
    }
}
