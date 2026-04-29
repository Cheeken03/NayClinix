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




<section class="max-h-[300px] overflow-y-auto"
    x-on:showNurse.window="$wire.$refresh(); nurse = $event.detail.nurse"
    x-on:nurse-updated.window="$wire.$refresh();">

    <div class="w-60 px-3">
        <x-action-message on="nurse-updated" class="mb-2 px-3 bg-green-200 rounded-md mt-3 py-3">
            {{ __('Updated.') }}
        </x-action-message>
    </div>
   
    @if($nurse)
        <div class="container" wire:key="nurse-{{ $nurse->id }}">
            <div class="row justify-content-center" id="container-{{ $nurse->id }}" wire:ignore.self>
                <div class="col-lg-12">
                    <div class="signin-three">
                        <div class="py-3 signin-form form-style-four light-rounded-buttons">
                            <!-- <div class="signin-text text-center">
                                <p class="text">Update Nurse</p>
                            </div>   -->
                          
                            <div>
                                <div class="col-lg">
                                    <div class="form-input">
                                        <div class="input-items default">
                                            <x-input-edit title="nurse_first_name" value="{{ $nurse?->nurse_first_name }}" model="nurse" id="{{ $nurse->id }}" />
                                        </div>
                                
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="form-input mt-20">
                                        <div class="input-items default">
                                            <x-input-edit title="nurse_last_name" value="{{ $nurse?->nurse_last_name }}" model="nurse" id="{{ $nurse->id }}" />
                                        </div>
                                
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="form-input mt-20">
                                        <div class="input-items default">
                                            <x-input-edit title="nurse_email" value="{{ $nurse?->nurse_email }}" model="nurse" id="{{ $nurse->id }}" />
                                        </div>
                                
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="form-input mt-20">
                                        <div class="input-items default">
                                            <x-input-edit title="nurse_age" value="{{ $nurse?->nurse_age }}" model="nurse" id="{{ $nurse->id }}" />
                                
                                        </div>
                                
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="form-input mt-20">
                                        <div class="input-items default">
                                            <x-input-edit title="nurse_licence_id" value="{{ $nurse?->nurse_licence_id }}" model="nurse" id="{{ $nurse->id }}" />
                                    
                                        </div>
                                        <x-input-error class="mt-2" :messages="$errors->get('nurse_licence_id')" />
                                
                                    </div>
                                </div>
                                <div class="pr-40 pl-40">
                                    <!-- <x-input-label for="nurse_image" :value="__('Image')" /> -->
                                    <div class="p-1 mt-2 rounded-full object-cover">
                                        <x-filepond::upload
                                        wire:model="nurse_image"
                                        :allowImageTransform="false"
                                        :allowRemove="true"
                                        :allowReplace="true"
                                        max-file-size="5MB"
                                        :accepted-file-types="['image/png', 'image/jpeg', 'image/jpg', 'image/webp', 'image/gif']"
                                        placeholder="Drag & Drop your product image or <span class='filepond--label-action'> Browse</span>" />
                                    </div>
                                    <x-input-error class="mt-2" :messages="$errors->first('nurse_image')" />
                                </div>
                                
                                
                                <x-action-message on="nurse-added">
                                    {{ __('Nurse added.') }}
                                </x-action-message>
                                <div class="form-input mt-20 text-center">
                                    <x-primary-button class="uppercase">
                                        {{ __('save') }}
                                    </x-primary-button>
                                </div>
                                                            
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    @endif
  
</section>

