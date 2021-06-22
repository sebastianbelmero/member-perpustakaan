<?php

namespace App\Http\Livewire\Pages;

use App\Models\Vbook;
use Livewire\Component;
use Livewire\WithPagination;

class Koleksi extends Component
{
    use WithPagination;

    public $search;
    public $param = "isbn, judul, penerbit, pengarang";

    protected $queryString = ['search'];

    public function render()
    {
        $books = Vbook::query()
        ->whereRaw("CONCAT($this->param) like '%$this->search%'")
        ->paginate(10);
        return view('livewire.pages.koleksi', compact('books'));
    }
    
}
