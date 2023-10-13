<?php

namespace App\Controllers;

// Mengimpor kelas BaseController yang digunakan sebagai dasar untuk kontroler ini.
class Login extends BaseController
{
    public function index()
    {
        // Menyiapkan data yang akan dikirim ke tampilan.
        $data = [
            'title' => 'Halaman Login'
        ];

        // Memanggil tampilan 'login/index' dan meneruskan data ke tampilan.
        return view('login/index', $data);
    }
}
