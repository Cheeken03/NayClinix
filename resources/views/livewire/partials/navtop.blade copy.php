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

<div class="items-center flex px-20"
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

            <div class="mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex gap-10 h-16 items-center justify-between">
                    <div class="flex items-center gap-5">
                        <div class="shrink-0">
                            <!-- <img class="size-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" /> -->
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4 text-white">
                            
                                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                                <x-nav-link href="/contact" :active="request()->is('contact')">About</x-nav-link>
                            </div>
                        </div>

                        <span x-on:click="$dispatch('logout')" class="flex items-center cursor-pointer text-normal hover:bg-red-600 uppercase btn btn_primary text-white text-lg border-2 rounded-md w-30 bg-red-500 py-1 px-5">
                            <span class="text-xl">Logout</span>
                                
                        </span>
                    </div>
                    
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3 text-white">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/home" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
                    <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                    <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>

                </div>
            </div>

           
               
        

        @else
            <div class="flex gap-5">
                <div class="border-2 rounded-md w-20 text-center  hover:bg-red-600 bg-red-500 py-1">
                    <a href="{{ route('login') }}" class="uppercase btn btn_primary text-white text-lg">Sign In</a>
                </div>

                <div class="border-2 rounded-md w-20 text-center  hover:bg-blue-600 bg-blue-500 py-1">  
                    <a href="{{ route('register') }}" class="uppercase btn btn_primary text-white text-lg">Sign Up</a>
                </div>
            </div>
        @endauth

    </nav>


                    
</div>

