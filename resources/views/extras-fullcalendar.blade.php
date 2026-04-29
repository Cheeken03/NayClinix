@include('partials._header', ['title' => 'FullCalendar - Extras - UI'])

<body>

    @include('partials._navigation')

    <!-- Workspace -->
    <main class="workspace">

        <!-- Breadcrumb -->
        <section class="breadcrumb">
            <h1>FullCalendar</h1>
            <ul>
                <li><a href="#no-link">UI</a></li>
                <li class="divider la la-arrow-right"></li>
                <li><a href="#no-link">Extras</a></li>
                <li class="divider la la-arrow-right"></li>
                <li>FullCalendar</li>
            </ul>
        </section>

        <div class="card p-5">
            <div id="calendar"></div>
        </div>

        @include('partials._footer')

    </main>

    <!-- Scripts -->
    <script src="{{ asset('build/js/index.global.min.js') }}"></script>
    <!-- <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script> -->
    <script src="{{ asset('build/js/vendor.js') }}"></script>
    <script src="{{ asset('build/js/script.js') }}"></script>

</body>

</html>