<?php

namespace App\Http\Livewire\Pages;

use App\Models\Saran;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Kontak extends Component
{
    public $nama, $email, $pesan;
    public $status;

    public function tambahSaran()
    {
        $validatedData = Validator::make(
            [
                'nama' => $this->nama,
                'email' => $this->email,
                'pesan' => $this->pesan
            ],
            [
                'email' => 'required|email',
                'nama' => 'required',
                'pesan' => 'required'
            ],
            [
                'required' => ':attribute tidak boleh kosong!',
                'email' => 'Format email tidak valid!'
            ],
        )->validate();
        $berhasil = Saran::create($validatedData);
        if ($berhasil) {
            $this->status = [
                "text" => "Saran dan Masukan Anda Berhasil Ditambahkan",
                "bg" => "bg-blue-400"
            ];
        } else {
            $this->status = [
                "text" => "Gagal Menambahkan Saran dan Masukan",
                "bg" => "bg-red-400"
            ];
        }

        $this->nama = '';
        $this->email = '';
        $this->pesan = '';
    }
    public function render()
    {
        return view('livewire.pages.kontak');
    }
}
