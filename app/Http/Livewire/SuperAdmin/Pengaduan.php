<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\Pengaduan as ModelsPengaduan;
use Livewire\Component;
use Livewire\WithPagination;

class Pengaduan extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.super-admin.pengaduan', [
            'pengaduan' => ModelsPengaduan::paginate(10),
        ])
            ->extends('layouts.main', [
                'tittle' => 'Pengaduan',
            ])
            ->section('isi');
    }
}
