<?php

namespace App\Http\Livewire\PM;

use App\Http\Controllers\WhatappsGateway;
use App\Models\Aplikasi;
use App\Models\Data_OPD;
use Illuminate\Support\Facades\Http;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Aplikasipm extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $search = '';
    public $nama_aplikasi;
    public $deskripsi;
    public $id_opd;
    public $type_projek;
    public $cp;
    public $tgl_mulai;
    public $tgl_selesai;

    public $notif = 0;
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
        return view('livewire.p-m.aplikasipm', [
            'opd' => Data_OPD::pluck('nama_opd', 'id'),
            'aplikasis' => Aplikasi::orderByRaw("CASE WHEN prioritas='Urgent' THEN 1 WHEN prioritas='High' THEN 2 WHEN prioritas='Medium' THEN 3 WHEN prioritas='Low' THEN 4 ELSE 5 END")->search('nama_aplikasi', $this->search)->paginate(10),
        ])->extends('layouts.main', [
            'tittle' => 'Aplikasi',

        ])
            ->section('isi');
    }
    public function updatedSelectedValue($value)
    {
        // Lakukan pembaruan komponen Livewire sesuai kebutuhan
    }
    protected $rules = [
        'nama_aplikasi' => 'required',
        'id_opd' => 'required',
        'deskripsi' => 'required',
        'type_projek' => 'required',
        'tgl_mulai' => 'required',
        'tgl_selesai' => 'required',
        'cp' => 'required|numeric|min_digits:11',
    ];

    protected $messages = [
        'nama_aplikasi.required' => 'Kolom Judul Aplikasi wajib diisi.',
        'id_opd.required' => 'Kolom Klien(OPD) wajib diisi.',
        'deskripsi.required' => 'Kolom Deskripsi wajib diisi.',
        'type_projek.required' => 'Kolom Jenis Projek wajib diisi.',
        'cp.required' => 'Kolom Contact Person wajib diisi.',
        'tgl_mulai.required' => 'Kolom Tanggal Mulai wajib diisi.',
        'tgl_selesai.required' => 'Kolom Tanggal Selesai wajib diisi.',
        'cp.numeric' => 'Kolom Contact Person harus berupa angka.',
        'cp.min_digits' => 'Kolom Contact Person harus memiliki panjang minimal 12 digit.',
        // 'cp.min' => 'Kolom Contact Person harus terdiri dari 12 digit.',
    ];

    public function updated($field)
    {
        $this->validateOnly($field, [
            'nama_aplikasi' => 'required',
            'id_opd' => 'required',
            'deskripsi' => 'required',
            'type_projek' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'cp' => 'required|numeric|min_digits:11',

        ]);
    }

    public function simpan()
    {
        $this->validate();


        Aplikasi::create([
            'nama_aplikasi' => $this->nama_aplikasi,
            'id_opd' => $this->id_opd,
            'deskripsi' => $this->deskripsi,
            'type_projek' => $this->type_projek,
            'cp' => $this->cp,
            'status_aplikasi' => 'Inisiasi',
            'tgl_mulai' => $this->tgl_mulai,
            'tgl_selesai' => $this->tgl_selesai,
        ]);

        // Http::post('http://localhost:8001/send-message', [
        //     'number' => $this->cp,
        //     'message' => 'Aplikasi ' . $this->nama_aplikasi . ' sedang dalam proses Inisiasi',
        // ]);
        if ($this->notif == 1) {
            $controller = new WhatappsGateway();
            $controller->kirim($this->cp, 'Aplikasi ' . $this->nama_aplikasi . ' sedang dalam proses Inisiasi');
        }


        $this->alert('success', 'Data Berhasil Disimpan');
        $this->dispatchBrowserEvent('tambah');
        $this->reset();
    }
}
