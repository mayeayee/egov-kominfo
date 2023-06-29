<?php

namespace App\Http\Livewire\Publik;

use App\Models\Aplikasi;
use Livewire\Component;

class Tabelapp extends Component
{
    public $search;
    public $app;
    protected $listeners = ['carii' => 'render', 'searchSubmitted'];
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

    public function render()
    {
        $pp = $this->search;
        $this->app = Aplikasi::where('nama_aplikasi', 'like', '%' . $this->search . '%')
        ->orWhereHas('R_OPD', function ($query) use ($pp) {
            $query->where('nama_opd', 'like', '%' . $pp . '%');
        })
        ->orWhere('status_aplikasi', 'like', '%' . $this->search . '%')
        ->orWhere('status_projek', 'like', '%' . $this->search . '%')
        ->orderBy($this->sortField, $this->sortAsc ? 'ASC' : 'DESC')
        ->get();

        return view('livewire.publik.tabelapp');
    }
    public function mount($search = null)
    {
        $this->search = $search;
    }
    public function searchSubmitted($search)
    {
        $this->search = $search;
    }
}
