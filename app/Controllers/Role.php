<?php

namespace App\Controllers;

// Mendefinisikan namespace (ruang nama) dari kontroler.
class Role extends BaseController
{
    // Mendefinisikan metode index yang akan menangani permintaan masuk ke halaman peran (role).
    public function index()
    {
        // Menyiapkan data yang akan dikirim ke tampilan.
        $data = [
            'title' => 'Role - Hak Akses'
        ];

        // Mengembalikan tampilan halaman peran (role) beserta data yang telah disiapkan.
        return view('role/index', $data);
    }
}
