<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    /**
     * Send an email verification notification to the user.
     */
    public function sendVerification(): void
    {
        if (Auth::user()->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('home', absolute: false), navigate: true);

            return;
        }

        Auth::user()->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }

    /**
     * Log the current user out of the application.
     */
    // public function logout(Logout $logout): void
    // {
    //     $logout();
    //     $this->redirect('/', navigate: true);
    //     // $this->redirect('/');
    // }
}; ?>

{{-- <div class="mt-24">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="flex items-center justify-between mt-4">
        <x-primary-button wire:click="sendVerification">
            {{ __('Resend Verification Email') }}
        </x-primary-button>

        <button wire:click="logout" type="submit" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
            {{ __('Log Out') }}
        </button>
    </div>
</div> --}}


<div class="w-80">
    <div class="my-4">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="pr-10 alert alert_success" x-init="alerts();">
            <strong class="uppercase"><bdi>Success!</bdi></strong>
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            <button class="dismiss la la-times" data-dismiss="alert"></button>
        </div>
    @endif

    <div class="flex items-center justify-center mt-4">
        <x-primary-button class="uppercase" wire:click.throttle="sendVerification" wire:loading.attr="disabled" x-bind:disabled="{{ session('status') == 'verification-link-sent' ? 'true' : 'false' }}">
            {{ __('Resend Email') }}
        </x-primary-button>
    </div>

    <!-- <div class="col-md-12">
        <div class="form-input rounded-buttons">
            <button
                class="btn primary-btn rounded-full"
                type="submit"
                wire:click.throttle="sendVerification" wire:loading.attr="disabled" x-bind:disabled="{{ session('status') == 'verification-link-sent' ? 'true' : 'false' }}"
            >
                {{ __('Resend Email') }}
            </button>
        </div>
        
    </div> -->
</div>
