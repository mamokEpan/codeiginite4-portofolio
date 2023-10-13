<?php

namespace App\Controllers;

// Mengimpor kelas BaseController yang digunakan sebagai dasar untuk kontroler ini.
class Portofolio extends BaseController
{
    public function index()
    {
        // Menyiapkan data yang akan dikirim ke tampilan.
        $data = [
            'title' => 'Portofolio'
        ];

        // Memanggil tampilan 'portofolio/index' dan meneruskan data ke tampilan.
        return view('portofolio/index', $data);
    }
}
