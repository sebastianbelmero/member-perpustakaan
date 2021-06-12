<div class="container mx-auto">
	@if ($bukuId)
	<div class="confirm-borrow absolute w-full flex justify-center">
		<div class="w-full md:w-1/2 bg-blue-400 px-2 py-5 rounded">
			<div class="font-semibold text-white text-center w-full">Anda ingin meminjam buku "{{ $book -> judul }}" ?</div>
			<div class="flex justify-center gap-5 mt-3">
				<button wire:click="pinjam" class="bg-white hover:bg-gray-200 px-2 py-1 w-24 rounded">Ya</button>
				<button wire:click="$set('bukuId', 0)" class="bg-red-400 hover:bg-red-600 text-white px-2 py-1 w-24 rounded">Tidak</button>
			</div>
		</div>
	</div>
	@endif
	<div class="w-full p-3">
		<figure class="flex bg-gray-100 rounded-xl p-8 md:p-0">
			<img class="w-1/3 mx-auto" src="{{ asset('img-book.png') }}" alt="" style="height: 20em; width: auto">
			<div class="w-2/3 pt-6 md:p-8">
				<blockquote>
					<p class="text-lg font-semibold">
						{{ $book -> judul }}
					</p>
				</blockquote>
				<figcaption class="font-medium">
					<div class="text-gray-900">
						Penerbit : {{ $book -> penerbit }}
					</div>
					<div class="text-gray-900">
						Pengarang : {{ $book -> pengarang }}
					</div>
					<div class="text-gray-900">
						ISBN : {{ $book -> isbn }}
					</div>
					<div class="text-gray-900">
						Tahun : {{ $book -> tahun }}
					</div>
					<div class="text-gray-900">
						Edisi : {{ $book -> edisi }}
					</div>
					<div class="text-gray-900">
						Website : {{ $book -> website }}
					</div>
					<div class="text-gray-900">
						Email : {{ $book -> email }}
					</div>
					<div class="text-gray-900">
						Jumlah : {{ $book -> jumlah }}
					</div>
					<div class="text-gray-900">
						Kategori : {{ $book -> kategori }}
					</div>
				</figcaption>
				<div class="mt-3">
					@guest
					<button class="bg-blue-300 text-white px-2 py-1 rounded focus:outline-none">Pinjam</button>
					@else
					<button wire:click="$set('bukuId', {{ $book -> id }})" class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 rounded">Pinjam</button>
					@endguest
					<a href="{{ route('koleksi') }}" class="bg-gray-500 hover:bg-gray-700 text-white px-2 py-1 rounded">Koleksi</a>
				</div>
			</div>
		</figure>
	</div>
</div>

<style>
	.confirm-borrow {
		top: 30%;
		animation-name: confirm-borrow;
		animation-duration: .5s;
	}

	@keyframes confirm-borrow {
		0% {
			top: -50%;
		}

		100% {
			top: 30%;
		}
	}
</style>