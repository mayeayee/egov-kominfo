<?php

namespace App\Http\Livewire\PM;

use App\Models\Aplikasi;
use App\Models\Pengaduan;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Maintenance extends Component
{
    use WithPagination;
    // use LivewireAlert;

    public $search = '';
    public $resett = 1;
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
        $norut = [];
        $apk = Pengaduan::whereNotnull('no_pengaduan')->pluck('nama_pengaduan', 'no_pengaduan');
        for ($i = 1; $i < 21; $i++) {
            if (isset($apk[$i])) {
                array_push($norut, $apk[$i]);
            } else {

                array_push($norut, null);
            }
            // if (isset($norut[$i])) {
            //     $norut[] = '';
            // }
        }
        $newKeys = range(1, count($norut));

        // Combine the new keys with the original values
        $newArray = array_combine($newKeys, $norut);

        return view('livewire.p-m.maintenance', [
            'norut' => $newArray,
            'run' => Aplikasi::whereIn('status_aplikasi', ['Running', 'Perbaikan', 'Tidak Aktif', 'Semi Aktif'])->search('nama_aplikasi', $this->search)->paginate(10),
        ])->extends('layouts.main', [
            'tittle' => 'Running',

        ])
            ->section('isi');
    }


    public $status = [];
    public $no_urut;
    protected $run;
    public $ids;
    public function mount()
    {
        $items = Aplikasi::whereIn('status_aplikasi', ['Running', 'Perbaikan', 'Tidak Aktif', 'Semi Aktif'])->get();
        foreach ($items as $item) {
            $this->status[$item->id] = $item->status_aplikasi;
        }
    }

    public function updatedStatus($value)
    {

        $this->emit('statusSelected', $value);
        if ($value == 'Running') {
            $this->simpan_running();
            # code...
        }
    }
    public function simpan_running()
    {
        $app = Aplikasi::where('id', $this->ids)->first();
        $app->update([
            'status_aplikasi' => 'Running',
        ]);
        $this->resett = 1;

    }
    public function show($id)
    {
        $app = Aplikasi::where('id', $id)->first();
        $this->ids = $app->id;
    }
    public function rst($id)
    {
        $this->mount();
        $this->resett = 1;
        $this->emit('optionUpdated', [$this->status[$id], $id]);
        $this->dispatchBrowserEvent('tutup_perbaikan');
        $this->dispatchBrowserEvent('tutup_tidak');
        $this->dispatchBrowserEvent('tutup_semi');
    }
    public $deskripsi_bug;
    public $nama_perbaikan;

    public function simpan_perbaikan()
    {
        $this->validate([
            'deskripsi_bug' => 'required',
            'nama_perbaikan' => 'required',
            'no_urut' => 'required'
        ], [
            'deskripsi_bug.required' => 'Kolom Deskripsi BUG harus diisi.',
            'nama_perbaikan.required' => 'Kolom Nama Perbaikan harus diisi.',
            'no_urut.required' => 'Kolom Nomor Antrian Perbaikan harus diisi.',
        ]);
        $app = Aplikasi::where('id', $this->ids)->first();
        $app->update(['status_aplikasi' => 'Perbaikan']);
        $string = $this->nama_perbaikan . ' ' . $app->nama_aplikasi;
        $perb = Pengaduan::create([
            'id_aplikasi' => $app->id,
            'nama_pengaduan' => $string,
            'deskripsi' => $this->deskripsi_bug,
            'tgl_mulai' => Carbon::now(),
            'slug' => strtolower(trim(preg_replace('/[^a-zA-Z0-9]+/', '-', $string), '-'))
        ]);

        $nomorUrutTerbesar = Pengaduan::max('no_pengaduan');

        if (Pengaduan::where('no_pengaduan', $this->no_urut)->exists()) {
            Pengaduan::where('no_pengaduan', '>=', $this->no_urut)->increment('no_pengaduan');
        }
        
        $perb->update([
            'no_pengaduan' => $this->no_urut,
        ]);
        $this->dispatchBrowserEvent('tutup_perbaikan');
        // $this->alert('success', 'Data Berhasil Disimpan');
        $this->resett = 1;
        $this->emit('dataSaved');
        $this->reset(['deskripsi_bug', 'nama_perbaikan']);
        $this->no_urut = '';
        // $this->reset();

    }


    public $alasan;
    public function simpan_tidak()
    {
        $this->validate([

            'alasan' => 'required'
        ], [
            'alasan.required' => 'Kolom Keterangan Wajib diisi'
        ]);
        $app = Aplikasi::where('id', $this->ids)->first();
        $app->update([
            'status_aplikasi' => 'Tidak Aktif',
            'keterangan' => $this->alasan
        ]);
        $this->dispatchBrowserEvent('tutup_tidak');
        // $this->alert('success', 'Data Berhasil Disimpan');
        $this->resett = 1;
        $this->emit('dataSaved');
        $this->alasan=null;
        // $this->reset();

        # code...
    }

    public function simpan_semi()
    {
        $this->validate([

            'alasan' => 'required'
        ], [
            'alasan.required' => 'Kolom Keterangan Wajib diisi'
        ]);
        $app = Aplikasi::where('id', $this->ids)->first();
        $app->update([
            'status_aplikasi' => 'Semi Aktif',
            'keterangan' => $this->alasan
        ]);
        $this->dispatchBrowserEvent('tutup_semi');
        $this->emit('dataSaved');
        // $this->alert('success', 'Data Berhasil Disimpan');
        $this->resett = 1;
        $this->alasan=null;

        // $this->reset();
        # code...
    }
}
