<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component {
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Update the password for the currently authenticated user.
     */
    public function updatePassword(): void
    {
        try {
            $validated = $this->validate([
                'current_password' => ['required', 'string', 'current_password'],
                'password' => ['required', 'string', Password::defaults(), 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            $this->reset('current_password', 'password', 'password_confirmation');
            $this->dispatch('validation-failed');
            throw $e;
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset('current_password', 'password', 'password_confirmation');

        $this->dispatch('password-updated');
    }
}; ?>





<section class="max-h-[300px] overflow-y-auto">

   
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="signin-three">
                    <div class="signin-form form-style-four light-rounded-buttons">
                        <div class="signin-text text-center">
                            <p class="text">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
                        </div>  
                        <form wire:submit="updatePassword">
                            <div class="col-lg">
                                <div class="form-input">
                                    <div class="input-items default">
                                        <input  wire:model="current_password" id="update_password_current_password"
                                            type="password" name="current_password" placeholder="Current password" required autocomplete="current-password">
                                        <i class="las la-key fs-4"></i>
                                    </div>
                                     <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
                                
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="password" id="update_password_password" type="password"
                                            name="password" placeholder="New Password" required autocomplete="new-password">
                                        <i class="las la-key fs-4"></i>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="password_confirmation" id="update_password_password_confirmation"
                                            type="password" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="new-password">
                                        <i class="las la-key fs-4"></i>
                                    </div>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                
                                </div>
                            </div>
                                            
                            <x-action-message on="password-updated">
                                {{ __('Saved.') }}
                            </x-action-message>
                            
                            <div class="form-input mt-20 text-center">
                                <x-primary-button class="uppercase">
                                    {{ __('save') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

