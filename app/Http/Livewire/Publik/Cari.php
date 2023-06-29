<?php

namespace App\Http\Livewire\Publik;

use Livewire\Component;

class Cari extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.publik.cari');
    }


    public function updatedSearch()
    {
        // $this->emit('carii', ['search' => $this->search]);
        // $this->emit('searchSubmitted', $this->search);
    }

    public function cari()
    {
        $this->emit('searchSubmitted', $this->search);
    }
}
