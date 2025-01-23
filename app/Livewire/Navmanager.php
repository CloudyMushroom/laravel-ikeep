<?php

namespace App\Livewire;
use Livewire\Component;

class Navmanager extends Component
{
    public $testVariable = false;

    protected $listeners = ['toggleAccountComponent'];

    public function toggleAccountComponent()
    {
        $this->toggleComponent();
    }


    // it is possible to remove this toggleComponent function and just put the content inside the toggleAccountComponent
    public function toggleComponent()
    {
        $this->testVariable = !$this->testVariable;
    }

    public function render()
    {
        return view('livewire.navmanager');
    }
}

