<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Book extends Component
{
    public $idBuku, $judul, $penerbit, $pengarang;
    
    public function render()
    {
        return view('livewire.components.book');
    }
}
