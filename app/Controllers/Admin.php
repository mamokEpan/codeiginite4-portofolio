<?php

namespace App\Controllers;

// Mengimpor kelas BaseController yang digunakan sebagai dasar untuk kontroler ini.
class Admin extends BaseController
{
    public function index()
    {
        // Menyiapkan data yang akan dikirim ke tampilan.
        $data = [
            'title' => 'Dashboard Admin'
        ];

        // Memanggil tampilan 'admin/index' dan meneruskan data ke tampilan.
        return view('admin/index', $data);
    }

    public function dashboard()
    {
        // Menyiapkan data yang akan dikirim ke tampilan.
        $data = [
            'title' => 'Dashboard blank'
        ];

        // Memanggil tampilan 'admin/dashboard' dan meneruskan data ke tampilan.
        return view('admin/dashboard', $data);
    }
}
