<?php

namespace App\Http\Livewire\Publik;

use App\Models\Aplikasi;
use App\Models\Pengaduan;
use Livewire\Component;
use Livewire\WithPagination;

class AppPublik extends Component
{
    use WithPagination;
    public function gotoPage($page)
    {
        $this->page = $page;
    }
    public function render()
    {
        $app = Aplikasi::orderBy('nama_aplikasi', 'asc')->paginate(9, ['*'], 'aplikasi');
        $peng = Pengaduan::where('status', '<>', 'Selesai')->paginate(10, ['*'], 'pengaduan');
        return view('livewire.publik.app-publik', [
            'app' => $app,
            'antri' => Aplikasi::whereNotNull('no_urut')->orderBy('no_urut')->get(),
            'peng' => $peng,
        ])->extends('welcome')
            ->section('app');
    }
}
