<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\Data_OPD;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class ODP extends Component
{
    use WithPagination;
    use LivewireAlert;


    public $select = 3;
    public $desa = '';
    public $search = '';
    public $nama_opd, $email, $alamat, $no_telp;
    public $ids;
    protected $listeners = ['delete'];
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

        if ($this->select == 1) {
            $data_opd = Data_OPD::search('nama_opd', $this->search)->paginate(9);
        } elseif ($this->select == 2) {
            $data_opd = Data_OPD::whereNotNull('kecamatan')->search('nama_opd', $this->search)->search('kecamatan', $this->desa)->paginate(9);
        } else {
            $data_opd = Data_OPD::whereNull('kecamatan')->search('nama_opd', $this->search)->paginate(9);
        }

        return view('livewire.super-admin.o-d-p', [
            'OPD' => $data_opd,
            'desaa' => Data_OPD::whereNotNull('kecamatan')->pluck('kecamatan'),

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

    public function saveOPD()
    {
        $this->validate();

        Data_OPD::create([
            'nama_opd' => $this->nama_opd,
            'email' => $this->email,
            'alamat' => $this->alamat,
            'no_telp' => $this->no_telp,
        ]);
        $this->reset(['nama_opd', 'email', 'alamat', 'no_telp']);


        $this->dispatchBrowserEvent('tambah');
        $this->alert('success', 'Data Berhasil Disimpan');
    }
    public function edit($id)
    {
        $this->ids = $id;
        $dataOPD = Data_OPD::where('id', $id)->first();
        $this->nama_opd = $dataOPD->nama_opd;
        $this->email = $dataOPD->email;
        $this->alamat = $dataOPD->alamat;
        $this->no_telp = $dataOPD->no_telp;
    }


    public function updateOPD()
    {
        $this->validate();

        $dataOPD = Data_OPD::where('id', $this->ids)->first();


        $dataOPD->update([
            'nama_opd' => $this->nama_opd,
            'email' => $this->email,
            'alamat' => $this->alamat,
            'no_telp' => $this->no_telp,
        ]);
        $this->reset(['nama_opd', 'email', 'alamat', 'no_telp']);


        $this->dispatchBrowserEvent('closeModal');
        $this->alert('success', 'Data Berhasil Diupdate');
    }
    public function komfir($id)
    {
        $nama = Data_OPD::where('id', $id)->first();
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Apakah anda yakin akan menghapus ' . $nama->nama_opd . '?',
            'text' => '',
            'id' => $id,
        ]);
    }

    public function delete($id)
    {
        $data = Data_OPD::where('id', $id)->first();
        $data->delete();
        $this->alert('success', 'Data Berhasil Dihapus');
    }
}
