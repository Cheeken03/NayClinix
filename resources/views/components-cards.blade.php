@extends('layouts.master', ['title' => 'Cards - Components - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Cards</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Components</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Cards</li>
        </ul>
    </section>

    <!-- Card Blank -->
    <div class="grid lg:grid-cols-4 gap-5">
        <div class="card p-5 h-40">
            <h3>Blank Card</h3>
        </div>
    </div>

    <!-- Card Showcase -->
    <div class="grid lg:grid-cols-4 gap-5 mt-5">
        <div class="card px-4 py-8 text-center">
            <span class="text-primary text-5xl leading-none la la-sun"></span>
            <p class="mt-2">Published Posts</p>
            <div class="text-primary mt-5 text-3xl leading-none">18</div>
        </div>
    </div>

    <!-- Card Row -->
    <div class="lg:flex mt-5">
        <div class="card card_row">
            <div class="image">
                <div class="aspect-w-4 aspect-h-3">
                    <img src="{{ Vite::asset('resources/images/potato.jpg') }}">
                </div>
                <label class="custom-checkbox absolute top-0 ltr:left-0 rtl:right-0 mt-2 ltr:ml-2 rtl:mr-2">
                    <input type="checkbox" data-toggle="cardSelection">
                    <span></span>
                </label>
                <div
                    class="badge badge_outlined badge_secondary uppercase absolute top-0 ltr:right-0 rtl:left-0 mt-2 ltr:mr-2 rtl:ml-2">
                    Draft</div>
            </div>
            <div class="header">
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                <p>Nunc et tincidunt tortor. Integer pellentesque bibendum neque, ultricies semper neque vulputate
                    congue. Nunc fringilla mi sed nisi finibus vulputate. Nunc eu risus velit.</p>
            </div>
            <div class="body">
                <h6 class="uppercase">Views</h6>
                <p>100</p>
                <h6 class="uppercase mt-4 lg:mt-auto">Date Created</h6>
                <p>December 15, 2019</p>
            </div>
            <div class="actions">
                <div class="dropdown ltr:-ml-3 rtl:-mr-3 lg:ltr:ml-auto lg:rtl:mr-auto">
                    <button data-toggle="dropdown-menu">
                        <span class="la la-ellipsis-v text-4xl leading-none"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="#no-link">Dropdown Action</a>
                        <a href="#no-link">Link</a>
                        <hr>
                        <a href="#no-link">Something Else</a>
                    </div>
                </div>
                <a href="#no-link"
                    class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0">
                    <span class="la la-pen-fancy"></span>
                </a>
                <a href="#no-link"
                    class="btn btn-icon btn_outlined btn_danger lg:mt-2 ltr:ml-2 rtl:mr-2 lg:ltr:ml-0 lg:rtl:mr-0">
                    <span class="la la-trash-alt"></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Card Column -->
    <div class="grid lg:grid-cols-4 gap-5 mt-5">
        <div class="card card_column">
            <div class="image">
                <div class="aspect-w-4 aspect-h-3">
                    <img src="{{ Vite::asset('resources/images/tomato.jpg') }}">
                </div>
                <label class="custom-checkbox absolute top-0 ltr:left-0 rtl:right-0 mt-2 ltr:ml-2 rtl:mr-2">
                    <input type="checkbox" data-toggle="cardSelection">
                    <span></span>
                </label>
                <div
                    class="badge badge_outlined badge_secondary uppercase absolute top-0 ltr:right-0 rtl:left-0 mt-2 ltr:mr-2 rtl:ml-2">
                    Draft</div>
            </div>
            <div class="header">
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
            </div>
            <div class="body">
                <h6 class="uppercase">Views</h6>
                <p>100</p>
                <h6 class="uppercase mt-4">Date Created</h6>
                <p>December 15, 2019</p>
            </div>
            <div class="actions">
                <a href="#no-link" class="btn btn-icon btn_outlined btn_secondary">
                    <span class="la la-pen-fancy"></span>
                </a>
                <a href="#no-link" class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2">
                    <span class="la la-trash-alt"></span>
                </a>
                <div class="dropdown ltr:ml-auto rtl:mr-auto ltr:-mr-3 rtl:-ml-3">
                    <button data-toggle="dropdown-menu">
                        <span class="la la-ellipsis-v text-4xl leading-none"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="#no-link">Dropdown Action</a>
                        <a href="#no-link">Link</a>
                        <hr>
                        <a href="#no-link">Something Else</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card List -->
    <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-5 mt-5">

        <!-- Icon -->
        <div class="card card_hoverable card_list">
            <div class="image image_icon">
                <span class="la la-folder la-4x"></span>
            </div>
            <div class="body">
                <h5>Potato</h5>
                <p>December 15, 2019</p>
            </div>
            <div class="actions">
                <label class="custom-checkbox">
                    <input type="checkbox" data-toggle="cardSelection">
                    <span></span>
                </label>
            </div>
        </div>

        <!-- Image -->
        <div class="card card_hoverable card_list">
            <div class="image">
                <img src="{{ Vite::asset('resources/images/breakfast.jpg') }}">
            </div>
            <div class="body">
                <h5>Potato.jpg</h5>
                <p>December 15, 2019</p>
            </div>
            <div class="actions">
                <label class="custom-checkbox">
                    <input type="checkbox" data-toggle="cardSelection">
                    <span></span>
                </label>
            </div>
        </div>
    </div>

    <div class="mt-5">
        @include('partials._pagination')
    </div>

@endsection
