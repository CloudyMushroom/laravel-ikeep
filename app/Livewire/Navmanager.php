<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\On; 
class Navmanager extends Component
{
    public $toggleAccountPage = false;
    public $toggleAboutPage = false;
    // protected $listeners = ['toggleAccountComponent'];
    //#[On('toggleAccountComponent')] same function above
    public function toggleAccount()
    {
        $this->toggleAccountPage = !$this->toggleAccountPage;
    }
    
    public function toggleAbout()
    {
        $this->toggleAboutPage = !$this->toggleAboutPage;
    }



    // it is possible to remove this toggleComponent function and just put the content inside the toggleAccountComponent
  
    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.navmanager');
    }
}

