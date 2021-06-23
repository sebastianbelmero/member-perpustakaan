<?php

namespace App\Http\Livewire\Pages\Koleksi;

use App\Models\Borrow;
use App\Models\Vbook;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Detail extends Component
{
    public $idBuku;
    public $bukuId;

    public function mount($id)
    {
        $this -> idBuku = $id;
    }

    public function render()
    {
        $book = Vbook::findOrFail($this->idBuku);
        $pinjam = Borrow::where('id_buku', '=', $this->idBuku)->where('status', '=', 2)->count();
        return view('livewire.pages.koleksi.detail', compact('book', 'pinjam'));
    }

    public function pinjam()
    {
        Borrow::create([
            'id_user' => Auth::user()->id,
            'id_buku' => $this -> idBuku
        ]);
        return redirect()->route('peminjaman');
    }
}
