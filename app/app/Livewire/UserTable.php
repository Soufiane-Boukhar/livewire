<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;



class UserTable extends Component
{
    use WithPagination;

    public $data = '';

    protected $results = [];

    public function search(){
        $this->results = User::search($this->data)->paginate(5);
    }

    public function render()
    {
        $users = User::paginate(5); 

        return view('livewire.user-table', ['users' => $users, 'results' => $this->results]);
    }
}
