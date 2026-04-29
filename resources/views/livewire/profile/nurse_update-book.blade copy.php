<?php

use App\Models\User;
use App\Models\Nurse;
use Livewire\Attributes\On;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Storage;
use Spatie\LivewireFilepond\WithFilePond;
use Livewire\WithPagination;

new class extends Component {
    use WithFilePond;
   
    //the nurse eloquent model can either hold a value or be null but set it to null by default
    public ?Nurse $nurse = null;
    // set the nurse image to null
    public $nurse_image = null;

    // this will listen for the dispatched event
    #[On('showNurse')]
    public function nurseShow($id)
    {
        // this will find the nurse id
        $this->nurse = Nurse::find($id);

        // this will get the nurse from the public storage 
        $this->nurse_image = 'storage/'. $this->nurse->nurse_image;

        $this->dispatch('nurse-show');
    }

   



    public function rules(): array
    {
        return [
            'nurse_image' => 'required|file|image|max:5000',
          
        ];
    }

    

    public function saveInput($title, $model, $id, $value)
    {
       
        $nurse = Nurse::find($id);
        $nurse->{$title} = $value;
        $nurse->save();

        // $modelItem = {Str::ucfirst($model)}::find($id);
        // $modelItem->{$title} = $value;
        // $modelItem->save();

        $this->dispatch('nurse-updated');
    }

    public function remove()
    {
        // if the nurse image is identical to the avatar/nurse_head.png return true
        if( $this->nurse->nurse_image == 'avatar/nurse_head.png'){
            return true;
        }else{
            // this will delete the nurse image from the public folder 
            Storage::disk('public')->delete( $this->nurse->nurse_image );
            // then this will set the nurse image to the nurse_head.png
            $this->nurse->nurse_image = 'avatar/nurse_head.png';
            // then this will save it and return true
            $this->nurse->save();
            return true;
            
        }
            
        // dd(Storage::path($this->nurse->nurse_image));
        // this will retuen a boolean response if the file was delete or not
        
    }



    public function validateUploadedFile()
    {
        try {
            $this->validateOnly('nurse_image');
            // this will store the image in the public/nurses path
            $imageName = $this->nurse_image->storePublicly(path: 'nurses', options: 'public');
            $this->nurse->nurse_image = $imageName;
            $this->nurse->save();

            return true;
            
        } catch (ValidationException $e) {
            $this->dispatch('validation-failed');
            throw $e;
            
        }

       
    }

    
}; ?>

<div>
    <div class="max-h-[145px] overflow-y-auto"
        x-on:showNurse.window="$wire.$refresh(); nurse = $event.detail.nurse"
        x-on:nurse-updated.window="$wire.$refresh();"
        
        >
        <div class="w-60 px-3">
            <x-action-message on="nurse-updated" class="mb-2 px-3 bg-green-200 rounded-md mt-3 py-3">
                {{ __('Updated.') }}
            </x-action-message>
        </div>
        <!-- Accordion -->

        @if($nurse)
            <div class="accordion rounded-xl mt-3 flex gap-5 px-5" wire:key="nurse-{{ $nurse->id }}">
                <div>
                                        
                    <div id="accordion-{{ $nurse->id }}" class="px-5 flex" wire:ignore.self>
                        <div class="">
                            
                            <div class="flex gap-5">
                                <x-input-edit title="nurse_first_name" value="{{ $nurse?->nurse_first_name }}" model="nurse" id="{{ $nurse->id }}" />
                                <hr>
                                
                                <x-input-edit title="nurse_last_name" value="{{ $nurse?->nurse_last_name }}" model="nurse" id="{{ $nurse->id }}" />
                                <hr>
                                
                                <x-input-edit title="nurse_email" value="{{ $nurse?->nurse_email }}" model="nurse" id="{{ $nurse->id }}" />
                                <hr>
                            </div>

                            <div class="flex gap-5">
                                <x-input-edit title="nurse_age" value="{{ $nurse?->nurse_age }}" model="nurse" id="{{ $nurse->id }}" />
                                <hr>
                                <x-input-edit title="nurse_licence_id" value="{{ $nurse?->nurse_licence_id }}" model="nurse" id="{{ $nurse->id }}" />
                                <hr>
                               

                                <div class="w-50 h-50 rounded-full object-cover">
                                    <x-filepond::upload
                                    wire:model="nurse_image"    
                                    :allowImageTransform="false"
                                    :allowRemove="true"
                                    :allowReplace="true"
                                    max-file-size="5MB"                                     
                                    :accepted-file-types="['image/png', 'image/jpeg', 'image/jpg', 'image/webp', 'image/gif']"
                                    placeholder="Drag & Drop your product image or <span class='filepond--label-action'> Browse</span>" />
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
