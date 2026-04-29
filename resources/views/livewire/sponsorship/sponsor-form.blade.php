<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $sponsor_type = '';
}; ?>

<section class="max-h-[300px] overflow-y-auto"
    x-on:nurse-added.window="$wire.resetFields();"
    x-on:nurse-added.window="$wire.$refresh();"
    >

   
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="signin-three">
                    <div class="signin-form form-style-four light-rounded-buttons">
                        <div class="signin-text text-center">
                            <p class="text">Sponsor’s Information</p>
                        </div>  
                       
                        <form wire:submit="addNurse">
                            <div class="col-lg">
                                <div class="form-input">
                                    <div class="input-items default">
                                        <input wire:model="name" id="name" name="name" type="text" placeholder="Full Name / Company Name" class="" required autofocus autocomplete="first_name">
                                        <i class="lni-user"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="contact_person" id="contact_person" name="contact_person" type="text" placeholder="Contact Person" class="" required autofocus autocomplete="last_name">
                                        <i class="lni-user"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('contact_person')" />
                                
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="phone_number" id="phone_number" name="phone_number" type="text" placeholder="Phone Number" class="" required autofocus autocomplete="last_name">
                                        <i class="las la-phone"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
                                
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
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="address" id="address" name="address" type="text" placeholder="Office / Address" class="" required autocomplete="age">
                                        <i class="las la-map-marker-alt"></i>    
                                       
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('address')" />
                                
                                </div>
                            </div>

                            <div class="signin-text text-center mt-3">
                                <p class="text">Sponsorship Category</p>
                            </div>  

                            <div class="d-flex justify-center">     
                                @foreach(variables()['sponsor_types'] as $label => $sponsor_type)
                                    <label class="d-flex flex-column items-center px-2 custom-radio cursor-pointer">
                                        <x-text-input class="w-auto h-10" wire:model="sponsor_type" id="{{ $label }}" name="sponsor_type" type="radio" value="{{ $label }}" />
                                        <span class="mr-5"></span>
                                        <span class="p-2 !ml-0 card" x-bind:class="$wire.sponsor_type == '{{ $label }}' && 'border border-primary -mb-0.5'">
                                            <span class="text-4xl icon la la-{{ $sponsor_type['icon'] }}"></span>
                                        </span>
                                        <small x-bind:class="$wire.sponsor_type == '{{ $label }}' && 'text-primary'">{{ Str::ucfirst($label) }}</small>
                                    </label>
                                @endforeach
                                
                            </div> 
                            <x-input-error class="mt-2 text-center" :messages="$errors->get('sponsor_type')" />

                            <div class="signin-text text-center mt-3">
                                <p class="text">Payment / Donation Details</p>
                            </div>   

                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="amount" id="amount" name="amount" type="text" placeholder="Amount" class="" required autocomplete="amount">
                                        <i class="las la-dollar-sign"></i>                                       
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('amount')" />
                                
                                </div>
                            </div>

                            <div class="signin-text text-center mt-3">
                                <p class="text">Date of Payment</p>
                            </div> 
                            
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="date" id="date" name="date" type="date" placeholder="Date of Payment / Donation" class="" required autocomplete="date">                      
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('amount')" />
                                
                                </div>
                            </div>

                            <div class="signin-text text-center mt-3">
                                <p class="text">Acknowledgment</p>
                                <p class="text-lg">I/We support the Medpin Medical Outreach 2025 to promote accessible healthcare for families and communities in Lagos and beyond.</p>
                            </div> 

                            <div class="d-flex justify-between">
                                <div class="col-lg">
                                    <div class="form-input mt-20">
                                        <div class="input-items default">
                                            <input wire:model="name" id="name" name="name" type="name" placeholder="Name" class="" required autocomplete="date">
                                           <i class="lni-hourglass"></i>
                                
                                        </div>
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                
                                    </div>
                                </div>

                                <div class="col-lg">
                                    <div class="form-input mt-20">
                                        <div class="input-items default">
                                            <input wire:model="date" id="date" name="date" type="date" placeholder="Date of Payment / Donation" class="" required autocomplete="date">
                                        </div>
                                        <x-input-error class="mt-2" :messages="$errors->get('date')" />
                                
                                    </div>
                                </div>
                            </div>
                                            
                            <x-action-message on="nurse-added">
                                {{ __('Nurse added.') }}
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


