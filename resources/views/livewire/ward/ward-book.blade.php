<?php

use App\Models\Ward;
use Livewire\Volt\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;


new class extends Component {
    use WithPagination, WithoutUrlPagination; 
    public ?Ward $ward = null;

    public function with()
    {
        return [
            'wards' => Ward::paginate(4),
            // this will get all groups with a ward and would solve the N+1 problem
            $wards = Ward::with('groups')->get(),
        ];
    }

    public function deleteWard($id)
    {
        $ward = Ward::find($id);
        $ward->delete();
            
        $this->dispatch('ward-deleted');
    }


}; ?>


<div>
    <div class=""
        x-on:ward-added.window="$wire.$refresh(); $el.scrollTop = 0"
        x-on:ward-updated.window="$wire.$refresh(); $el.scrollTop = 0"
        x-on:ward-deleted.window="$wire.$refresh(); $el.scrollTop = 0"
        x-on:group-removed.window="$wire.$refresh();"
        x-on:group-asigned.window="$wire.$refresh();"
        >
      
        <x-action-message on="ward-updated" class="px-3 bg-green-200 rounded-md ">
            {{ __('Updated.') }}
        </x-action-message>
        <x-action-message on="ward-deleted" class="px-5 w-80 bg-green-200 h-10 rounded-md">
            {{ __('Ward deleted sucessfully.') }}
        </x-action-message>
   
        <!-- Accordion -->
       






        <div class="flex row">
        
            @forelse (Auth::user()->wards()->latest()->paginate(4) as $ward)

                <div wire:key="ward-{{ $ward->id }}" class="col-lg-3 mb-4 hover:drop-shadow-xl/25 fill-white hover:border-secondary transition duration-700 ease-in-out cursor-pointer" 
                    data-bs-toggle="modal" data-bs-target="#wardDetailsModal">

                    <div class="bg-white border single-mini-card mini-card-style-one" wire:click="$dispatch('showWard', { id: '{{ $ward->id }}' } ) " wire:ignore.self>
                        <div class="">
                            <div class="text-center mt-3 flex flex-col gap-2 mb-3">
                                <div class="justify-center gap-2 font-bold">
                                    <div class="d-flex justify-center gap-2">
                                        <div class="text-sm-400 text-lg">{{ $ward->ward_type }}</div>
                                        <div class="text-gray-400">ward</div>
                                    </div>
                                    <div class="text-sky-400 text-lg">{{ $ward->groups->count() }} <small class="text-gray-400">Groups</small> </div>
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
            {{ $wards->links() }}
        </div>
        
       

    </div>

    

</div>
