<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Adiska Bayu Deri Saputra',
            'kelas' => 'C',
            'npm' => '2257051034'
        ];

        return view('profile', $data);
        }
}
