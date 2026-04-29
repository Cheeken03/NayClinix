<?php

use App\Models\Nurse;
use Livewire\Attributes\On;
use Livewire\Volt\Component;


new class extends Component {
    //
    public ?Nurse $nurse = null;
    public $nurse_image = null;
  

    public function with()
    {
        return [
            'nurses' => Nurse::paginate(4),
            // this will get all nurses with a group and would solve the N+1 problem
            $nurses = Nurse::with('group')->get(),
        ];
    }



    public function deleteNurse($id)
    {
        $nurse = Nurse::find($id);
        // Delete image from storage if it exists
        // if ($nurse->nurse_image && Storage::disk('public')->exists($nurse->nurse_image)) {
        //     Storage::disk('public')->delete($nurse->nurse_image);
        // }
        $nurse->delete();
            
        $this->dispatch('nurse-deleted');
    }
}; ?>

<div>
    <div class=""
        x-on:nurse-added.window="$wire.$refresh(); $el.scrollTop = 0"
        x-on:nurse-updated.window="$wire.$refresh(); $el.scrollTop = 0"
        x-on:nurse-deleted.window="$wire.$refresh(); $el.scrollTop = 0"
        >
      
            <x-action-message on="nurse-updated" class="px-3 bg-green-200 rounded-md ">
                {{ __('Updated.') }}
            </x-action-message>
            <x-action-message on="nurse-deleted" class="px-5 w-80 bg-green-200 h-10 rounded-md">
                {{ __('Nurse deleted sucessfully.') }}
            </x-action-message>
   
        <!-- Accordion -->
        <div class="grid grid-cols-4 gap-4">
        
                
            @forelse (Auth::user()->nurses()->latest()->paginate(4) as $nurse)
                <div wire:key="nurse-{{ $nurse->id }}" class="w-auto m-5 border-2 border-blue-200 bg-white rounded-md text-center cursor-pointer hover:drop-shadow-xl/25 fill-white hover:border-purple-900 transition duration-700 ease-in-out">
                  
                    
                    <div class="absolute">
                        <span class="rounded-md" role="button"
                            wire:click="deleteNurse({{ $nurse->id }})" wire:confirm="Are you sure you want to delete this Nurse?">
                            <span class="la la-times la-1x text-red-500 cursor-pointer border rounded-md px-3 py-1 bg-red-300 hover:bg-red-900 transition duration-700 ease-in-out"></span>
                        </span>
                    </div>
                    
                    

                    <div class="px-5" wire:click="$dispatch('showNurse', { id: '{{ $nurse->id }}' } ) " wire:ignore.self>
                        
                        <div class="">
                            <div class="flex justify-center mt-5"><img src="{{ asset('storage/'.$nurse->nurse_image) }}" alt="" class="w-20 h-20 rounded-full object-cover"></div>
                            <div class="text-center mt-3 flex flex-col gap-2 mb-5">
                                <div class="flex justify-center gap-2 font-bold">
                                    <div>{{ $nurse->nurse_first_name }}</div>
                                    <div>{{ $nurse->nurse_last_name }}</div>
                                </div>
                                <div class="bg-purple-200 rounded-md py-1">{{ $nurse->group?->group_name ?? 'No Group' }}</div>
                            </div>
                        </div>
                    </div>


                    @unless($loop->last)
                        <!-- <hr> -->
                    @endunless
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

        
        <div class="px-5">
            {{ $nurses->links() }}
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
