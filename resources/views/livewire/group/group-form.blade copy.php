<?php

use App\Models\User;
use App\Models\Group;
use App\Models\Nurse;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

new class extends Component {

    //
    public $nurses;
    public array $validatedInput;
    public array $selected = [];
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
    public function mount()
    {
        $this->nurses = Nurse::all();
        $this->groupId = null;
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
        }
        // Set this so the property always has the latest group.
        $this->groupId = $group->id;

        $this->dispatch('group-added');
        $this->reset(['group_name', 'selected']);
    }

    
   
}; ?>

<section
    x-on:group-added.window="$wire.$refresh();"
    x-on:nurse-removed.window="$wire.$refresh();"
    class="px-40 max-h-[300px]">
    <header>
        {{-- <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2> --}}

        <p class="mt-5 text-lg font-bold text-gray-900 dark:text-gray-400 px-50">
            {{ __("Add a new Group.") }}
        </p>
    </header>

    <form wire:submit="addGroup" class="mt-5 space-y-5 m-[20px] text-center">
        <div>
            <x-input-label for="group name" :value="__('group Name')" />
            <x-text-input  wire:model="group_name" id="group_name" name="group_name" type="text" required autofocus autocomplete="group_name" />
            <x-input-error class="mt-2" :messages="$errors->get('group_name')" />
        </div>
       
           
        <div x-data="{ open: false }" class="relative w-64 ml-32 cursor-pointer">
            <div @click="open = !open"
                class="w-full bg-white border rounded-md px-4 py-2 flex justify-between items-center">
                <span></span>
                <span class="text-gray-700 cursor-pointer">
                   <input disabled wire:model="selected" type="text" class="cursor-pointer">
                </span>
                <i class="las la-angle-down"></i>   
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('selected')" />

            <!-- Dropdown -->
            <div x-show="open" @click.away="open = false"
                class="absolute z-10 mt-2 w-full bg-white border rounded-md shadow-lg max-h-60 overflow-y-auto">
                @foreach($nurses as $nurse)
                    <label class="flex items-center space-x-2 px-4 py-2 hover:bg-gray-100 cursor-pointer">
                        <input   {{ $nurse->group_id ? 'disabled cursor-not-allowed' : '' }}  type="checkbox" wire:model="selected" value="{{ $nurse->id }}" class="rounded border-gray-300">
                        <!-- <input   {{ $nurse->group_id ? 'disabled cursor-not-allowed' : '' }}  type="checkbox" wire:model="selected" value="{{ $nurse->id }}" class="rounded border-gray-300"> -->
                        <span class="">
                            {{ $nurse->nurse_first_name }}
                        </span>
                    </label>
                @endforeach
        
            </div>

        </div>


        <x-action-message on="group-added">
            {{ __('Group added.') }}
        </x-action-message>

        <div class="flex items-center justify-center w-full gap-4">
            <x-primary-button class="uppercase">{{ __('Save') }}</x-primary-button>
        </div>
        
    </form>

   


</section>


<section class="mb-50"
    x-on:group-added.window="$wire.$refresh();"
    x-on:nurse-removed.window="$wire.$refresh();"
    class="px-40 max-h-[300px]">
    <header>
        {{-- <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2> --}}

        <p class="mt-5 text-lg font-bold text-gray-900 dark:text-gray-400 px-50">
            {{ __("Add a new Group.") }}
        </p>
    </header>
  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="signin-three">
                    <div class="signin-form form-style-four light-rounded-buttons">
                        <div class="signin-text text-center">
                            <p class="text">Create Group</p>
                        </div>
                        
                        <form wire:submit="login">
                            <div class="col-lg">
                                <div class="form-input mt-30">
                                    <div class="input-items default">
                                        <input wire:model="group_name" id="group_name" name="group_name" type="text" required autofocus autocomplete="group_name">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->get('nurse_first_name')"  />
                                
                                </div>
                            </div>

                            <div x-data="{ open: false }" class="relative w-64 ml-32 cursor-pointer">
                                <div @click="open = !open"
                                    class="w-full bg-white border rounded-md px-4 py-2 flex justify-between items-center">
                                    <span></span>
                                    <span class="text-gray-700 cursor-pointer">
                                    <input disabled wire:model="selected" type="text" class="cursor-pointer">
                                    </span>
                                    <i class="las la-angle-down"></i>   
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('selected')" />

                                <!-- Dropdown -->
                                <div x-show="open" @click.away="open = false"
                                    class="absolute z-10 mt-2 w-full bg-white border rounded-md shadow-lg max-h-60 overflow-y-auto">
                                    @foreach($nurses as $nurse)
                                        <label class="flex items-center space-x-2 px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input   {{ $nurse->group_id ? 'disabled cursor-not-allowed' : '' }}  type="checkbox" wire:model="selected" value="{{ $nurse->id }}" class="rounded border-gray-300">
                                            <!-- <input   {{ $nurse->group_id ? 'disabled cursor-not-allowed' : '' }}  type="checkbox" wire:model="selected" value="{{ $nurse->id }}" class="rounded border-gray-300"> -->
                                            <span class="">
                                                {{ $nurse->nurse_first_name }}
                                            </span>
                                        </label>
                                    @endforeach
                            
                                </div>

                            </div>
                            
                            <x-action-message on="group-added">
                                {{ __('Group added.') }}
                            </x-action-message>

                            <div class="flex items-center justify-center w-full gap-4">
                                <x-primary-button class="uppercase">{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
