<?php

namespace App\Http\Livewire\Pages;

use App\Models\Saran;
use Livewire\Component;

class Kontak extends Component
{
    public $nama, $email, $pesan;
    public $status;

    public function tambahSaran()
    {
        $berhasil = Saran::create([
            'nama' => $this->nama,
            'email' => $this->email,
            'pesan' => $this->pesan,

        ]);
        if ($berhasil) {
            $this -> status = [
                "text" => "Saran dan Masukan Anda Berhasil Ditambahkan",
                "bg" => "bg-blue-400"
            ];
        }else{
            $this -> status = [
                "text" => "Gagal Menambahkan Saran dan Masukan",
                "bg" => "bg-red-400"
            ];
        }

        $this -> nama = '';
        $this -> email = '';
        $this -> pesan = '';
    }
    public function render()
    {
        return view('livewire.pages.kontak');
    }
}
