<?php

namespace App\Models;
use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
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
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div class="px-100 py-30">
    <div class="p-4 py-10 h-56 bg-blue-200 mt-7 gap-3 rounded-xl flex flex-col text-center">
        <flux:text class="text-center">
            {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
        </flux:text>

        @if (session('status') == 'verification-link-sent')
            <flux:text class="text-center font-medium rounded-xl text-green-600 dark:text-green-400 bg-white py-4">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </flux:text>
        @endif

        <div class="flex flex-col items-center justify-between space-y-3">
            <flux:button wire:click="sendVerification" variant="primary" class="w-full">
                {{ __('Resend verification email') }}
            </flux:button>

            <!-- <flux:link class="text-sm cursor-pointer" wire:click="logout">
                {{ __('Log out') }}
            </flux:link> -->
        </div>
    </div>
</div>
