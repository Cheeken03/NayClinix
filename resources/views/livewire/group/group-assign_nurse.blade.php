<?php

use App\Models\Group;
use App\Models\Nurse;
use Livewire\Attributes\On;
use Livewire\Volt\Component;
use Illuminate\Database\Eloquent\Collection;

new class extends Component {
    //
    public ?Nurse $nurse = null;
    public $group;
    // multiple nurses (collection):
    // public Collection $groups;


    public function with()
    {
        return [
            // this will get all nurses without a group and would solve the N+1 problem
            'nurses' => Nurse::whereNull('group_id')->get(),
            // 'group' => Group::get(),
        ];
    }

    public function setGroup($groupId)
    {
        $this->group = Group::findOrFail($groupId);
        
    }



    public function asignNurse($nurseId)
    {
        // this will find the nurse id
        $nurse = Nurse::findOrFail($nurseId);
        // this will set the nurse gorp to null
        $nurse->group_id = $this->group->id;
        $nurse->save();
     
        $this->dispatch('nurse-asigned');
        // $this->groupShow($this->group->id);
    }




}; ?>

<div x-on:nurse-removed.window="$wire.$refresh(); $el.scrollTop = 0"
    x-on:set-group-id.window="$wire.setGroup($event.detail.id)"
    x-on:nurse-asigned.window="$wire.$refresh();">

    <x-action-message on="nurse-asigned" class="px-3 bg-green-200 rounded-md ">
        {{ __('Nurse succesfully asigned.') }}
    </x-action-message>

    <div class="mt-3">
        <h5 class="text-center text-secondary">Available Nurses</h5>
        <div class="max-h-[80px] overflow-y-auto text-center">
            @forelse ($nurses as $nurse)
                <div class="flex justify-between mt-3 px-3">
                    <div class="text-center">
                        {{ $nurse?->nurse_first_name }}
                        {{ $nurse?->nurse_last_name }}
                    </div>
                    <button wire:click="asignNurse({{ $nurse->id }})" 
                        class="bg-sky-900 px-2 text-white fs-6 rounded cursor-pointer">
                        Assign
                    </button>

                </div>
    
            @empty
                <span class="text-red-500">No Availabe Nurse</span>
            @endforelse

        </div>  
    </div>
</div>
