<div class="container mx-auto p-3 md:px-24">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Detail Peminjaman
    </h2>
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
            <td class="p-1"> : 
                @if ($borrow['status'] == 0)
                Pending
                @elseif ($borrow['status'] == 1)
                Terkonfirmasi
                @elseif ($borrow['status'] == 2)
                Sedang Dipinjam
                @elseif ($borrow['status'] == 3)
                Selesai
                @elseif ($borrow['status'] == 4)
                Batal
                @endif
            </td>
        </tr>
    </table>
    <button wire:click="kembali" class="px-2 py-1 bg-blue-500 hover:bg-blue-600 rounded text-white mt-5"><i class="bi bi-arrow-left"></i> Kembali</button>
</div>
