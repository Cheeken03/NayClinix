<x-modal action="login" title="{{ Auth::user() ? 'Verify Email' : 'Sign In' }}">
    @guest
        <livewire:pages.auth.login>
        @else
            {{-- @if (!Auth::user()->email_verified_at) --}}
            <div x-show="!verified" class="flex flex-col items-center -mt-5">
                <livewire:pages.auth.verify-email>
            </div>
            {{-- @endif --}}
        @endguest
</x-modal>

<x-modal action="register" title="Sign Up">
    <livewire:pages.auth.register>
</x-modal>

@auth
    <x-modal action="profile" title="Update Profile">
        <livewire:profile.update-profile-information-form />
    </x-modal>

    <x-modal action="password" title="Change Password">
        <livewire:profile.update-password-form />
    </x-modal>

    <x-modal action="address" title="My Addresses">
        <livewire:profile.address-book />
    </x-modal>
    
    <x-modal action="new-address" title="Add Address">
        <livewire:profile.address-form />
    </x-modal>
@endauth