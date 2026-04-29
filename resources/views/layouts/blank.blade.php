@include('partials._header', ['title' => $title ?? ''])

<body>


    @yield('workspace')

    <!-- Scripts -->
    
    @yield('scripts')


</body>

</html>
