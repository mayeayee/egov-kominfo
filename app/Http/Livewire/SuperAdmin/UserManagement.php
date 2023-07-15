<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UserManagement extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $name, $email, $role, $status, $ids, $password;
    public $search = '';
    protected $listeners = ['delete', 'resetpass'];

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
        return view('livewire.super-admin.user-management', [
            'user' => User::search('name', $this->search)->whereLike('role', $this->search)->whereLike('status', $this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate(10),
        ])
            ->extends('layouts.main', [
                'tittle' => 'User Management',
            ])
            ->section('isi');
    }

    protected $rules = [
        'name' => 'required|min:6|regex:/^[a-zA-Z., ]*$/',
        'email' => 'required|email',
        'role' => 'required',
    ];
    protected $messages = [
        'name.required' => 'Kolom nama wajib diisi.',
        'name.min' => 'Panjang Nama minimal 6 karakter.',
        'name.regex' => 'Format Nama tidak valid. Hanya diperbolehkan huruf dan spasi.',
        'email.required' => 'Kolom Email wajib diisi.',
        'email.email' => 'Format Email tidak valid.',
        'role.required' => 'Harap pilih Role',
    ];

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:6|regex:/^[a-zA-Z., ]*$/',
            'email' => 'required|email:rfc,dns',
            'role' => 'required',
        ]);
    }
    public function save()
    {
        $this->validate();


        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
            'password' => Hash::make('password'),
        ]);

        $this->dispatchBrowserEvent('closeModal');
        $this->alert('success', 'Data Berhasil Disimpan');
        $this->resetInput();
    }

    public function edit($id)
    {
        $User = User::where('id', $id)->first();
        $this->ids = $User->id;
        $this->name = $User->name;
        $this->email = $User->email;
        $this->role = $User->role;
        $this->status = $User->status;
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|min:6|regex:/^[a-zA-Z., ]*$/',
            'email' => 'required|email',
            'role' => 'required',
        ]);
        if ($this->ids) {
            $User = User::find($this->ids);
            $User->update([
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->role,
                'status' => $this->status,
            ]);

            // session()->flash('message', 'User Berhasil Diupdate.');
            // @dd($User);
            $this->emit('edit');
            $this->dispatchBrowserEvent('edit');
            $this->alert('success', 'User Berhasil Diupdate');
            $this->resetInput();

            // return redirect()->route('user');
        }
    }


    public function resetInput()
    {
        $this->name = '';
        $this->ids = '';
        $this->email = '';
        $this->role = '';
    }

    public function konfimasiReset($id)
    {
        $nama = User::where('id', $id)->get();
        $this->dispatchBrowserEvent('swal:confirmpass', [
            'type' => 'warning',
            'title' => 'Apakah anda yakin atur ulang password ' . $nama[0]->name . '?',
            'text' => '',
            'id' => $id,
        ]);
    }
    public function resetpass($id)
    {
        // $this->emit('resetpass');

        $User = User::where('id', $id)->first();
        $this->ids = $User->id;
        // $this->status = $User->status;
        $User = User::find($this->ids);
        $User->update([
            'status' => 'aktif',
            'password' => $this->password = Hash::make('password')
        ]);


        $this->alert('success', 'Password ' . $User->name . ' Berhasil Direset');
        // return redirect()->route('karyawan.index');
    }

    public function konfimasiDEL($id)
    {
        $nama = User::where('id', $id)->get();
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Apakah anda yakin menghapus ' . $nama[0]->name . '?',
            'text' => '',
            'id' => $id,
        ]);
    }

    public function delete($id)
    {
        $User = User::where('id', $id)->first();
        User::where('id', $id)->delete();

        $this->alert('success', 'User ' . $User->name . ' Berhasil Dihapus');
    }
}
