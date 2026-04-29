<?php

use App\Models\User;
use App\Models\Ward;
use App\Models\Group;
use Livewire\Volt\Component;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

new class extends Component {
    public $group;
    public string $ward_type = '';
    public string $ward_gender = '';
    public array $validatedInput;
    // this will store all the selected nurses
    public array $selected = [];
    // this will store all the selected nurse names
    public array $selectedGroupNames = [];

    public ?int $groupId = null;
  

    public function rules(): array
    {
        return [
           'ward_type' => ['required', Rule::in(array_keys(variables()['ward_types']))],
            'ward_gender'   => ['required'],
            'selected'     => ['required', 'array'],
            'selected.*'   => ['integer', 'exists:groups,id'],
        ];
    }

    public function messages() 
    {
        return [
            'ward_type.required' => 'The ward type is missing.',
            'ward_gender.required' => 'The ward gender is missing.',
            'selected' => 'The groups are missing.',
        ];
    }

    public function setGroup($groupId)  
    {
        $this->group = Group::findOrFail($groupId)->get();
        $this->wardId = null;
        
    }


    public function with()
    {
        return [
            // 'wards' => Ward::paginate(4),
            // this will get all nurses with a group and would solve the N+1 problem
            'groups' => Group::whereNull('ward_id')->get(),
            
        ];
       
    }

    public function updatedSelected()
    {   
        // this will get the selected group and pluck out their names
        $this->selectedGroupNames = Group::whereIn('id', $this->selected)->pluck('group_name')->toArray();
        // dd($selected);
    }
    

    public function addWard()
    {
       
        try {
            $this->validatedInput = $this->validate();

        } catch (ValidationException $e) {
            $this->dispatch('validation-failed');
            throw $e;

        }

        // asign new group
        $ward = new Ward;
        $ward->fill(['ward_type' => $this->validatedInput['ward_type'],]);
        // $ward->fill($this->validatedInput);

        Auth::user()->wards()->save($ward);

        

        // if the array/checkbox is checked
        if (!empty($this->selected)) 
        { 
            // this will get all the selected id from the group table and update it with the ward_id column in the ward table
            Group::whereIn('id', $this->selected)->update(['ward_id' => $ward->id]);
            // Nurse::whereIn('id', $this->selected)->pluck('nurse_first_name')->toArray();

            
        }
        // Set this so the property always has the latest group.
        $this->wardId = $ward->id;

        $this->dispatch('ward-added');
        $this->reset(['selectedGroupNames', 'selected', 'ward_type', 'ward_gender']);
    }
}; ?>

<section
    x-on:group-added.window="$wire.$refresh();"
    x-on:group-removed.window="$wire.$refresh();"
    x-on:nurse-removed.window="$wire.$refresh();"
    x-on:nurse-asigned.window="$wire.$refresh();"
    class="overflow-y-auto">
    <!-- <header>
        {{-- <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2> --}}

        <p class="mt-5 text-lg font-bold text-gray-900 dark:text-gray-400 px-50">
            {{ __("Add a new Group.") }}
        </p>
    </header> -->
  
    <div class="container mb-3">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="">
                    <div class="">
                        <!-- <div class="signin-text text-center">
                            <p class="text">Create Ward</p>
                        </div> -->
                        
                        <form wire:submit="addWard">
                            <div class="px-5">
                                <div class="">
                                    <div class="checkout-radio flex justify-content-between">
                                        <div class="pay-top sin-payment d-flex flex-column">
                                            <input id="radio1" type="radio" wire:model="ward_gender" value="male" checked="checked" name="radios">
                                            <label for="radio1"> <span></span>Male</label>
                                        </div> 
                                        <div class="pay-top sin-payment d-flex flex-column">
                                            <input id="radio2" type="radio" wire:model="ward_gender" value="female" checked="checked" name="radios">
                                            <label for="radio2"> <span></span>Female</label>
                                        </div>   
                                                               
                                    </div>  
                                    <x-input-error class="mt-2 text-center" :messages="$errors->get('ward_gender')" />  
                                </div>

                                <div class="text-center mt-3">
                                    <label>Select Ward Type</label>
                                    <div class="signin-form form-style-four d-flex justify-center">
                                    
                                        @foreach(variables()['ward_types'] as $label => $ward_type)
                                    
                                            <label class="d-flex flex-column items-center px-2 custom-radio cursor-pointer">
                                                <x-text-input class="w-auto h-10" wire:model="ward_type" id="{{ $label }}" name="ward_type" type="radio" value="{{ $label }}" />
                                                <span class="mr-5"></span>
                                                <span class="p-2 !ml-0 card" x-bind:class="$wire.ward_type == '{{ $label }}' && 'border border-primary -mb-0.5'">
                                                    <span class="text-4xl icon la la-{{ $ward_type['icon'] }}"></span>
                                                </span>
                                                <small x-bind:class="$wire.ward_type == '{{ $label }}' && 'text-primary'">{{ Str::ucfirst($label) }}</small>
                                            </label>
                                        @endforeach
                                        
                                    </div> 
                                </div>
                                <x-input-error class="mt-2 text-center" :messages="$errors->get('ward_type')" />
                                    
                                

                                <div class="single-checkout-form form-input">
                                    <div class="text-center">
                                        <label class="mt-3">Groups</label>
                                    </div> 

                                    <div x-data="{ open: false , holderx: 'Select Group', holderxx: 'No available Group' }" class="relative mt-3 cursor-pointer">
                                        <div @click="open = !open"
                                            class="w-full bg-white border rounded-md px-4 py-2 flex justify-between items-center">
                                            <span></span>
                                            <span class="text-gray-700 cursor-pointer">
                                                <input disabled wire:model="selectedGroupNames" type="text" :placeholder="{{ $groups->count() >= 1 ? 'holderx' : 'holderxx' }}"  class="cursor-pointer">
                                            </span>
                                            <i class="las la-angle-down"></i>   
                                        </div>
                                        <x-input-error class="mt-2 text-center" :messages="$errors->get('selected')" />

                                        <!-- Dropdown -->
                                        <div x-show="open" @click.away="open = false"
                                            class="text-center absolute z-10 mt-2 w-full bg-white border rounded-md shadow-lg max-h-[80px] overflow-y-auto">
                                            @foreach($groups as $selected)
                                                <label class="items-center space-x-2 px-4 w-full py-2 hover:bg-gray-100 cursor-pointer">
                                                    <input type="checkbox" wire:model.live="selected" value="{{ $selected->id }}" class="rounded border-gray-300" >
                                                    <!-- <input  type="checkbox" value="{{ $selected->nurse_first_name }}" class="rounded border-gray-300" > -->
                                                    <!-- <input   {{ $selected->group_id ? 'disabled cursor-not-allowed' : '' }}  type="checkbox" wire:model="selected" value="{{ $selected->id }}" class="rounded border-gray-300"> -->
                                                
                                                    <span class="">
                                                        {{ $selected->group_name }}
                                                        
                                                    </span>
                                                </label>
                                            
                                        
                                            @endforeach
                                        </div>

                                    </div>
                                </div> 
                               
                            </div>

                            <x-action-message on="ward-added">
                                {{ __('Ward added.') }}
                            </x-action-message>

                            <div class="flex items-center justify-center w-full gap-4 light-rounded-buttons">
                                <x-primary-button class="uppercase mt-20">{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
