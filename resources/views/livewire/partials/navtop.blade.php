<?php

use Livewire\Volt\Component;
use App\Livewire\Actions\Logout;

new class extends Component {
    //

    // public $user, $authenticated;
    public $authenticated;

    public function mount()
    {
        $this->authenticated = Auth::check();
        // $this->user['name'] = Auth::user()?->name ?? '';
        // $this->user['email'] = Auth::user()?->email ?? '';
        // $this->user['initials'] = Auth::user()?->initials ?? '';
        // $this->user['verified'] = Auth::user()?->email_verified_at ?? '';
        // $this->count = 3;
    }
    
    public function logout(Logout $logout): void
    {
        $logout();
        $this->redirect('/', navigate: true);
        // $this->redirect('/');
    }
}; ?>


<div class=""
    x-on:logged-in.window="
        $wire.authenticated = true;
        $wire.user = $event.detail.user
    "
    x-on:logout.window="$wire.logout();"
    {{-- x-init="resetCustomTippy(); modal(); collapse();" --}}
    x-init=""
    x-on:profile-updated.window="$wire.$refresh()"
>
    <nav class="">
        @auth
            <div x-data="{active: false}" class="navbar navbar-expand-lg sub-menu-bar" id="navbarOne">
                <!-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="text-decoration-none active" href="/">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a x-on:click="active = true" x-bind:class="active" class="text-decoration-none" href="/services">SERVICES</a>
                    </li>

                    <li class="nav-item">
                        <a class="text-decoration-none" href="/about">ABOUT</a>
                    </li>

                    <li class="nav-item">
                        <a class="text-decoration-none"  href="/contact">CONTACT</a>
                    </li>
                </ul> -->

               

                <span x-on:click="$dispatch('logout')" class="cursor-pointer uppercase danger-buttons">
                    <span class="text-xl main-btn danger-three">Logout</span>                
                </span>
            </div>


        @else
            <div class="navbar-btn d-none d-sm-inline-block">
                <ul>
                    <li><a class="light text-decoration-none" href="{{ route('login') }}">Sign In</a></li>
                    <li><a class="solid text-decoration-none" href="{{ route('register') }}">Sign Up</a></li>
                </ul>
            </div>
        @endauth

    </nav>

</div>

