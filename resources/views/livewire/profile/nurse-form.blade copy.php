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

<section
    x-on:nurse-added.window="
        $wire.resetFields();
    "
    class="px-40 max-h-[300px] overflow-y-auto">
    <header>
        {{-- <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2> --}}

        <p class="mt-5 text-lg font-bold text-gray-900 dark:text-gray-400 px-50">
            {{ __("Add a new Nurse.") }}
        </p>
    </header>

    <form wire:submit="addNurse" class="mt-5 space-y-5 m-[20px] text-center">

        <div>
            <x-input-label for="first name" :value="__('first Name')" />
            <x-text-input wire:model="nurse_first_name" id="nurse_first_name" name="nurse_first_name" type="text" class="" required autofocus autocomplete="first_name" />
            <x-input-error class="mt-2" :messages="$errors->get('nurse_first_name')" />
        </div>

        <div>
            <x-input-label for="last name" :value="__('last Name')" />
            <x-text-input wire:model="nurse_last_name" id="nurse_last_name" name="nurse_last_name" type="text" class="" required autofocus autocomplete="last_name" />
            <x-input-error class="mt-2" :messages="$errors->get('nurse_first_name')" />
        </div>

        <div>
            <x-input-label for="nurse_email" :value="__('email')" />
            <x-text-input wire:model="nurse_email" id="nurse_email" name="nurse_email" type="text" class="" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('nurse_email')" />
        </div>
        
        <div>
            <x-input-label for="nurse_age" :value="__('age')" />
            <x-text-input wire:model="nurse_age" id="nurse_age" name="nurse_age" type="text" class="" required autocomplete="age" />
            <x-input-error class="mt-2" :messages="$errors->get('nurse_age')" />
        </div>
        
        <div>
            <x-input-label for="nurse_licence_id" :value="__('licence Id')" />
            <x-text-input wire:model="nurse_licence_id" id="nurse_licence_id" name="nurse_licence_id" type="text" class="" required autocomplete="licence_id" />
            <x-input-error class="mt-2" :messages="$errors->get('nurse_licence_id')" />
        </div>

        <div class="px-20">
            <x-input-label for="nurse_image" :value="__('Image')" />
            <div class="p-1 border-2 border-dotted rounded-xl hover:border-primary">
                <x-filepond::upload
                wire:model="nurse_image"
                {{-- :allowImageTransform="false" --}}
                max-file-size="5MB"
                
                    
                {{-- :accepted-file-types="['image/png', 'image/jpeg', 'image/jpg', 'image/webp', 'image/gif']"  --}}
                placeholder="Drag & Drop your image or <span class='filepond--label-action'> Browse</span>" />
            </div>
            <x-input-error class="mt-2" :messages="$errors->first('nurse_image')" />
        </div>


        <x-action-message on="nurse-added">
            {{ __('Nurse added.') }}
        </x-action-message>

        <div class="flex items-center justify-center w-full gap-4">
            <x-primary-button class="uppercase">{{ __('Save') }}</x-primary-button>
        </div>
        
    </form>

   


</section>