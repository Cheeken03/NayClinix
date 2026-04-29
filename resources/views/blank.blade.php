@include('partials._header', ['title' => 'Blank Page'])

<body>

    @include('partials._navigation')

    <!-- Workspace -->
    <main class="workspace">

        <!-- Breadcrumb -->
        <section class="breadcrumb">
            <h1>Blank Page</h1>
            <ul>
                <li><a href="#no-link">Pages</a></li>
                <li class="divider la la-arrow-right"></li>
                <li>Blank Page</li>
            </ul>
        </section>

        @include('partials._footer')

    </main>

    <!-- Scripts -->
    <script src="{{ asset('build/js/vendor.js') }}"></script>
    <script src="{{ asset('build/js/script.js') }}"></script>

</body>

</html>