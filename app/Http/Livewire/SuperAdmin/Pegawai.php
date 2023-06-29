<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\Pegawai as ModelsPegawai;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Livewire\WithPagination;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;



class Pegawai extends Component
{
    use WithPagination;
    use WithFileUploads;

    use LivewireAlert;
    public $nama_pegawai, $email, $jabatan, $status, $ids, $avatar, $cek, $update_avatar;
    public $search = '';
    public $preSe = '';
    protected $listeners = ['delete'];


    public $sortField = 'created_at';
    public $sortAsc = true;

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortField = $field;
            $this->sortAsc = false;
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {

        return view('livewire.super-admin.pegawai', [
            'pegawai' => User::where('role', '<>', 'Super Admin')->search('name', $this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate(9),
        ])
            ->extends('layouts.main', [
                'tittle' => 'Pegawai',
            ])
            ->section('isi');
    }
    protected $rules = [
        'nama_pegawai' => 'required|min:6|regex:/^[a-zA-Z., ]*$/',
        'email' => 'required|email:email',
        'jabatan' => 'required',
        'avatar' => 'file|mimes:jpeg,png,jpg|max:12048'
    ];

    public function updated($field)
    {
        $this->validateOnly($field, [
            'nama_pegawai' => 'required|min:6|regex:/^[a-zA-Z., ]*$/',
            'email' => 'required|email',
            'jabatan' => 'required',
            'avatar' => 'file|mimes:jpeg,png,jpg|max:12048'
        ]);
    }
    public function resetInput()
    {
        $this->nama_pegawai = null;
        $this->ids = null;
        $this->email = null;
        $this->jabatan = '';
        $this->avatar = null;
        $this->update_avatar = null;
        $this->cek = 0;
    }
    public function save()
    {
        $this->validate();


        $nama_avatar = $this->avatar->store("images", 'public');
        $file_path = storage_path('app/public/' . $nama_avatar);
        chmod($file_path, 0777);
        $manager = new ImageManager();
        $image = $manager->make($file_path)->fit(500, 500);
        $image->save(public_path($nama_avatar));
        if (Storage::exists('public/' . $nama_avatar)) {
            Storage::delete('public/' . $nama_avatar);
        }




        User::create([
            'name' => $this->nama_pegawai,
            'email' => $this->email,
            'role' => $this->jabatan,
            'avatar' => $nama_avatar,

        ]);

        $this->dispatchBrowserEvent('closeModal');
        $this->alert('success', 'Data Berhasil Disimpan');

        $this->resetInput();
    }

    public function edit($id)
    {
        $pegawai = User::where('id', $id)->first();
        $this->ids = $pegawai->id;
        $this->nama_pegawai = $pegawai->name;
        $this->email = $pegawai->email;
        $this->jabatan = $pegawai->role;
        $this->status = $pegawai->status;
        $this->avatar = $pegawai->avatar;
        $this->cek = 1;
    }

    public function update()
    {
        $this->validate([
            'nama_pegawai' => 'required|min:6|regex:/^[a-zA-Z., ]*$/',
            'email' => 'required|email',
            'jabatan' => 'required',
        ]);

        if (File::exists($this->avatar)) {
            File::delete($this->avatar);
        }

        if ($this->update_avatar) {
            # code...
            $nama_avatarUP = $this->update_avatar->store("images", 'public');
            $file_path = storage_path('app/public/' . $nama_avatarUP);

            chmod($file_path, 0777);

            $manager = new ImageManager();
            $image = $manager->make($file_path)->fit(500, 500);
            $image->save(public_path($nama_avatarUP));
            if (Storage::exists('public/' . $nama_avatarUP)) {
                Storage::delete('public/' . $nama_avatarUP);
            }
        }


        if ($this->ids) {
            $pegawai = User::find($this->ids);
            $pegawai->update([
                'name' => $this->nama_pegawai,
                'email' => $this->email,
                'role' => $this->jabatan,
                // 'status' => $this->status,

            ]);
            if ($this->update_avatar) {
                $pegawai->update([
                    'avatar' => $nama_avatarUP
                ]);
            }


            $this->dispatchBrowserEvent('edit');
            $this->alert('success', 'User Berhasil Diupdate');
            $this->resetInput();
        }
    }

    public function konfimasiDEL($id)
    {
        $nama = User::where('id', $id)->get();
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Apakah anda yakin akan menghapus ' . $nama[0]->name . '?',
            'text' => '',
            'id' => $id,
        ]);
    }

    public function delete($id)
    {
        $Pegawai = User::where('id', $id)->first();
        if (Storage::exists('public/' . $Pegawai->avatar)) {
            Storage::delete('public/' . $Pegawai->avatar);
            $this->alert('success', 'gambar Berhasil Diupdate');
        };
        User::where('id', $id)->delete();

        $this->alert('success', 'Pegawai ' . $Pegawai->name . ' Berhasil Dihapus');
    }
}
