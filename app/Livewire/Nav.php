<?php

namespace App\Livewire;
use Livewire\Component;



//#[Title('Navigation')]
class Nav extends Component
{
    public function toggleComponent()
    {
        $this->dispatch('toggleAccountComponent')->to('Navmanager');       
    }

    public function render()
    {
        return view('livewire.nav');
    }
}

