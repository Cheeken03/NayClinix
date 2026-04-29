<?php

use App\Models\User;
use App\Models\Group;
use App\Models\Nurse;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

new class extends Component {

    //
    public $nurse;
    // this will store all the validated input
    public array $validatedInput;
    // this will store all the selected nurses
    public array $selected = [];
    // this will store all the selected nurse names
    public array $selectedNurseNames = [];
    // this will set groupId to null by default
    public ?int $groupId = null;
    public string $group_name;


    public function rules(): array
    {
        return [
            'group_name'   => ['required', 'string', 'max:255'],
            'selected'     => ['required', 'array'],
            'selected.*'   => ['integer', 'exists:nurses,id'],
        ];
    }


    public function messages() 
    {
        return [
            'group_name.required' => 'The name is missing.',
            'selected.max' => 'The nurses are missing.',
        ];
    }


    // mount the property so it won't be undefined
    public function setNurse($nurseId)  
    {
        $this->nurse = Nurse::findOrFail($nurseId)->get();
        $this->groupId = null;
    }   


    public function with()
    {
        return [
            // this will get all nurses without a group and would solve the N+1 problem
            'nurses' => Nurse::whereNull('group_id')->get(),
          
        ];
    }


    public function updatedSelected()
    {
        $this->selectedNurseNames = Nurse::whereIn('id', $this->selected)->pluck('nurse_first_name')->toArray();
    }

         

    public function addGroup()
    {
       

        try {
            $this->validatedInput = $this->validate();

        } catch (ValidationException $e) {
            $this->dispatch('validation-failed');
            throw $e;

        }

        // asign new group
        $group = new Group;
        $group->fill(['group_name' => $this->validatedInput['group_name'],]);

        Auth::user()->groups()->save($group);

        // if the array/checkbox is checked
        if (!empty($this->selected)) 
        { 
            // this will get all the selected id from the nurses table and update it with the group_id column in the nurses table
            Nurse::whereIn('id', $this->selected)->update(['group_id' => $group->id]);
            // Nurse::whereIn('id', $this->selected)->pluck('nurse_first_name')->toArray();

            
        }
        // Set this so the property always has the latest group.
        $this->groupId = $group->id;

        $this->dispatch('group-added');
        $this->reset(['group_name', 'selectedNurseNames', 'selected']);
    }

    
   
}; ?>


<section
    x-on:group-added.window="$wire.$refresh();"
    x-on:nurse-removed.window="$wire.$refresh();"
    x-on:nurse-asigned.window="$wire.$refresh();"
    class="max-h-[300px]">
    <!-- <header>
        {{-- <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2> --}}

        <p class="mt-5 text-lg font-bold text-gray-900 dark:text-gray-400 px-50">
            {{ __("Add a new Group.") }}
        </p>
    </header> -->
  
    <div class="container px-5 mb-3">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="signin-three">
                    <div class="py-5 signin-form form-style-four light-rounded-buttons">
                        <div class="signin-text text-center">
                            <p class="text">Create Group</p>
                        </div>
                        
                        <form wire:submit="addGroup">
                            <div class="col-lg">
                                <div class="form-input">
                                    <div class="input-items default">
                                        <input wire:model="group_name" id="group_name" name="group_name" type="text" placeholder="Group Name"  required autofocus autocomplete="group_name">
                                        <i class="las la-users fs-4"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('nurse_first_name')"  />
                                
                                </div>
                            </div>

                            <div x-data="{ open: false , holder: 'Select Nurses', holderx: 'No available Nurses' }" class="relative mt-3 cursor-pointer">
                                <div @click="open = !open"
                                    class="w-full bg-white border rounded-md px-4 py-2 flex justify-between items-center">
                                    <span></span>
                                    <span class="text-gray-700 cursor-pointer">
                                        <input disabled wire:model="selectedNurseNames" type="text" :placeholder="{{ $nurses->count() >= 1 ? 'holder' : 'holderx' }}" class="cursor-pointer">
                                    </span>
                                    <i class="las la-angle-down"></i>   
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('selected')" />

                                <!-- Dropdown -->
                                <div x-show="open" @click.away="open = false"
                                    class="text-center absolute z-10 mt-2 w-full bg-white border rounded-md shadow-lg max-h-[80px] overflow-y-auto">
                                    @foreach($nurses as $selected)
                                        <label class="items-center space-x-2 px-4 w-full py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" wire:model.live="selected" value="{{ $selected->id }}" class="rounded border-gray-300" >
                                            <!-- <input  type="checkbox" value="{{ $selected->nurse_first_name }}" class="rounded border-gray-300" > -->
                                            <!-- <input   {{ $selected->group_id ? 'disabled cursor-not-allowed' : '' }}  type="checkbox" wire:model="selected" value="{{ $selected->id }}" class="rounded border-gray-300"> -->
                                           
                                            <span class="">
                                                {{ $selected->nurse_first_name }}
                                                {{ $selected->nurse_last_name }}
                                            </span>
                                        </label>
                                    
                                
                                    @endforeach
                                </div>

                            </div>


                            <x-action-message on="group-added">
                                {{ __('Group added.') }}
                            </x-action-message>

                            <div class="flex items-center justify-center w-full gap-4 mt-3">
                                <x-primary-button class="uppercase">{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
