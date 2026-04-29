@extends('layouts.master', ['title' => 'Input Groups - Form - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Input Groups</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Form</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Input Groups</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-3 gap-5">
        <div class="flex flex-col gap-y-5 lg:col-span-1">

            <!-- Basic -->
            <div class="card p-5">
                <h3>Basic</h3>
                <div class="input-group mt-5">
                    <div class="input-addon input-addon-prepend input-group-item">@</div>
                    <input class="form-control input-group-item" placeholder="username">
                </div>
                <div class="input-group mt-5">
                    <input class="form-control input-group-item" placeholder="example">
                    <div class="input-addon input-addon-append input-group-item">.com</div>
                </div>
            </div>

            <!-- Button Addons -->
            <div class="card p-5">
                <h3>Button Addons</h3>
                <div class="input-group mt-5">
                    <input class="form-control input-group-item" placeholder="Input">
                    <button class="btn btn_primary uppercase input-group-item">Button</button>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-y-5 lg:col-span-2">

            <!-- Multiple Inputs -->
            <div class="card p-5">
                <h3>Multiple Inputs</h3>
                <div class="input-group mt-5">
                    <div class="input-addon input-addon-prepend input-group-item">First and last name</div>
                    <input class="form-control input-group-item" placeholder="First name">
                    <input class="form-control input-group-item" placeholder="Last name">
                </div>
            </div>

            <!-- Multiple Addons -->
            <div class="card p-5">
                <h3>Multiple Addons</h3>
                <div class="input-group mt-5">
                    <div class="input-addon input-addon-prepend input-group-item">$</div>
                    <div class="input-addon input-addon-prepend input-group-item">0.00</div>
                    <input class="form-control input-group-item" placeholder="Input">
                </div>
                <div class="input-group mt-5">
                    <input class="form-control input-group-item" placeholder="Input">
                    <div class="input-addon input-addon-append input-group-item">$</div>
                    <div class="input-addon input-addon-append input-group-item">0.00</div>
                </div>
            </div>
        </div>
    </div>

@endsection
