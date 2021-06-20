<div class="container mx-auto py-5">
    <h1 class="text-4xl">Profile {{ Auth::user()->name }}</h1>
    <div class="w-1/2 p-1">
        <label for="nama">Nama : </label>
        <input disabled value="{{ Auth::user()->name }}" class="w-full px-2 py-1 rounded" type="text" placeholder="Nama" id="nama">
    </div>
    <div class="w-1/2 p-1">
        <label for="email">Email : </label>
        <input wire:model.defer="email" class="w-full px-2 py-1 rounded" type="text" placeholder="Email" id="email">
    </div>
    <div class="w-1/2 p-1">
        <label for="nimorInduk">Nomor Induk : </label>
        <input disabled value="{{ $user[0]->nomor_induk }}" class="w-full px-2 py-1 rounded" type="text" placeholder="Nomor Induk" id="nimorInduk">
    </div>
    <div class="w-1/2 p-1">
        <label for="passwordLama">Ganti Password : </label>
        <input wire:model.defer="lama" class="w-full px-2 py-1 rounded" type="password" placeholder="Password Lama" id="passwordLama">
    </div>
    <div class="w-1/2 p-1">
        <input wire:model.defer="baru" class="w-full px-2 py-1 rounded" type="password" placeholder="Password Baru">
    </div>
    <div class="w-1/2 p-1">
        <input wire:model.defer="konfirmasi" class="w-full px-2 py-1 rounded" type="password" placeholder="Konfirmasi Password Baru">
    </div>
    @if ($err)
    <div class="w-1/2 p-1 text-red-700">
        {{ $err }}
    </div>
    @endif
    <div class="w-1/2 p-1">
        <button wire:click="simpan" class="px-2 py-1 rounded text-white bg-blue-500 hover:bg-blue-600">Simpan</button>
    </div>
</div>
