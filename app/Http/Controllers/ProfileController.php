<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($name = "", $npm = "", $kelas = "")
    {
        $data = [
            'name' => $name ?: 'Dimas Kurnia Chandra',
            'npm' => $npm ?: '2417052018',
            'kelas' => $kelas ?: 'Sistem Informasi'
        ];
        return view('profile', $data);
    }
}
