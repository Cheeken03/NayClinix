@extends('layouts.master', ['title' => 'Layout - Form - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Layout</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Form</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Layout</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-3 gap-5">
        <div class="card p-5">
            <h3>Input Label Over</h3>
            <div class="relative mt-5">
                <label
                    class="label absolute block bg-input top-0 ltr:ml-3 rtl:mr-3 px-1 rounded font-heading uppercase"
                    for="input-1">Label</label>
                <input id="input-1" class="form-control mt-2 pt-5" placeholder="Enter text here">
            </div>
        </div>
        <div class="card p-5">
            <h3>Input Label Boxed Over</h3>
            <div class="relative mt-5">
                <label
                    class="label absolute block bg-input border border-border rounded top-0 ltr:ml-4 rtl:mr-4 px-2 font-heading"
                    for="input-2">Label</label>
                <input id="input-2" class="form-control mt-2 pt-5" placeholder="Enter text here">
            </div>
        </div>
        <div class="card p-5">
            <h3>Input Label In</h3>
            <div class="relative mt-5">
                <label class="label absolute block top-0 mt-2 ltr:ml-4 rtl:mr-4 font-heading uppercase"
                    for="input-3">Label</label>
                <input id="input-3" class="form-control pt-8" placeholder="Enter text here">
            </div>
        </div>
    </div>

@endsection
