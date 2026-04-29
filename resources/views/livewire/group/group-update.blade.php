<?php

use App\Models\Group;
use App\Models\Nurse;
use Livewire\Attributes\On;
use Livewire\Volt\Component;
use Illuminate\Database\Eloquent\Collection;

new class extends Component {
    //
    public ?Group $group = null;
    // multiple nurses (collection):
    public Collection $nurses;


    public function mount()
    {
        $this->nurses = new Collection();
    }

    #[On('showGroup')]
    public function groupShow($id)
    {
        // this will find the group id
        $this->group = Group::with('nurses')->findOrFail($id);
        // this would return a Collection
        $this->nurses = $this->group->nurses ?? new Collection();
     
        $this->dispatch('group-show');
    }


    public function rules(): array
    {
        return [
            'group_name' => 'required', 'string', 'max:255',
        ];
    }

    public function saveInput($title, $model, $id, $value)
    {
       
        $group = Group::find($id);
        $group->{$title} = $value;
        $group->save();
        
        $this->dispatch('group-updated');
    }

    public function removeNurse($nurseId)
    {
        // this will find the nurse id
        $nurse = Nurse::findOrFail($nurseId);
        // this will set the group_id to null
        $nurse->group_id = null;
        $nurse->save();
     
        $this->dispatch('nurse-removed');
        $this->groupShow($this->group->id);
    }




}; ?>

<div>
    <div class="max-h-[400px] overflow-y-auto"
        x-on:showGroup.window="$wire.$refresh(); group = $event.detail.group"
        x-on:group-updated.window="$wire.$refresh();"
        x-on:nurse-removed.window="$wire.$refresh();"
        
        >
        <div class="text-green-400">
            <x-action-message on="group-updated" class="mb-2 px-3 bg-green-200 rounded-md mt-3 py-3">
                {{ __('Updated.') }}
            </x-action-message>

            <x-action-message on="nurse-removed" class="mb-2 px-3 bg-green-200 rounded-md mt-3 py-3">
                {{ __('Nurse removed.') }}
            </x-action-message>
        </div>

        @if($group)
           
            <div class="container" wire:key="group-{{ $group->id }}">
                <div class="row justify-content-center" id="container-{{ $group->id }}" wire:ignore.self>
                    <div class="col-lg-12">
                        <div class="signin-three">
                            <div class="py-3 signin-form form-style-four light-rounded-buttons">
                               
                            
                                <div>
                                    <div class="col-lg">
                                        <div class="form-input mt-20">
                                            <div class="input-items default">
                                                <x-input-edit title="group_name" value="{{ $group?->group_name }}" model="group" id="{{ $group->id }}" />
                                            </div>
                                    
                                        </div>

                                        <div class="mt-3">
                                            <h5 class="text-center">Nurses</h5>
                                            <div class="max-h-[80px] overflow-y-auto text-center">
                                                @forelse ($nurses as $nurse)
                                                    <div class="flex justify-between mt-3 px-3">
                                                        <div class="text-center">
                                                            {{ $nurse?->nurse_first_name }}
                                                            {{ $nurse?->nurse_last_name }}
                                                        </div>
                                                        <button wire:click="removeNurse({{ $nurse->id }})"
                                                                class="bg-red-500 px-2 fs-6 text-white rounded cursor-pointer">
                                                            Remove
                                                        </button>
                                                
                                                    </div>
                                        
                                                @empty
                                                    <span class="text-red-400">No Nurse Assigned</span>
                                                @endforelse
 
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <x-action-message on="nurse-added">
                                        {{ __('Nurse added.') }}
                                    </x-action-message>
                                    <div x-on:click="$dispatch('set-group-id', {id: {{ $group->id}} })" class="form-input mt-20 text-center" data-bs-toggle="modal" data-bs-target="#assignNursesModal">
                                        <x-primary-button class="uppercase">
                                            {{ __('Add Nurse') }}
                                        </x-primary-button>
                                    </div>
                                                                
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>

    

    <x-slot:button>
        {{-- <div class="flex items-center justify-center w-full gap-4"> --}}
            <button data-toggle="modal" data-target="#newAddressModal" class="block mx-auto uppercase btn btn-icon btn-icon_large btn_primary">
                <span class="la la-plus"></span>
            </button>
        {{-- </div> --}}
    </x-slot:button>
</div>

