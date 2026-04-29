@include('partials._header', ['title' => $title ?? '', 'withFilePond' => $withFilePond ?? null])

<body x-data="{ verified: '{{ Auth::user()?->email_verified_at }}' }" x-on:profile-updated.window="verified = event.detail.verified"
    x-on:nurse-updated.window="$wire.$refresh(); $el.scrollTop = 0">

   @include('partials._navigation', ['type' => 'top-only'])
   @filepondScripts

    <!-- Workspace -->
    <main class="workspace @hasSection('sidebar') workspace_with-sidebar @endif {{ $workspaceClasses ?? '' }}">

        @yield('workspace')
        @yield('services')

       

    </main>


    <!-- Scripts -->

    @yield('scripts')

    {{-- @include('partials._allscripts') --}}

</body>

</html>
