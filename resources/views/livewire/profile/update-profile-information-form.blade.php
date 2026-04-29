<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;
use Illuminate\Validation\ValidationException;

new class extends Component
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->first_name = Auth::user()->first_name;
        $this->last_name = Auth::user()->last_name;
        $this->email = Auth::user()->email;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        try {
            $validated = $this->validate([
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            ]);
            
        } catch (ValidationException $e) {
            $this->dispatch('validation-failed');
            throw $e;
        }
        

        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        $this->dispatch('profile-updated', first_name: $user->first_name, last_name: $user->last_name, verified: $user->email_verified_at);
    }

    /**
     * Send an email verification notification to the current user.
     */
    // public function sendVerification(): void
    // {
    //     $user = Auth::user();

    //     if ($user->hasVerifiedEmail()) {
    //         $this->redirectIntended(default: route('home', absolute: false));

    //         return;
    //     }

    //     $user->sendEmailVerificationNotification();

    //     Session::flash('status', 'verification-link-sent');
    // }
}; ?>





<section class="max-h-[300px] overflow-y-auto">

   
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="signin-three">
                    <div class="signin-form form-style-four light-rounded-buttons">
                        <div class="signin-text text-center">
                            <p class="text">Update your Profile</p>
                        </div>  
                        <form wire:submit="updateProfileInformation">
                            <div class="col-lg">
                                <div class="form-input">
                                    <div class="input-items default">
                                        <input wire:model="first_name" id="first_name" name="first_name" type="text" placeholder="First Name" class="" required autofocus autocomplete="first_name">
                                        <i class="lni-user"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                                
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="last_name" id="last_name" name="last_name" type="text" placeholder="Last Name" class="" required autofocus autocomplete="last_name">
                                        <i class="lni-user"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                                
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="email" id="email" name="email" type="text" placeholder="Email" class="" required autocomplete="email">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                
                                </div>
                            </div>
                                            
                            <x-action-message on="profile-updated">
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


