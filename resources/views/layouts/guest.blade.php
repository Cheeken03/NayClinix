@include('partials._header', ['title' => $title ?? ''])
@include('partials._navigation', ['type' => 'top-only'])
<body>
    <!-- Workspace -->
    <main class="workspace @hasSection('sidebar') workspace_with-sidebar @endif {{ $workspaceClasses ?? '' }}">
        @yield('workspace')

        {{ $slot }}
        
    </main>

   

    <!-- Scripts -->
</body>

</html>

