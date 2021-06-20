<div class="container mx-auto">
    @if ($tanyaBatal)    
    <div class="confirm-borrow absolute w-full flex justify-center">
		<div class="w-full md:w-1/2 bg-red-400 px-2 py-5 rounded z-10">
			<div class="font-semibold text-white text-center w-full">Anda ingin membatalkan buku "{{ $judul[0]->judul }}" ?</div>
			<div class="flex justify-center gap-5 mt-3">
				<button wire:click="batal({{ $batal }})" class="bg-green-500 hover:bg-green-700 text-white px-2 py-1 w-24 rounded">Ya</button>
				<button wire:click="$set('tanyaBatal', 0)" class="bg-red-700 hover:bg-red-600 text-white px-2 py-1 w-24 rounded">Tidak</button>
			</div>
		</div>
	</div>
    @endif
    <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative mb-5">
        <table class="border-collapse w-full">
            <thead>
                <tr>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Judul</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Tanggal Peminjaman</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Tangal Pengembalian</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Status</th>
                    <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Aksi</th>
                </tr>
            </thead>
            <tbody class="flex-1 sm:flex-none">
                @foreach ($collection as $item)
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Aksi</span>
                        {{ $item->judul }}
                    </td>
                    @if ($item->status == 4)
                    <td class="bg-red-700 w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    </td>                        
                    @else
                    <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Aksi</span>
                        {{ $item->tanggal_peminjaman }}
                    </td>
                    @endif

                    @if ($item->status == 4)
                    <td class="bg-red-700 w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                    </td>                        
                    @else
                    <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Aksi</span>
                        {{ $item->tanggal_pengembalian }}
                    </td>
                    @endif

                    <td class="w-full lg:w-auto p-3 text-gray-800 border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Aksi</span>
                        {{ $item->status }}
                    </td>

                    @if ($item->status == 0)
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Aksi</span>
                        <button wire:click="hapus({{ $item->id_buku }}, {{ $item->id }})"><i class="bi bi-x-lg"></i></button>
                    </td>
                    @elseif ($item->status == 1)
                    <td class="bg-blue-500 w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <button wire:click="detail({{ $item->id }})" class="w-5 h-5 rounded-full bg-white"><i class="bi bi-arrow-right"></i></button>
                    </td>
                    @elseif ($item->status == 2)
                    <td class="bg-gray-500 w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <button wire:click="detail({{ $item->id }})" class="w-5 h-5 rounded-full bg-white"><i class="bi bi-arrow-right"></i></button>
                    </td>
                    @elseif ($item->status == 3)
                    <td class="bg-green-500 w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <button wire:click="detail({{ $item->id }})" class="w-5 h-5 rounded-full bg-white"><i class="bi bi-arrow-right"></i></button>
                    </td>
                    @elseif ($item->status == 4)
                    <td class="bg-red-700 w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <button wire:click="detail({{ $item->id }})" class="w-5 h-5 rounded-full bg-white"><i class="bi bi-arrow-right"></i></button>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
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