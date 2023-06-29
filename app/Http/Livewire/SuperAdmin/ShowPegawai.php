<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\Aplikasi;
use App\Models\Pegawai;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPegawai extends Component
{
    use WithPagination;
    public $pegawai;
    // public $app;
    // public $nowapp;

    public function mount($slug)
    {
        $this->pegawai = User::where('slug', $slug)->first();


    }

    public function render()
    {
        $user_id = $this->pegawai->id;
        $app = Aplikasi::whereHas('R_Tim', function ($query) use ($user_id) {
            $query->where('id_user', $user_id);
        })->paginate(10 ,['*'], 'aplikasi');
        // dd($user_id);
        $nowapp = Aplikasi::with('R_Tim')->whereHas('R_Tim', function ($query)use ($user_id)  {
            $query->where('id_user', $user_id);
        })->where('status_aplikasi', 'Progres')->paginate(10);
        return view('livewire.super-admin.show-pegawai',[
            'app'=>$app,
            'nowapp'=>$nowapp,

        ])
            ->extends('layouts.main', [
                'tittle' => 'Pegawai',
            ])
            ->section('isi');
    }
}
