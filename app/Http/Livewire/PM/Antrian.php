<?php

namespace App\Http\Livewire\PM;

use App\Models\Aplikasi;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Antrian extends Component
{

    use LivewireAlert;
    public function render()
    {
        // $nomorUrutTerbesar = Aplikasi::max('no_urut');
        // $projekBaru  = 5;
        // if (Aplikasi::where('no_urut', $projekBaru)->exists()) {
        //     Aplikasi::where('no_urut', '>=', $projekBaru)->increment('no_urut');
        // }
        // dd($nomorUrutTerbesar);
        return view('livewire.p-m.antrian')
            ->extends('layouts.main', [
                'tittle' => 'Antrian',

            ])
            ->section('isi');
    }

    public $items;
    public $listss;

    protected $listeners = ['updateSort', 'confirmUpdate'];

    public function mount()
    {
        $this->items = Aplikasi::whereNotNull('no_urut')->orderBy('no_urut')->get();
    }

    public function updateSort($list)
    {
        $this->listss = $list;
        $this->alert('warning', 'Update Antrian', [
            'position' => 'center',
            'timer' => null,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmUpdate',
            'showDenyButton' => true,
            'onDenied' => '',
            'width' => '500',
            'text' => 'Apakah anda yakin akan mengupdate Antiran?',
            'denyButtonText' => 'Batal',
            'confirmButtonText' => 'Simpan',
        ]);

        // if ($confirmation) {
        //     foreach ($list as $item) {
        //         Aplikasi::find($item['value'])->update(['no_urut' => $item['order']]);
        //     }
        // }


    }
    public function confirmUpdate()
    {
        $list = $this->listss;
        foreach ($list as $item) {
            Aplikasi::find($item['value'])->update(['no_urut' => $item['order']]);
        }
        $this->items = Aplikasi::whereNotNull('no_urut')->orderBy('no_urut')->get();
        $this->alert('success', 'Antrian Berhasil Diupdate');
    }
}
