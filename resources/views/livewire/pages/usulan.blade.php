<div class="container mx-auto relative overflow-hidden">
    @if ($status)
        <div class="confirm-borrow absolute w-full flex justify-end z-10">
            <div class="bg-blue-400 px-2 py-5 rounded w-48">
                <div class="font-semibold text-white text-center w-full">Berhasil</div>
            </div>
        </div>
    @endif
    <form wire:submit.prevent="tambahUsulan">
        <div class="flex flex-col items-center px-5 gap-5">
            <div class="w-full md:w-1/2">
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input wire:model.defer="judul" type="text" id="judul" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Judul">
                @if($errors->has('judul'))
                    <p class="text-red-500 mt-1">{{ $errors->first('judul') }}</p>
                    @endif
                </div>
            </div>

            <div class="w-full md:w-1/2">
                <label for="penerbit" class="block text-sm font-medium text-gray-700">Penerbit</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input wire:model.defer="penerbit" type="text" id="penerbit" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Penerbit">
                    @if($errors->has('penerbit'))
                    <p class="text-red-500 mt-1">{{ $errors->first('penerbit') }}</p>
                    @endif
                </div>
            </div>

            <div class="w-full md:w-1/2">
                <label for="pengarang" class="block text-sm font-medium text-gray-700">Pengarang</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input wire:model.defer="pengarang" type="text" id="pengarang" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Pengarang">
                    @if($errors->has('pengarang'))
                    <p class="text-red-500 mt-1">{{ $errors->first('pengarang') }}</p>
                    @endif
                </div>
            </div>
            <button type="submit" class="px-2 py-1 rounded text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">Kirim Usulan</button>
        </div>
    </form>
</div>
<style>
    .confirm-borrow {
        right: -50%;
        animation-name: confirm-borrow;
        animation-duration: 2s;
    }

    @keyframes confirm-borrow {
        0% {
            right: -50%;
        }

        50% {
            right: 5%;
        }
        60% {
            right: 5%;
        }
        70% {
            right: 5%;
        }

        100% {
            right: -50%;
        }
    }
</style>