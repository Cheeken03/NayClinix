<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Spatie\LivewireFilepond\WithFilePond;
use Livewire\Volt\Component;
use App\Models\Nurse;
use Illuminate\Validation\ValidationException;

new class extends Component
{   
    use WithFilePond;
    public array $validatedInput;

    public string $nurse_first_name = '';
    public string $nurse_last_name = '';
    public string $nurse_email = '';
    public string $nurse_age = '';
    public $nurse_image;
    public string $nurse_licence_id = '';



    public function rules(): array
    {
        return [
            'nurse_first_name' => ['required', 'string', 'max:255'],
            'nurse_last_name' => ['required', 'string', 'max:255'],
            'nurse_email' => ['required', 'string', 'max:255', 'unique:' . Nurse::class],
            'nurse_age' => 'required|numeric',
            'nurse_image' => 'required|file|image|max:5000',
            'nurse_licence_id' => ['required', 'string', 'max:255', 'unique:' . Nurse::class],
        ];
    }

    public function messages() 
    {
        return [
            'nurse_licence_id.required' => 'The :attribute are missing.',
            'nurse_licence_id.max' => 'The :attribute is too long.',
        ];
    }

    public function validateUploadedFile()
    {
        try {
            $this->validateOnly('nurse_image');
            return true;
            
        } catch (ValidationException $e) {
            $this->dispatch('validation-failed');
            throw $e;
            
        }
    }

    /**
     * Save the new delivery address.
     */
    public function addNurse(): void
    {
        
        try {
            $this->validatedInput = $this->validate();
            
        } catch (ValidationException $e) {
            $this->dispatch('validation-failed');
            throw $e;
            
        }


        $nurse = new Nurse;

        $nurse->fill($this->validatedInput);

        // this will store the image in the public/nurses path
        $imageName = $this->nurse_image->storePublicly(path: 'nurses', options: 'public');

        // this will asign $nurse->nurse_image to $imageName
        $nurse->nurse_image = $imageName;

        // this will save the nurse
        Auth::user()->nurses()->save($nurse);

        $this->dispatch('nurse-added');
       
       
        
        // Method 1
        // $address->user_id = Auth::id();
        // $address->save();
        
        // Method 2
        // Auth::user()->nurses()->save($nurse);

        // $this->dispatch('nurse-added');
    }

    public function resetFields()
    {
        $this->reset();
    }
    
}; ?>






<section class="max-h-[300px] overflow-y-auto" x-on:nurse-added.window="$wire.resetFields();">

   
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="signin-three">
                    <div class="signin-form form-style-four light-rounded-buttons">
                        <div class="signin-text text-center">
                            <p class="text">Add A New Nurse</p>
                        </div>  
                        <form wire:submit="addNurse">
                            <div class="col-lg">
                                <div class="form-input">
                                    <div class="input-items default">
                                        <input wire:model="nurse_first_name" id="nurse_first_name" name="nurse_first_name" type="text" placeholder="First Name" class="" required autofocus autocomplete="first_name">
                                        <i class="lni-user"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('nurse_first_name')" />
                                
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="nurse_last_name" id="nurse_last_name" name="nurse_last_name" type="text" placeholder="Last Name" class="" required autofocus autocomplete="last_name">
                                        <i class="lni-user"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('nurse_last_name')" />
                                
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="nurse_email" id="nurse_email" name="nurse_email" type="text" placeholder="Email" class="" required autocomplete="email">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="nurse_age" id="nurse_age" name="nurse_age" type="text" placeholder="Age" class="" required autocomplete="age">
                                       <i class="lni-hourglass"></i>
                                       
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('age')" />
                                
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-input mt-20">
                                    <div class="input-items default">
                                        <input wire:model="nurse_licence_id" id="nurse_licence_id" name="nurse_licence_id" type="text" placeholder="Licence ID" class="" required autocomplete="licence_id">
                                        <i class="lar la-id-badge w-20"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('nurse_licence_id')" />
                                
                                </div>
                            </div>

                            <div class="pr-40 pl-40">
                                <!-- <x-input-label for="nurse_image" :value="__('Image')" /> -->
                                <div class="p-1 mt-3 border-2 border-dotted rounded-xl hover:border-light-rounded-one">
                                    <x-filepond::upload
                                    wire:model="nurse_image"
                                    {{-- :allowImageTransform="false" --}}
                                    max-file-size="5MB"
                                       
                                    {{-- :accepted-file-types="['image/png', 'image/jpeg', 'image/jpg', 'image/webp', 'image/gif']"  --}}
                                    placeholder="Drag & Drop your product image or <span class='filepond--label-action'> Browse</span>" />
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->first('nurse_image')" />
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
