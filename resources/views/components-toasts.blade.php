@extends('layouts.master', ['title' => 'Toasts - Components - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Toasts</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Components</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Toasts</li>
        </ul>
    </section>

    <div>
        <button class="btn btn_primary uppercase" data-toggle="toast" data-title="Toast Title"
            data-content="See? Just like this." data-time="just now" data-dismiss="5000">Show Toast</button>
    </div>

    <!-- Toasts -->
    <div id="toasts-container"
        class="toasts-container overflow-y-scroll top-auto lg:top-0 bottom-0 right-0 left-0 lg:ltr:left-auto lg:rtl:right-auto">
        <div class="toast mb-4">
            <div class="toast-header">
                <h5>Toast Title</h5>
                <small>just now</small>
                <button class="close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                See? Just like this.
            </div>
        </div>
        <div class="toast mb-4">
            <div class="toast-header">
                <h5>Toast Title</h5>
                <small>2 seconds ago</small>
                <button class="close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                Heads up, toast will stack automatically.
            </div>
        </div>
    </div>

@endsection
