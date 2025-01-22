<?php

namespace App\Livewire;
use Livewire\Component;

class Navmanager extends Component
{
    public $testVariable = false;

    public function render()
    {
        return view('livewire.navmanager');
    }  

    public function toggleComponent()
    {
        $this->testVariable = !$this->testVariable;
    }
    
}
