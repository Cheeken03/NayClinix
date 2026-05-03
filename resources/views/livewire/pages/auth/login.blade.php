
<?php
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        // $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
        $this->redirectIntended(default: route('home', absolute: false), navigate: true);

        // $this->dispatch('logged-in', user: Auth::user());
    }
}; ?>





<section class="">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 pt-20 pb-20">
                <div class="signin-three">
                    <div class="signin-form form-style-four light-rounded-buttons">
                        <div class="signin-text text-center">
                            <p class="text">Enter Credential to Sign In</p>
                        </div>
                        
                        <form wire:submit="login">
                            <div class="col-lg">
                                <div class="form-input mt-30">
                                    <div class="input-items default">
                                        <input wire:model="form.email" id="login-email" type="email" name="email" placeholder="Email" required autofocus autocomplete="username">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                                
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="form-input mt-30">
                                    <div class="input-items default">
                                        <input wire:model="form.password" id="password" class="" type="password"  placeholder="Password" name="current_password" required autocomplete="password" >
                                        <i class="lni-key"></i>
                                    </div>
                                    <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                                    
                                </div>
                            </div>
                            
                            <div class="signin-checkbox mt-25 d-flex justify-content-between">
                                <div>
                                    <input wire:model="form.remember" id="remember" type="checkbox" name="remember">
                                    <label for="checkbox"></label>
                                    <span>{{ __('Remember me') }}</span>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="text-sm uppercase" href="{{ route('password.request') }}" wire:navigate>
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="form-input mt-40 text-center">
                                <x-primary-button class="uppercase">
                                    {{ __('Login') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

          
</section>

