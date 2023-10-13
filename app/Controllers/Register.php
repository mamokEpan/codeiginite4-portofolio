<?php

namespace App\Controllers;

// Mendefinisikan namespace (ruang nama) dari kontroler.
class Register extends BaseController
{
    // Mendefinisikan metode index yang akan menangani permintaan masuk ke halaman registrasi.
    public function index()
    {
        // Menyiapkan data yang akan dikirim ke tampilan.
        $data = [
            'title' => 'Halaman Register'
        ];

        // Mengembalikan tampilan halaman registrasi (view) beserta data yang telah disiapkan.
        return view('register/index', $data);
    }
}
