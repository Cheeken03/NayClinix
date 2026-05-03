<?php

use App\Models\Group;
use App\Models\Ward;
// use Livewire\Attributes\On;
use Livewire\Volt\Component;
// use Illuminate\Database\Eloquent\Collection;


new class extends Component {
    public ?Group $group = null;
    public $ward;



    public function with()
    {
        return [
            // this will get all groups without a ward and would solve the N+1 problem
            'groups' => Group::whereNull('ward_id')->get(),
            
        ];
    }


    public function setWard($wardId)
    {
        $this->ward = Ward::findOrFail($wardId);
        
    }


    public function asignGroup($groupId)
    {
        // this will find the group id
        $group = Group::findOrFail($groupId);
        // this will set the ward group to null
        $group->ward_id = $this->ward->id;
        $group->save();
     
        $this->dispatch('group-asigned');
        // $this->groupShow($this->group->id);
    }

}; ?>

<div x-on:group-removed.window="$wire.$refresh(); $el.scrollTop = 0"
    x-on:set-ward-id.window="$wire.setWard($event.detail.id)"
    x-on:group-asigned.window="$wire.$refresh();">

    <x-action-message on="group-asigned" class="px-3 bg-green-200 rounded-md ">
        {{ __('Group succesfully asigned.') }}
    </x-action-message>

    <div class="mt-3">
        <h5 class="text-center text-secondary">Available Groups</h5>
        <div class="max-h-[80px] overflow-y-auto text-center">
            @forelse ($groups as $group)
                <div class="flex justify-between mt-3 px-3">
                    <div class="text-center">
                        {{ $group?->group_name }}
                    </div>
                    <button wire:click="asignGroup({{ $group->id }})" 
                        class="bg-sky-900 px-2 text-white fs-6 rounded cursor-pointer">
                        Assign
                    </button>

                </div>
    
            @empty
                <span class="text-red-500">No Availabe Group</span>
            @endforelse

        </div>  
    </div>
</div>