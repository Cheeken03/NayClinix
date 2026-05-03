@include('partials._header', ['title' => $title ?? '', 'withFilePond' => $withFilePond ?? null])

<body class="" x-data="{ verified: '{{ Auth::user()?->email_verified_at }}' }" x-on:profile-updated.window="verified = event.detail.verified">

   @include('partials._navigation', ['type' => 'top-only'])
   @filepondScripts

    <!-- Workspace -->
    <main class=" workspace @hasSection('sidebar') workspace_with-sidebar @endif {{ $workspaceClasses ?? '' }}">

        @yield('workspace')

        @if(!isset($footer) or $footer)
            @include('partials._footer')
        @endif

    </main>


    <!-- Scripts -->

    @yield('scripts')

    {{-- @include('partials._allscripts') --}}

</body>

</html>
