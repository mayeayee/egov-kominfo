<?php

namespace App\Http\Livewire\Publik;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    use LivewireAlert;

    public $nama_pegawai, $email, $jabatan, $status, $avatar, $cek, $update_avatar;

    public $ids;

    public function render()
    {
        return view('livewire.publik.profile')->extends('layouts.main', [
            'tittle' => 'Profile',
        ])
            ->section('isi');
    }


    public function mount()
    {
        $this->ids = Auth::user()->id;
    }

    protected $rules = [
        'nama_pegawai' => 'required|min:6|regex:/^[a-zA-Z., ]*$/',
        'email' => 'required|email:email',
        'avatar' => 'file|mimes:jpeg,png,jpg|max:12048'
    ];
    protected $messages = [
        'nama_pegawai.required' => 'Kolom nama pegawai harus diisi.',
        'nama_pegawai.min' => 'Kolom nama pegawai harus memiliki minimal :min karakter.',
        'nama_pegawai.regex' => 'Kolom nama pegawai hanya boleh berisi huruf, titik, koma, atau spasi.',
        'email.required' => 'Kolom email harus diisi.',
        'email.email' => 'Format email tidak valid.',
        'avatar.file' => 'Avatar harus berupa file.',
        'avatar.mimes' => 'Format avatar yang diizinkan adalah: jpeg, png, jpg.',
        'avatar.max' => 'Ukuran avatar maksimum adalah :max kilobita.',
        'pass.required' => 'Kolom password harus diisi.',
        'pass.min' => 'Kolom password harus memiliki minimal :min karakter.',
        'password_confirmation.required' => 'Kolom konfirmasi password harus diisi.',
        'password_confirmation.same' => 'Konfirmasi password tidak sesuai dengan password.',
    ];

    public function updated($field)
    {
        $this->validateOnly($field, [
            'nama_pegawai' => 'required|min:6|regex:/^[a-zA-Z., ]*$/',
            'email' => 'required|email',
            // 'jabatan' => 'required',
            'avatar' => 'file|mimes:jpeg,png,jpg|max:12048'
        ]);
    }

    public function edit($id)
    {
        $pegawai = User::where('id', $id)->first();
        $this->ids = $pegawai->id;
        $this->nama_pegawai = $pegawai->name;
        $this->email = $pegawai->email;
        // $this->jabatan = $pegawai->role;
        $this->status = $pegawai->status;
        $this->avatar = $pegawai->avatar;
        $this->cek = 1;
    }


    public function update()
    {
        $this->validate([
            'nama_pegawai' => 'required|min:6|regex:/^[a-zA-Z., ]*$/',
            'email' => 'required|email',
            // 'jabatan' => 'required',
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
            
            // Path to the livewire-tmp folder
            $livewireTmpPath = 'livewire-tmp'; // Assuming this is the correct relative path

            // Get all files in the livewire-tmp folder
            $files = Storage::files($livewireTmpPath);

            // Delete each file
            foreach ($files as $file) {
                Storage::delete($file);
            }
        }


        if ($this->ids) {
            $pegawai = User::find($this->ids);
            $pegawai->update([
                'name' => $this->nama_pegawai,
                'email' => $this->email,
                // 'role' => $this->jabatan,
                // 'status' => $this->status,

            ]);
            if ($this->update_avatar) {
                $pegawai->update([
                    'avatar' => $nama_avatarUP
                ]);
            }


            $this->dispatchBrowserEvent('edit');
            $this->alert('success', 'Profile Berhasil Diupdate');
            $this->resetInput();
        }
    }

    public function resetInput()
    {
        $this->nama_pegawai = null;
        $this->email = null;
        $this->jabatan = '';
        $this->avatar = null;
        $this->update_avatar = null;
        $this->cek = 0;
    }

    public $pass;
    public $password_confirmation;

    public function reset_pass()
    {

        $this->validate([
            'pass' => 'required|min:8',
            'password_confirmation' => 'required|same:pass',
        ]);


        $user = User::find($this->ids);

        $user->update([
            'password' => Hash::make($this->pass),
        ]);


        $this->dispatchBrowserEvent('resset');
        $this->alert('success', 'Password Berhasil Diupdate');
        $this->reset(['pass', 'password_confirmation']);
    }
}
