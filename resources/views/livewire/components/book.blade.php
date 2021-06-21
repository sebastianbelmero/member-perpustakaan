<div class="w-full lg:w-1/2 p-3">
    <figure class="md:flex bg-gray-100 rounded-xl p-8 md:p-0">
      <img class="w-32 h-32 md:w-48 md:h-auto mx-auto md:mx-0" src="{{ asset('img-book.png') }}" alt="">
      <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
        <blockquote>
          <p class="text-lg font-semibold">
            <a href="{{ route('koleksi.detail', $idBuku) }}">{{ $judul }}</a>
          </p>
        </blockquote>
        <figcaption class="font-medium">
          <div class="text-cyan-600">
            Penerbit : {{ $penerbit }}
          </div>
          <div class="text-gray-500">
            {{ $pengarang }}
          </div>
        </figcaption>
        <div class="mt-3">
          <a href="{{ route('koleksi.detail', $idBuku) }}" class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 rounded">Detail</a>
        </div>
      </div>
    </figure>
</div>