<?php

namespace App\Livewire;

// use Livewire\Attributes\Title;
use Livewire\Component;



//#[Title('Navigation')]
class Nav extends Component
{    
    public $testVariable2 = "hello2";
    
    public function render()
    {        
        return view('livewire.nav');
        
    }

 
}
