<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));
        Auth::login($user);

        $this->redirectIntended(route('home', absolute: false), navigate: true);
    }
}; ?>

<div class="mt-10 text-center w-80 border-5 border-radius border-blue-200 rounded-md justify-self-center">
    <form wire:submit="register" class="mt-2">
        <!-- First_Name -->
        <div class="mb-2">
            <x-input-label for="first_name" :value="__('First_Name')" />
            <x-text-input wire:model="first_name" id="first_name" type="first_name" name="first_name" required autofocus
                autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>
        <!-- Last_Name -->
        <div class="mb-2">
            <x-input-label for="last_name" :value="__('Last_Name')" />
            <x-text-input wire:model="last_name" id="last_name" type="last_name" name="last_name" required autofocus
                autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>
       
        <!-- Email Address -->
        <div class="mb-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="register-email" class="" type="email" name="email"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-2">
            <x-input-label for="password" :value="__('Password')" />    
            <x-text-input wire:model="password" id="password" class=""
                type="password" name="current_password" required autocomplete="password" 
            />
            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input wire:model="password_confirmation" id="register-password_confirmation"
                type="password" name="password_confirmation" required autocomplete="new-password" 
            />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-5">
            {{-- <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a> --}}

            <x-primary-button class="uppercase mb-5">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
