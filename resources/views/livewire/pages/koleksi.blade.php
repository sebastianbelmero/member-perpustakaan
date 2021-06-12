<div class="container mx-auto">
    <div class="flex flex-wrap justify-between">
    
        @foreach ($books as $book)
        @livewire('components.book', [
            'idBuku' => $book->id,
            'judul' => $book->judul,
            'penerbit' => $book->penerbit,
            'pengarang' => $book->pengarang
        ])
        @endforeach
    </div>
    </div>
    