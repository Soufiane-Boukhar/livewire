<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;


class Search extends Component
{
    public $data = '';
    public $results;

    public function search(){
        $this->results = User::search($this->data)->get();
    }
    public function render()
    {
        return view('livewire.search');
    }
}
