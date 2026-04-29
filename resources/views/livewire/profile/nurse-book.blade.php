<?php

use App\Models\Nurse;
use Livewire\Attributes\On;
use Livewire\Volt\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;


new class extends Component {
    use WithPagination, WithoutUrlPagination; 
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
        
           
        <!-- Accordion -->
        <div class="flex row">
        
            @forelse (Auth::user()->nurses()->latest()->paginate(4) as $nurse)

                <div class="col-lg-3 mb-4 hover:drop-shadow-xl/25 fill-white hover:border-secondary transition duration-700 ease-in-out cursor-pointer"  wire:key="nurse-{{ $nurse->id }}" 
                    data-bs-toggle="modal" data-bs-target="#nurseDetailsModal">

                    <div class="bg-white border single-mini-card mini-card-style-one" wire:click="$dispatch('showNurse', { id: '{{ $nurse->id }}' } ) " wire:ignore.self>
                        <div class="flex justify-center mt-4"><img src="{{ asset('storage/'.$nurse->nurse_image) }}" alt="" class="w-20 h-20 rounded-full object-cover"></div>
                        <div class="">
                            <div class="text-center mt-3 flex flex-col gap-2 mb-3">
                                <div class="flex justify-center gap-2 font-bold">
                                    <div>{{ $nurse->nurse_first_name }}</div>
                                    <div>{{ $nurse->nurse_last_name }}</div>
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
