<?php

namespace App\Controllers;

// Mendefinisikan namespace (ruang nama) dari kontroler.
class Slider extends BaseController
{
    // Mendefinisikan metode index yang akan menangani permintaan masuk ke halaman slider.
    public function index()
    {
        // Menyiapkan data yang akan dikirim ke tampilan.
        $data = [
            'title' => 'Slider'
        ];

        // Mengembalikan tampilan halaman slider beserta data yang telah disiapkan.
        return view('slider/index', $data);
    }
}
