<div class="container mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Detail Peminjaman
    </h2>
    <button wire:click="kembali" class="px-2 py-1 bg-blue-500 hover:bg-blue-600 rounded text-white"><i class="bi bi-arrow-left"></i> Kembali</button>
    <table class="text-left">
        <tr>
            <th>Nama Peminjam</th>
            <td class="p-1"> : {{ $borrow['nama'] }}</td>
        </tr>
        <tr>
            <th>Judul Buku</th>
            <td class="p-1"> : {{ $borrow['judul'] }}</td>
        </tr>
        <tr>
            <th>Tanggal Peminjaman</th>
            <td class="p-1"> : {{ $borrow['pinjam'] }}</td>
        </tr>
        <tr>
            <th>Tanggal Pengembalian</th>
            <td class="p-1"> : {{ $borrow['kembali'] }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td class="p-1"> : {{ $borrow['keterangan'] }}</td>
        </tr>
        <tr>
            <th>Denda</th>
            <td class="p-1"> : {{ $borrow['denda'] }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td class="p-1"> : {{ $borrow['status'] }}</td>
        </tr>
    </table>
</div>
