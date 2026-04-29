<?php

use App\Models\Group;
use Livewire\Volt\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination, WithoutUrlPagination; 
    public ?Group $group = null;


    public function with()
    {
        return [
            'groups' => Group::paginate(4),
            // this will get all nurses with a group and would solve the N+1 problem
            $groups = Group::with('nurses')->get(),
        ];
    }
   

    public function deleteGroup($id)
    {
        $group = Group::find($id);
        $group->delete();
            
        $this->dispatch('group-deleted');
    }


    
}; ?>

<div>
    <div class=""
        x-on:group-added.window="$wire.$refresh(); $el.scrollTop = 0"
        x-on:group-updated.window="$wire.$refresh(); $el.scrollTop = 0"
        x-on:group-deleted.window="$wire.$refresh(); $el.scrollTop = 0"
        x-on:nurse-removed.window="$wire.$refresh();"
        x-on:nurse-asigned.window="$wire.$refresh();"
        >
      
        <x-action-message on="group-updated" class="px-3 bg-green-200 rounded-md ">
            {{ __('Updated.') }}
        </x-action-message>
        <x-action-message on="group-deleted" class="px-5 w-80 bg-green-200 h-10 rounded-md">
            {{ __('Group deleted sucessfully.') }}
        </x-action-message>
   
        <!-- Accordion -->
       






        <div class="flex row">
        
            @forelse (Auth::user()->groups()->latest()->paginate(4) as $group)

                <div wire:key="group-{{ $group->id }}" class="col-lg-3 mb-4 hover:drop-shadow-xl/25 fill-white hover:border-secondary transition duration-700 ease-in-out cursor-pointer" 
                    data-bs-toggle="modal" data-bs-target="#groupDetailsModal">

                    <div class="bg-white border single-mini-card mini-card-style-one" wire:click="$dispatch('showGroup', { id: '{{ $group->id }}' } ) " wire:ignore.self>
                        <div class="">
                            <div class="text-center mt-3 flex flex-col gap-2 mb-3">
                                <div class="justify-center gap-2 font-bold">
                                    <div class="d-flex justify-center gap-2">
                                        <div class="text-sm-400 text-lg">{{ $group->group_name }}</div>
                                        <div class="text-gray-400">group</div>
                                    </div>
                                    <div class="text-sky-400 text-lg">{{ $group->nurses->count() }} <small class="text-gray-400">Nurses</small> </div>
                                </div>
                            </div>
                        </div>
                        



                        
                    </div>
                </div>
               
            @empty
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <img src="{{ Vite::asset('resources/images/emptyrecord.png') }}" class="img-fluid mb-3" style="max-width: 150px;"xml_error_string>
                        <p class="text-uppercase text-danger fw-bold">No Record Found</p>
                    </div>
                </div>

            @endforelse


        </div>

        <div class="">
            {{ $groups->links() }}
        </div>
        
       

    </div>

    

</div>

