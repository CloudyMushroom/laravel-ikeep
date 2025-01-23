<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\On; 
class Navmanager extends Component
{
    public $testVariable = false;

    protected $listeners = ['toggleAccountComponent'];
    //#[On('toggleAccountComponent')] same function above
    public function toggleAccountComponent()
    {
        $this->testVariable = !$this->testVariable;
    }


    // it is possible to remove this toggleComponent function and just put the content inside the toggleAccountComponent
  

    public function render()
    {
        return view('livewire.navmanager');
    }
}

