@extends('layouts.master', ['title' => 'Dropdowns - Components - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Dropdowns</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Components</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Dropdowns</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-2 gap-5">
        <div class="flex flex-col gap-y-5">

            <!-- Dropdowns -->
            <div class="card p-5">
                <h3>Dropdowns</h3>
                <div class="dropdown mt-5">
                    <button class="btn btn_primary uppercase" data-toggle="dropdown-menu">
                        Dropdown
                        <span class="ltr:ml-3 rtl:mr-3 la la-caret-down text-xl leading-none"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="#no-link">Dropdown Action</a>
                        <a href="#no-link">Link</a>
                        <hr>
                        <a href="#no-link">Something Else</a>
                    </div>
                </div>
            </div>

            <!-- Split Dropdowns -->
            <div class="card p-5">
                <h3>Split Dropdowns</h3>
                <div class="dropdown mt-5">
                    <div class="btn-group">
                        <button class="btn btn_primary uppercase">Split Dropdown</button>
                        <button class="btn btn_primary uppercase ltr:pl-4 rtl:pr-4" data-toggle="dropdown-menu">
                            <span class="la la-caret-down text-xl leading-none"></span>
                        </button>
                    </div>
                    <div class="dropdown-menu">
                        <a href="#no-link">Dropdown Action</a>
                        <a href="#no-link">Link</a>
                        <hr>
                        <h6 class="uppercase">Header</h6>
                        <a href="#no-link">Something Else</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
