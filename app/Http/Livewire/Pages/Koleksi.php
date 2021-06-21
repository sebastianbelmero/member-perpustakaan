<?php

namespace App\Http\Livewire\Pages;

use App\Models\Vbook;
use Livewire\Component;
use Livewire\WithPagination;

class Koleksi extends Component
{
    use WithPagination;

    public function render()
    {
        $books = Vbook::paginate(10);
        return view('livewire.pages.koleksi', compact('books'));
    }
}
