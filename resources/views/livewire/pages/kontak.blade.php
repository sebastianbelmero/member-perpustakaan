<div class="container mx-auto relative overflow-hidden">
    @if ($status)
        <div class="confirm-borrow absolute w-full flex justify-end z-10">
            <div class="bg-blue-400 px-2 py-5 rounded w-48">
                <div class="font-semibold text-white text-center w-full">Berhasil</div>
            </div>
        </div>
    @endif
    <form wire:submit.prevent="tambahSaran">
        <div class="flex flex-col items-center px-5 gap-5">
            <div class="w-full md:w-1/2">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input required wire:model.defer="nama" type="text" id="nama" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Input Nama">
                </div>
            </div>

            <div class="w-full md:w-1/2">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input required wire:model.defer="email" type="text" id="email" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Input Email">
                </div>
            </div>

            <div class="w-full md:w-1/2">
                <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <textarea required wire:model.defer="pesan" type="text" id="pesan" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Input Pesan">
                    </textarea>
                    </div>
            </div>
            <button type="submit" class="px-2 py-1 rounded text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">Kirim</button>
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