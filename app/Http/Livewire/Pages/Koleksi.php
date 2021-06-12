<?php

namespace App\Http\Livewire\Pages;

use App\Models\Vbook;
use Livewire\Component;

class Koleksi extends Component
{
    public function render()
    {
        $books = Vbook::all();
        return view('livewire.pages.koleksi', compact('books'));
    }
}
