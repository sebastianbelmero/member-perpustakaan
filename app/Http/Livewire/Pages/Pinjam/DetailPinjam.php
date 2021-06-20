<?php

namespace App\Http\Livewire\Pages\Pinjam;

use App\Models\Vborrow;
use Livewire\Component;

class DetailPinjam extends Component
{
    public $idnya;
    public $borrow;

    public function mount($id)
    {
        $this->idnya = $id;
        $borrow = Vborrow::find($id);
        $this->borrow['nama'] = $borrow->name;
        $this->borrow['judul'] = $borrow->judul;
        $this->borrow['pinjam'] = $borrow->tanggal_peminjaman;
        $this->borrow['kembali'] = $borrow->tanggal_pengembalian;
        $this->borrow['keterangan'] = $borrow->keterangan;
        $this->borrow['denda'] = $borrow->denda;
        $this->borrow['status'] = $borrow->status;
    }

    public function render()
    {
        return view('livewire.pages.pinjam.detail-pinjam');
    }

    public function kembali()
    {
        return redirect()->route('peminjaman');
    }
}
