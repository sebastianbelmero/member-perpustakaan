<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Header extends Component
{
    public $data;

    public function mount()
    {
        $this -> data['title'] = 'SMPN 5 Penyabungan';
        $this -> data['links'] = [
            'link' => [
                'Beranda' => [
                    'route' => 'home'
                ],
                'Koleksi' => [
                    'route' => 'koleksi'
                ],
                'Peminjaman' => [
                    'route' => 'peminjaman'
                ],
                'Pembayaran' => [
                    'route' => 'pembayaran'
                ],
                'Denda' => [
                    'route' => 'denda'
                ],
                'Usulan' => [
                    'route' => 'usulan'
                ],
                'Kontak Kami' => [
                    'route' => 'kontak'
                ]
            ]

        ];
    }

    public function render()
    {
        return view('livewire.components.header');
    }
}
