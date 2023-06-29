<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\Aplikasi;
use App\Models\Data_OPD;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ShowOPD extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $dataOPD;
    public $ids;
    public $search = '';
    public $nama_opd, $email, $alamat, $no_telp;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetPage()
    {
        $this->gotoPage(1);
    }

    public function mount($slug)
    {
        $this->dataOPD = Data_OPD::where('slug', $slug)->first();
        $this->ids = $this->dataOPD->id;
        $this->nama_opd = $this->dataOPD->nama_opd;
        $this->email = $this->dataOPD->email;
        $this->alamat = $this->dataOPD->alamat;
        $this->no_telp = $this->dataOPD->no_telp;
    }


    public function render()
    {
        return view('livewire.super-admin.show-o-p-d', [
            'aplikasis' => Aplikasi::search('nama_aplikasi', $this->search)->where('id_opd', $this->ids)->paginate(10),
        ])
            ->extends('layouts.main', [
                'tittle' => 'OPD',
            ])
            ->section('isi');
    }

    protected $rules = [
        'nama_opd' => 'required',
        'email' => 'required|email:rfc,dns',
        'alamat' => 'required',
        'no_telp' => 'required',

    ];
    protected $messages = [
        'nama_opd.required' => 'Kolom Nama OPD wajib diisi.',
        'email.required' => 'Kolom Email wajib diisi.',
        'email.email' => 'Kolom Email harus berupa alamat email yang valid.',
        'alamat.required' => 'Kolom Alamat wajib diisi.',
        'no_telp.required' => 'Kolom Nomor Telepon wajib diisi.',
    ];

    public function updated($field)
    {
        $this->validateOnly($field, [
            'nama_opd' => 'required',
            'email' => 'required|email:rfc,dns',
            // 'role' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',

        ]);
    }

    public function updateOPD()
    {
        $this->validate();

        $this->dataOPD->update([
            'nama_opd' => $this->nama_opd,
            'email' => $this->email,
            'alamat' => $this->alamat,
            'no_telp' => $this->no_telp,
        ]);

        $this->dispatchBrowserEvent('closeModal');
        $this->alert('success', 'Data Berhasil Diupdate');
    }
}
