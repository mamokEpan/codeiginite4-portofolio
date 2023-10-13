<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    // Mendefinisikan tabel yang akan digunakan oleh model.
    protected $table = 'profile';

    // Mendefinisikan kolom-kolom yang diperbolehkan untuk diisi.
    protected $allowedFields = ['nama', 'alamat', 'email', 'telp', 'gambar'];

    // Metode untuk mengambil semua data profil dari tabel 'profile'.
    public function getAllProfile()
    {
        return $this->db->table('profile')->get()->getResultArray();
    }

    // Metode untuk mengambil data profil berdasarkan ID.
    public function getProfileById($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
