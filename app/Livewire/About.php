<?php

//use Illuminate\Console\View\Components\Component;
namespace App\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class About extends Component
{
    public function render()
    {
        
        return view('pages.about');
    }
}