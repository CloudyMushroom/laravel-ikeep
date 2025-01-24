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

    /* refer to chatGPT https://chatgpt.com/c/67939cfb-b764-8008-99bb-50d1c0f593b1
        create the toggleComponent === is strict value and type checker
        
    */

    public $activeComponent = null;

    public function toggleComponent($component)
    {
        if ($this->activeComponent === $component)
        {
            $this->activeComponent = null; // if napindot ulit yung component it will be hidden
        }
        else
        {
            $this->activeComponent = $component; // else it will be visible based sa sent params/props kay togglecomponent and if else variable na activecomponent sa component
        }
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

