@include('partials._header', ['title' => $title ?? '', 'withFilePond' => $withFilePond ?? null])

<body class="d-flex flex-column min-vh-100" x-data="{ verified: '{{ Auth::user()?->email_verified_at }}' }" x-on:profile-updated.window="verified = event.detail.verified"
    x-on:nurse-updated.window="$wire.$refresh(); $el.scrollTop = 0">
    <div class="container-fluid">
        <div class="row">
           <div class=".col-lg-2">
                @include('partials._navigation', ['type' => 'top-only'])
                @filepondScripts
           </div>
        </div>
    </div>
  

    <!-- Workspace -->
    <main class="flex-grow-1 workspace @hasSection('sidebar') workspace_with-sidebar @endif {{ $workspaceClasses ?? '' }}">
        <div class="container-fluid">
            <div class="row">
                <div class=".col-lg-12">
                    @yield('workspace')
                    @yield('services')
                </div>
            </div>
        </div>
       

        

    </main>


    <x-footer></x-footer>

    <!-- Scripts -->

    @yield('scripts')

    {{-- @include('partials._allscripts') --}}

</body>

</html>
