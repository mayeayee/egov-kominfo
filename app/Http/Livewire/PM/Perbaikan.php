<?php

namespace App\Http\Livewire\PM;

use App\Models\Aplikasi;
use App\Models\Pengaduan;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Perbaikan extends Component
{
    use LivewireAlert;
    public function render()
    {
        return view('livewire.p-m.perbaikan', [
            'perbaikan' => Pengaduan::orderByRaw('CASE WHEN no_pengaduan IS NULL THEN 9999 ELSE no_pengaduan END')->get(),
        ])->extends('layouts.main', [
            'tittle' => 'Perbaikan',

        ])
            ->section('isi');
    }

    public function develop($id)
    {
        $pp = Pengaduan::where('id', $id)->first();
        $pp->update([
            'status' => 'Develop'
        ]);
        $this->alert('success', 'Data Berhasil Disimpan');
        # code...
    }
    public function selesai($id)
    {
        $pp = Pengaduan::where('id', $id)->first();
        $pp->update([
            'status' => 'Selesai',
            'no_pengaduan' => null,
            'tgl_selesai' => Carbon::now()
        ]);
        $app = Aplikasi::where('id', $pp->id_aplikasi)->first();
        $app->update([
            'status_aplikasi' => 'Running'
        ]);
        $this->alert('success', 'Data Berhasil Disimpan');
        # code...
    }
}
