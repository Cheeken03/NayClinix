<?php

use App\Models\Group;
use Livewire\Volt\Component;

new class extends Component {
    //
    public ?Group $group = null;


    // public function with()
    // {
    //     return [
    //         // 'groups' => Group::paginate(4),
    //         // this will get all nurses with a group and would solve the N+1 problem
    //         $this->group = Group::withcount('nurses')->findOrFail($id),
    //     ];
    // }

    public function deleteGroup($id)
    {
        $group = Group::find($id);
        $group->delete();
            
        $this->dispatch('group-deleted');
    }


    
}; ?>

<div>
    <div class="overflow-y-auto h-50"
        x-on:group-added.window="$wire.$refresh(); $el.scrollTop = 0"
        x-on:group-updated.window="$wire.$refresh(); $el.scrollTop = 0"
        x-on:group-deleted.window="$wire.$refresh(); $el.scrollTop = 0"
        x-on:nurse-removed.window="$wire.$refresh();"
        >
      
            <x-action-message on="group-updated" class="px-3 bg-green-200 rounded-md ">
                {{ __('Updated.') }}
            </x-action-message>
            <x-action-message on="group-deleted" class="px-5 w-80 bg-green-200 h-10 rounded-md">
                {{ __('Group deleted sucessfully.') }}
            </x-action-message>
   
        <!-- Accordion -->
        <div class="grid grid-cols-4 gap-4">

                
            @forelse (Auth::user()->groups()->latest()->get() as $group)
                <div wire:key="group-{{ $group->id }}" class="w-40 mt-5 border-2 border-blue-200 bg-white rounded-md text-center cursor-pointer hover:drop-shadow-xl/25 fill-white hover:border-purple-900 transition duration-700 ease-in-out">
                  
                    <!--                     
                    <div class="absolute">
                        <span class="rounded-md" role="button"
                            wire:click="deleteGroup({{ $group->id }})" wire:confirm="Are you sure you want to delete this Group?">
                            <span class="la la-times la-1x text-red-500 cursor-pointer border rounded-md px-3 py-1 bg-red-300 hover:bg-red-900 transition duration-700 ease-in-out"></span>
                        </span>
                    </div> -->
                    
                    
                    <div class="" wire:click="$dispatch('showGroup', { id: '{{ $group->id }}' } ) " wire:ignore.self>                   
                        <div class="">
                            <div class="text-center mt-3 flex flex-col gap-2 mb-5">
                                <div class="flex flex-col justify-center gap-2 font-bold">
                                    <div>{{ $group->group_name }}</div>
                                    <div class="text-green-400 text-lg"><small class="text-gray-400">Nurses</small> {{ $group->nurses->count() }}</div>
                                    
                                </div>

                                <!-- <div class="bg-purple-200 rounded-md py-1">{{ $nurse->group?->group_name ?? 'No Group' }}</div> -->
                               
                            </div>
                        </div>
                    </div>

                    @unless($loop->last)
                        <!-- <hr> -->
                    @endunless
                </div>
               
            @empty
                <div class="">
                    <div class="px-80">
                        <img src="{{ Vite::asset('resources/images/emptyrecord.png') }}" class="w-30 h-30">
                        <p class="uppercase text-red-400">No Record Found</p>
                    </div>
                </div>
            @endforelse

        </div>

    </div>

    

    <x-slot:button>
        {{-- <div class="flex items-center justify-center w-full gap-4"> --}}
            <button data-toggle="modal" data-target="#newAddressModal" class="block mx-auto uppercase btn btn-icon btn-icon_large btn_primary">
                <span class="la la-plus"></span>
            </button>
        {{-- </div> --}}
    </x-slot:button>
</div>

