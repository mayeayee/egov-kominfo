<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\Aplikasi as ModelsAplikasi;
use Livewire\Component;
use Livewire\WithPagination;

class Aplikasi extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetPage()
    {
        $this->gotoPage(1);
    }
    public function render()
    {
        return view('livewire.super-admin.aplikasi', [
            'aplikasis' => ModelsAplikasi::orderByRaw("CASE WHEN prioritas='Urgent' THEN 1 WHEN prioritas='High' THEN 2 WHEN prioritas='Medium' THEN 3 WHEN prioritas='Low' THEN 4 ELSE 5 END")->search('nama_aplikasi', $this->search)->paginate(10),
        ])
            ->extends('layouts.main', [
                'tittle' => 'Aplikasi',

            ])
            ->section('isi');
    }
}
