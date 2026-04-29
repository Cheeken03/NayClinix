@extends('layouts.master', ['title' => 'Popovers & Tooltips - Components - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Popovers & Tooltips</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Components</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Popovers & Tooltips</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-2 gap-5">
        <div class="flex flex-col gap-y-5">

            <!-- Popovers -->
            <div class="card p-5">
                <h3>Popovers</h3>
                <div class="mt-5">
                    <button class="btn btn_primary uppercase" data-toggle="popover"
                        data-popover-title="Popover Title"
                        data-popover-content="Here’s some amazing content. It’s very engaging. Right?"
                        data-tippy-placement="right">Toggle Popover</button>
                </div>
            </div>

            <!-- Tooltips -->
            <div class="card p-5">
                <h3>Tooltips</h3>
                <div class="mt-5">
                    <button class="btn btn_primary uppercase" data-toggle="tooltip"
                        data-tippy-content="Tooltip on the right" data-tippy-placement="right">Button</button>
                </div>
            </div>
        </div>
    </div>

@endsection
