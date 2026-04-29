<?php

use App\Models\User;

use Livewire\Volt\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

new class extends Component
{
    public string $name = '';
    public string $location = '';
    public string $phone_number = '';

    /**
     * Save the new delivery address.
     */
    public function addAddress(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'numeric', 'max:11'],
        ]);

        $address = new Address;

        $address->fill($validated);

        $address->save();

        $this->dispatch('address-added');
    }
    
}; ?>

<section>
    <header>
        {{-- <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2> --}}

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Add a new delivery address.") }}
        </p>
    </header>

    <form wire:submit="addAddress" class="mt-5 space-y-5">
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" name="name" type="text" class="block w-full mt-1" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input wire:model="location" id="location" name="location" type="text" class="block w-full mt-1" required autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('location')" />
        </div>
        
        <div>
            <x-input-label for="phone_number" :value="__('Phone Number')" />
            <x-text-input wire:model="phone_number" id="phone_number" name="phone_number" type="text" class="block w-full mt-1" required autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
        </div>

        <x-action-message on="address-added">
            {{ __('Address added.') }}
        </x-action-message>

        <div class="flex items-center justify-center gap-4">
            <x-primary-button class="uppercase">{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>

