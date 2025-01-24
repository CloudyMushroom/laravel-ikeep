<div>       

    <nav>
        <li><a class="nav-anchor" href="/" wire:click.prevent="toggleComponent('login')">Home</a></li>
        <li><a class="nav-anchor" href="#" wire:click.prevent="toggleComponent('account')">Account</a></li>
        <li><a class="nav-anchor" href="#" wire:click.prevent="toggleComponent('about')">About</a></li>
    </nav>

    @if ($activeComponent === 'account')    
        <livewire:account />                
    @endif

    @if ($activeComponent ==='about')
        <livewire:about />        
    @endif

    @if($activeComponent==='login')
        <livewire:login />
    @endif


  
   

</div>
