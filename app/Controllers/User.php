<?php

namespace App\Controllers;

// Mendefinisikan namespace (ruang nama) dari kontroler.
class User extends BaseController
{
    // Mendefinisikan metode index yang akan menangani permintaan masuk ke halaman akun pengguna (user account).
    public function index()
    {
        // Menyiapkan data yang akan dikirim ke tampilan.
        $data = [
            'title' => 'User Account'
        ];

        // Mengembalikan tampilan halaman akun pengguna (user account) beserta data yang telah disiapkan.
        return view('user/index', $data);
    }
}
