@extends('layouts.master', ['title' => 'Welcome'])

<!-- Workspace -->
@section('workspace')

<!-- Breadcrumb -->
<div x-data>
    <div class="">
        <section class="rounded-md border-1 h-120 flex gap-10" x-data="{ 
            openTab: 1,
            activeClasses: 'bg-gray-500 text-white',
            inactiveClasses: 'bg-white'
            }">
        
            <div class="w-40 h-120 border-1 bg-blue-800 ">
                <div class="py-6 px-5 "  x-on:click="openTab = 1">
                    <div :class="openTab == 1 ? activeClasses : inactiveClasses"  class="cursor-pointer border-1 py-2 text-center mt-3 px-5 rounded-md hover:bg-gray-500 hover:text-white">
                        <span class="text-grey text-md">Nurse</span>
                    </div>
                </div>
                <div class="py-6 px-5" x-on:click="openTab = 2">
                    <div :class="openTab == 2 ? activeClasses : inactiveClasses" class="cursor-pointer border-1 py-2 text-center mt-3 px-5 rounded-md hover:bg-gray-500 hover:text-white">
                        <span class="text-grey py-4 text-md">Group</span>
                    </div>
                </div>
                <div class="py-6 px-5" x-on:click="openTab = 3">
                    <div :class="openTab == 3 ? activeClasses : inactiveClasses" class="cursor-pointer border-1 py-2 text-center mt-3 px-5 rounded-md hover:bg-gray-500 hover:text-white">
                        <span class="text-grey py-4 text-md">Ward</span>
                    </div>
                </div>
                <div class="py-6 px-5" x-on:click="openTab = 4">
                    <div :class="openTab == 4 ? activeClasses : inactiveClasses" class="cursor-pointer border-1 py-2 text-center mt-3 px-5 rounded-md hover:bg-gray-500 hover:text-white">
                        <span class="text-grey text-md">My Profile</span>
                    </div>
                </div>
            </div>

            <div class="" x-show="openTab == 1"  x-data="{ active: false}" x-cloak>
                <div class="absolute py-3">
                    <div class="flex cursor-pointer items-center gap-12">
                        <span x-on:click="active = false" x-bind:class="!active ? 'bg-blue-200' : 'bg-gray-200' " class="hover:bg-blue-200 rounded-md px-40">All Nurses</span>
                        <span  x-on:click="active = !false" x-bind:class="active ? 'bg-blue-200' : 'bg-gray-200' " class="hover:bg-blue-200 rounded-md px-40">Create New Nurse</span>
                    </div>
                    <div class="mt-3" x-show="!active">
                       <livewire:profile.nurse-book>
                    </div>
                    <div class="mt-3" x-show="active">
                       <livewire:profile.nurse-form>
                    </div>

                    <div class="bg-gray-100 mt-1 border border-2" x-show="!active">
                       <livewire:profile.nurse_update-book>
                    </div>
                </div>
            </div>
              
            <div class="h-120" x-show="openTab == 2"  x-data="{ active: false}" x-cloak>
                <div class="absolute py-3">
                    <div class="flex cursor-pointer items-center gap-10">
                        <span x-on:click="active = false" x-bind:class="!active ? 'bg-blue-200' : 'bg-gray-200' " class="hover:bg-blue-200 rounded-md px-40">All Groups</span>
                        <span  x-on:click="active = !false" x-bind:class="active ? 'bg-blue-200' : 'bg-gray-200' " class="hover:bg-blue-200 rounded-md px-40">Create A Group</span>
                    </div>
                    <div class="" x-show="!active">
                        <livewire:group.group-book>
                    </div>
                    <div class="" x-show="active">
                        <livewire:group.group-form>
                    </div>
                    <div class="bg-gray-100 border border-1" x-show="!active">
                        <livewire:group.group-update>
                    </div>
                   
                </div>
            </div>


            <div class="h-120" x-show="openTab == 4"  x-data="{ active: false}" x-cloak>
                <div class="absolute py-3">
                    <div class="flex cursor-pointer items-center gap-10">
                        <span x-on:click="active = false" x-bind:class="!active ? 'bg-blue-200' : 'bg-gray-200' " class="hover:bg-blue-200 rounded-md px-40">Update Profile</span>
                        <span  x-on:click="active = !false" x-bind:class="active ? 'bg-blue-200' : 'bg-gray-200' " class="hover:bg-blue-200 rounded-md px-40">Update Password</span>
                    </div>
                    <div class="" x-show="!active">
                        <livewire:profile.update-profile-information-form>
                    </div>
                    <div class="" x-show="active">
                        <livewire:profile.update-password-form>
                    </div>
                </div>
            </div>
                 <!-<div class="bg-[#eff6ff] py-3 px-3">
                        <livewire:ward.ward-book>
                    </div> -->
                
                  <!-- <x-modal action="create-ward" title="Create Ward">
                                                    <livewire:ward.create-ward-form>
                                                </x-modal> -->

           

        </section>
    <div>
</div>



@endsection
