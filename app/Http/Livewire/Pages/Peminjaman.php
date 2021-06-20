<?php

namespace App\Http\Livewire\Pages;

use App\Models\Borrow;
use App\Models\Vbook;
use App\Models\Vborrow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Peminjaman extends Component
{
    public $tanyaBatal;
    public $judul;
    public $batal;

    protected $listeners = ['refresh' => '$refresh'];

    public function render()
    {
        if ($this -> tanyaBatal) {
            $this -> judul = Vbook::findOrFail($this->tanyaBatal)->get();
        }
        $collection = Vborrow::where('id_user', '=', Auth::user()->id)->get();
        return view('livewire.pages.peminjaman', compact('collection'));
    }

    public function hapus($tanyaBatal, $batal)
    {
        $this->tanyaBatal = $tanyaBatal;
        $this->batal = $batal;
    }

    public function batal($batal)
    {
        $buku = Borrow::find($batal);
        $buku->status = 4;
        $buku->save();
        $this->reset();
        $this->emit('refresh');
    }

    public function detail($id)
    {
        return redirect()->route('detail-pinjam', $id);
    }
}
