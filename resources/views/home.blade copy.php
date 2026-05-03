@extends('layouts.master', ['title' => 'Welcome'])

<!-- Workspace -->
@section('workspace')

    <section class="mt-30">
        <div class="col-lg-12">
            <div class="tabs">
                <div class="single-tabs tebs-six">
                    <div class="row g-3">
                        <div class="d-none d-md-block col-lg-2 d-flex justify-content-between gap-10">
                            <div class="nav flex-column nav-pills gap-10 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="active fs-5 text-decoration-none" id="v-pills-six-one-tab" data-toggle="pill" href="#nurse" role="tab" aria-controls="v-pills-six-one" aria-selected="true"><i class="las la-user-nurse fs-4"></i></i>NURSE</a>
                                <a id="v-pills-six-two-tab" class="fs-5 text-decoration-none"  data-toggle="pill" href="#group" role="tab" aria-controls="v-pills-six-two" aria-selected="false"><i class="las la-users fs-4"></i>GROUP</a>
                                <a id="v-pills-six-three-tab" class="fs-5 text-decoration-none"  data-toggle="pill" href="#ward" role="tab" aria-controls="v-pills-six-three" aria-selected="false"><i class="las la-shield-alt fs-4"></i>WARD</a>
                                <a id="v-pills-six-four-tab" class="fs-5 text-decoration-none"  data-toggle="pill" href="#profile" role="tab" aria-controls="v-pills-six-four" aria-selected="false"><i class="las la-user-alt fs-4"></i>PROFILE</a>
                            </div>
                        </div>

                        <div class="tab-content col-lg-10" id="myTabContent">
                            <div class="tab-pane fade show active" id="nurse" role="tabpanel" aria-labelledby="v-pills-six-one-tab">
                                <div class="tabs">
                                    <div class="single-tabs tebs-four">
                                        <ul class="nav nav-justified flex-fill" id="myTab" role="tablist">
                                            <li class="nav-item fs-4">
                                                <a class="active fs-5 text-decoration-none" id="tab-three-one-tab" data-toggle="tab" href="#allNurses" role="tab" aria-controls="tab-three-one" aria-selected="true"><i class="las la-user-nurse fs-4"></i> All Nurses</a>
                                            </li>
                                            <li class="nav-item">
                                                <a id="tab-three-one-tab" class="fs-5 text-decoration-none" data-toggle="tab" href="#createNurse" role="tab" aria-controls="tab-three-two" aria-selected="false"><i class="las la-plus fs-4"></i> Create A Nurse</a>
                                            </li>
                                        </ul>
                                        <div class=" tab-content mt-20" id="myTabContent">
                                            <div class="tab-pane fade show active" id="allNurses" role="tabpanel" aria-labelledby="tab-three-one-tab">
                                                <!-- <div class="tab-text">
                                                    <p class="text">Raw denim you probably haven’t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. <br><br> Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                                </div> -->
                                                <div class="bg-[#eff6ff] py-3 px-3">
                                                    <livewire:nurse.nurse-book>
                                                </div>
                                                <x-modal action="nurse-details" title="Nurse Details">
                                                    <livewire:nurse.nurse_update-book>
                                                </x-modal>
                                            </div>
        
                                            <div class="tab-pane fade" id="createNurse" role="tabpanel" aria-labelledby="tab-three-two-tab">
        
                                                <div class="container light-rounded-buttons text-center">
                                                    <button type="button" class="main-btn light-rounded-three mt-40" data-bs-toggle="modal" data-bs-target="#nurseRegisterModal">
                                                        Add a New Nurse
                                                    </button>
                                                </div>
        
                                                <x-modal action="nurse-register" title="Add a New Nurse">
                                                    <livewire:nurse.nurse-form>
                                                </x-modal>
        
        
        
                                            </div>
        
                                        </div>
                                    </div> <!-- tebs one -->
                                </div>
                            </div>

                            <div class="tab-pane fade" id="group" role="tabpanel" aria-labelledby="v-pills-six-two-tab">
                                <div class="tabs">
                                    <div class="single-tabs tebs-four">
                                        <ul class="nav nav-justified flex-fill" id="myTab" role="tablist">
                                            <li class="nav-item fs-4">
                                                <a class="active fs-5 text-decoration-none" id="tab-three-one-tab" data-toggle="tab" href="#allGroups" role="tab" aria-controls="tab-three-one" aria-selected="true"><i class="las la-users fs-4"></i> All Groups</a>
                                            </li>
                                            <li class="nav-item">
                                                <a id="tab-three-one-tab" class="fs-5 text-decoration-none" data-toggle="tab" href="#createGroups" role="tab" aria-controls="tab-three-two" aria-selected="false"><i class="las la-plus fs-4"></i> Create A Group</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-20" id="myTabContent">
                                            <div class="tab-pane fade show active" id="allGroups" role="tabpanel" aria-labelledby="tab-three-one-tab">
                                                <!-- <div class="tab-text">
                                                    <p class="text">Raw denim you probably haven’t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. <br><br> Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                                </div> -->
                                                <div class="bg-[#eff6ff] py-3 px-3">
                                                    <livewire:group.group-book>
                                                </div>
                                                <x-modal action="group-details" title="group Details">
                                                    <livewire:group.group-update>
                                                </x-modal>
                                                <x-modal action="assign-nurses" title="Assign Nurse">
                                                    <livewire:group.group-assign_nurse>
                                                </x-modal>
                                            </div>
        
                                            <div class="tab-pane fade" id="createGroups" role="tabpanel" aria-labelledby="tab-three-two-tab">
                                                <div class="container light-rounded-buttons text-center">
                                                    <button type="button" class="main-btn light-rounded-three mt-40" data-bs-toggle="modal" data-bs-target="#groupCreateModal">
                                                        Add a New Group
                                                    </button>
                                                </div>
        
                                                <x-modal action="group-create" title="Add a New Group" class="w-[calc(50px)]">
                                                    <livewire:group.group-form>
                                                </x-modal>
                                            </div>
        
                                        </div>
                                    </div> <!-- tebs one -->
                                </div>
                            </div>

                            <div class="tab-pane fade" id="ward" role="tabpanel" aria-labelledby="v-pills-six-three-tab">
                                <div class="tab-text">
                                    <div class="single-tabs tebs-four">
                                        <ul class="nav nav-justified flex-fill" id="myTab" role="tablist">
                                            <li class="nav-item fs-4">
                                                <a class="active fs-5 text-decoration-none" id="tab-three-one-tab" data-toggle="tab" href="#allWards" role="tab" aria-controls="tab-three-one" aria-selected="true"><i class="las la-shield-alt fs-4"></i>All Wards</a>
                                            </li>
                                            <li class="nav-item">
                                                 <a id="tab-three-one-tab" class="fs-5 text-decoration-none" data-toggle="tab" href="#createWard" role="tab" aria-controls="tab-three-two" aria-selected="false"><i class="las la-shield-alt fs-4"></i>Create A Ward</a>
                                            </li>
                                        </ul>
                                        <div class=" tab-content mt-20" id="myTabContent">
                                            <div class="tab-pane fade show active" id="allWards" role="tabpanel" aria-labelledby="tab-three-one-tab">
                                                <div class="bg-[#eff6ff] py-3 px-3">
                                                    <livewire:ward.ward-book>
                                                </div>
                                                <x-modal action="ward-details" title="ward Details">
                                                    <livewire:ward.ward-update>
                                                </x-modal>                                            
                                                <x-modal action="assignGroups" title="Asign Group">
                                                    <livewire:ward.ward-assign-nurse>
                                                </x-modal>                                            
                                            </div>
        
                                            <div class="tab-pane fade" id="createWard" role="tabpanel" aria-labelledby="tab-three-two-tab">
                                                <div class="container light-rounded-buttons text-center">
                                                    <button type="button" class="main-btn light-rounded-three mt-40" data-bs-toggle="modal" data-bs-target="#wardCreateModal">
                                                        Add a new ward
                                                    </button>
                                                </div>

                                                <x-modal action="ward-create" title="Add a New Ward" class="">
                                                    <livewire:ward.ward-form>
                                                </x-modal>     

                                                    
                                            </div>        
                                        </div>
                                    </div> 
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="v-pills-six-four-tab">
                                <div class="tab-text">
                                    <div class="single-tabs tebs-four">
                                        <ul class="nav nav-justified flex-fill" id="myTab" role="tablist">
                                            <li class="nav-item fs-4">
                                                <a class="active fs-5 text-decoration-none" id="tab-three-one-tab" data-toggle="tab" href="#myProfile" role="tab" aria-controls="tab-three-one" aria-selected="true"><i class="las la-user-alt fs-4"></i>Profile Update</a>
                                            </li>
                                            <li class="nav-item">
                                                 <a id="tab-three-one-tab" class="fs-5 text-decoration-none" data-toggle="tab" href="#pwdReset" role="tab" aria-controls="tab-three-two" aria-selected="false"><i class="las la-key fs-4"></i>Password Reset</a>
                                            </li>
                                        </ul>
                                        <div class=" tab-content mt-20" id="myTabContent">
                                            <div class="tab-pane fade show active" id="myProfile" role="tabpanel" aria-labelledby="tab-three-one-tab">
                                                <div class="container light-rounded-buttons text-center">
                                                    <button type="button" class="main-btn light-rounded-three mt-40" data-bs-toggle="modal" data-bs-target="#myProfileModal">
                                                        Update Profile
                                                    </button>
                                                </div>
                                               
                                                <x-modal action="my-profile" title="My Profile">
                                                    <livewire:profile.update-profile-information-form>
                                                </x-modal>
                                               
                                            </div>
        
                                            <div class="tab-pane fade" id="pwdReset" role="tabpanel" aria-labelledby="tab-three-two-tab">
        
                                                <div class="container light-rounded-buttons text-center">
                                                    <button type="button" class="main-btn light-rounded-three mt-40" data-bs-toggle="modal" data-bs-target="#updatePasswordModal">
                                                        Reset Password
                                                    </button>
                                                </div>
        
                                                <x-modal action="update-password" title="Update Password">
                                                    <livewire:profile.update-password-form>
                                                </x-modal>       
                                            </div>
        
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
        
        
                    </div> <!-- row -->
                </div> <!-- tebs one -->
            </div>
        </div>
    </section>



  <x-footer></x-footer>


@endsection



