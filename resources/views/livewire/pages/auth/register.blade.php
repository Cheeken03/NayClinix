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



<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 pt-20 pb-20">
                <div class="signin-three">
                    <div class="signin-form form-style-four light-rounded-buttons">
                        <div class="signin-text text-center">
                            <p class="text">Enter Credential to Register</p>
                        </div>
                        
                        <form wire:submit="register">
                            <div class="col-lg">
                                <div class="form-input mt-30">
                                    <div class="input-items default">
                                        <input wire:model="first_name" id="first_name" type="first_name" name="first_name" placeholder="First Name" required autofocus autocomplete="first_name">
                                        <i class="lni-user"></i>
                                        
                                    </div>
                                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="form-input mt-30">
                                    <div class="input-items default">
                                        <input  wire:model="last_name" id="last_name" type="last_name" name="last_name"  placeholder="Last Name" required autofocus autocomplete="last_name" >
                                        <i class="lni-user"></i>
                                    </div>
                                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                    
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-30">
                                    <div class="input-items default">
                                        <input  wire:model="email" id="register-email" class="" type="email" name="email" placeholder="Email" required autocomplete="email" >
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-30">
                                    <div class="input-items default">
                                        <input  wire:model="password" id="password" class="" type="password" name="password"  placeholder="Password" required autocomplete="password"  >
                                        <i class="lni-key"></i>
                                    </div>
                                    <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                                    
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-30">
                                    <div class="input-items default">
                                        <input  wire:model="password_confirmation" id="register-password_confirmation" type="password" name="password_confirmation"  placeholder="Password Confirmation" required autocomplete="new-password"  >
                                        <i class="lni-key"></i>
                                    </div>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    
                                </div>
                            </div>
                            
                            <div>                              
                                <div class="form-input mt-40 text-center">
                                    <x-primary-button class="uppercase">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                </div>
                            </div>
                           
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</section>

