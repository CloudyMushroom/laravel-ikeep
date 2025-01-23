<div>       

    <nav>
        <li><a class="nav-anchor" href="/" wire:navigate>Home</a></li>
        <li><a class="nav-anchor" href="#" wire:click.prevent="toggleAccount">Account</a></li>
        <li><a class="nav-anchor" href="#" wire:click.prevent="toggleAbout">About</a></li>
    </nav>

    @if ($toggleAccountPage)    
        <livewire:account />    
    @endif

    @if ($toggleAboutPage)
        <livewire:about />
    @endif
  

</div>
