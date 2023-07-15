<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $name = "lamo";
    public $sent;

    public function render()
    {
        return view('livewire.example');
    }

    public function send(){
        $this->sent = $this->name;
    }

    
}
