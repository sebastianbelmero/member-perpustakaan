<?php

namespace App\Http\Livewire\Pages;

use App\Models\Proposal;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Usulan extends Component
{
    public $judul, $penerbit, $pengarang;
    public $status;

    public function tambahUsulan()
    {
        $validatedData = Validator::make(
            [
                'judul' => $this->judul,
                'penerbit' => $this->penerbit,
                'pengarang' => $this->pengarang
            ],
            [
                'judul' => 'required',
                'penerbit' => '',
                'pengarang' => '',
            ],
            [
                'required' => ':attribute tidak boleh kosong!',
            ],
        )->validate();
        $berhasil = Proposal::create($validatedData);
        if ($berhasil) {
            $this -> status = [
                "text" => "Usulan Anda Berhasil Ditambahkan",
                "bg" => "bg-blue-400"
            ];
        }else{
            $this -> status = [
                "text" => "Gagal Menambahkan Usulan",
                "bg" => "bg-red-400"
            ];
        }

        $this -> judul = '';
        $this -> penerbit = '';
        $this -> pengarang = '';
    }

    public function render()
    {
        return view('livewire.pages.usulan');
    }
}
