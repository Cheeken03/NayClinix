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
    <div class="max-h-[250px]"
        x-on:showGroup.window="$wire.$refresh(); group = $event.detail.group"
        x-on:group-updated.window="$wire.$refresh();"
        x-on:nurse-removed.window="$wire.$refresh();"
        
        >
        <div class="w-60 px-3">
            <x-action-message on="group-updated" class="mb-2 px-3 bg-green-200 rounded-md mt-3 py-3">
                {{ __('Updated.') }}
            </x-action-message>

            <x-action-message on="nurse-removed" class="mb-2 px-3 bg-green-200 rounded-md mt-3 py-3">
                {{ __('Nurse removed.') }}
            </x-action-message>
        </div>

        @if($group)
            <div class="accordion rounded-xl px-5 py-5 flex flex-col gap-3" wire:key="group-{{ $group->id }}">
                <div class="flex">

                    <div id="accordion-{{ $group->id }}" class="flex" wire:ignore.self>
                        <div class="flex gap-5">
                            <x-input-edit title="group_name" value="{{ $group?->group_name }}" model="group" id="{{ $group->id }}" />
                        </div>
                    </div> 
                   
                    <div class="">
                        <h5 class="text-center">Nurses</h5>
                        <div class="max-h-[80px] overflow-y-auto">
                            @forelse ($nurses as $nurse)
                                <div class="flex mb-5 justify-between">
                                    <div class="text-center px-5">
                                        {{ $nurse?->nurse_first_name }}
                                        {{ $nurse?->nurse_last_name }}
                                    </div>
                                    <button wire:click="removeNurse({{ $nurse->id }})"
                                            class="bg-red-500 px-5 text-xs text-white rounded-md cursor-pointer">
                                        Remove
                                    </button>
                            
                                </div>
                            
                            @empty
                                <span class="text-gray-400">No nurses assigned to this group</span>
                            @endforelse
                        </div>
                    </div>

                   
                         
                </div>

                <div class="text-center">
                    <button
                        class="bg-blue-500 px-3 py-3 text-white rounded-md cursor-pointer">
                        Asign a Nurse
                    </button>
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

