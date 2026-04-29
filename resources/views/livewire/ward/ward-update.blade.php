<?php

use App\Models\Group;
use App\Models\Ward;
use Livewire\Attributes\On;
use Livewire\Volt\Component;
use Illuminate\Database\Eloquent\Collection;


new class extends Component {
    public ?Ward $ward = null;
    // multiple groups (collection)
    public Collection $groups;


    public function mount()
    {
        $this->groups = new Collection();
    }

    #[On('showWard')]
    public function wardShow($id)
    {
        // this will find the ward id
        $this->ward = Ward::with('groups')->findOrFail($id);
        // this would return a Collection
        $this->groups = $this->ward->groups ?? new Collection();
     
        $this->dispatch('ward-show');
    }

    // public function rules(): array
    // {
    //     return [
    //        'ward_type' => ['required', Rule::in(array_keys(variables()['ward_types']))],
    //         'ward_gender'   => ['required'],
    //         'selected'     => ['required', 'array'],
    //         'selected.*'   => ['integer', 'exists:groups,id'],
    //     ];
    // }


    public function saveInput($title, $model, $id, $value)
    {
       
        $ward = Ward::find($id);
        $ward->{$title} = $value;
        $ward->save();
        
        $this->dispatch('ward-updated');
    }

    public function removeGroup($groupId)
    {
        // this will find the group id
        $group = Group::findOrFail($groupId);
        // this will set the ward_id to null
        $group->ward_id = null;
        $group->save();
     
        $this->dispatch('group-removed');
        $this->wardShow($this->ward->id);
    }



}; ?>

<div>
    <div class="max-h-[400px] overflow-y-auto"
        x-on:showWard.window="$wire.$refresh(); group = $event.detail.ward"
        x-on:ward-updated.window="$wire.$refresh();"
        x-on:group-removed.window="$wire.$refresh();"
        
        >
        <div class="text-green-400">
            <x-action-message on="ward-updated" class="mb-2 px-3 bg-green-200 rounded-md mt-3 py-3">
                {{ __('Updated.') }}
            </x-action-message>

            <x-action-message on="group-removed" class="mb-2 px-3 bg-green-200 rounded-md mt-3 py-3">
                {{ __('Group removed.') }}
            </x-action-message>
        </div>

        @if($ward)
           
            <div class="container" wire:key="ward-{{ $ward->id }}">
                <div class="row justify-content-center" id="container-{{ $ward->id }}" wire:ignore.self>
                    <div class="col-lg-12">
                        <div class="signin-three">
                            <div class="py-3 signin-form form-style-four light-rounded-buttons">
                              
                            
                                <div>
                                    <div class="col-lg">
                                        <div class="form-input mt-20">
                                            <div class="input-items default">
                                                <x-input-edit title="ward_type" value="{{ $ward?->ward_type }}" model="ward_gender" id="{{ $ward->id }}" />
                                            </div>
                                            <div class="input-items default">
                                                <x-input-edit title="ward_gender" value="{{ $ward?->ward_gender }}" model="ward_gender" id="{{ $ward->id }}" />
                                            </div>
                                    
                                        </div>

                                        <div class="mt-3">
                                            <h5 class="text-center">Group</h5>
                                            <div class="max-h-[80px] overflow-y-auto text-center">
                                                @forelse ($groups as $group)
                                                    <div class="flex justify-between mt-3 px-3">
                                                        <div class="text-center">
                                                            {{ $group?->group_name }}
                                                           
                                                        </div>
                                                        <button wire:click="removeGroup({{ $group->id }})"
                                                                class="bg-red-500 px-2 fs-6 text-white rounded cursor-pointer">
                                                            Remove
                                                        </button>
                                                
                                                    </div>
                                        
                                                @empty
                                                    <span class="text-red-400">No Group Assigned</span>
                                                @endforelse
 
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <x-action-message on="ward-added">
                                        {{ __('Ward added.') }}
                                    </x-action-message>
                                    <div x-on:click="$dispatch('set-ward-id', {id: {{ $ward->id}} })" class="form-input mt-20 text-center" data-bs-toggle="modal" data-bs-target="#assignGroupsModal">
                                        <x-primary-button class="uppercase">
                                            {{ __('Add Group') }}
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
