<div class="container-fluid">
    @include('partials._header', ['title' => $title ?? ''])
    @include('partials._navigation', ['type' => 'top-only'])
</div>
<body class="d-flex flex-column min-vh-100">
    <!-- Workspace -->
    <main class="flex-grow-1 workspace @hasSection('sidebar') workspace_with-sidebar @endif {{ $workspaceClasses ?? '' }}">
        @yield('workspace')

        {{ $slot }}
        
    </main>

   
    <x-footer></x-footer> 
    <!-- Scripts -->
</body>

</html>

