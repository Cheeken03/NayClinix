<!-- Top Bar -->
<header class="flex justify-between bg-blue-800 gap-60 h-20">
    
       
    @if(!isset($type) || $type != 'top-only')
        <!-- Menu Toggler -->
        <button class="menu-toggler la la-bars" data-toggle="menu"></button>
    @endif
    <!-- Brand -->
    <span class="flex items-center gap-2 brand">
        <img src="{{ Vite::asset('resources/images/rockspot-logo.jpg') }}" class="rounded-full w-14" alt="">
        <span class="hidden md:inline text-white text-4xl">NayClinic</span>
    </span>

    <livewire:partials.navtop>
</header>


