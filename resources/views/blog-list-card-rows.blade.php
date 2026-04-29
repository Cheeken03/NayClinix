@extends('layouts.master', ['title' => 'List - Card Rows - Blog - Pages'])

@section('workspace')

    <!-- Breadcrumb -->
    <div class="lg:flex items-start">
        <section class="breadcrumb">
            <h1>Blog</h1>
            <ul>
                <li><a href="#no-link">Pages</a></li>
                <li class="divider la la-arrow-right"></li>
                <li><a href="#no-link">Blog</a></li>
                <li class="divider la la-arrow-right"></li>
                <li>List - Card Rows</li>
            </ul>
        </section>

        <div class="flex flex-wrap gap-2 items-center ltr:ml-auto rtl:mr-auto mb-5">

            <!-- Layout -->
            <div class="flex gap-x-2">
                <a href="{{ url('pages/blog/list') }}" class="btn btn-icon btn-icon_large btn_outlined btn_secondary">
                    <span class="la la-bars"></span>
                </a>
                <a href="#no-link" class="btn btn-icon btn-icon_large btn_outlined btn_primary">
                    <span class="la la-list"></span>
                </a>
                <a href="{{ url('pages/blog/list-card-columns') }}"
                    class="btn btn-icon btn-icon_large btn_outlined btn_secondary">
                    <span class="la la-th-large"></span>
                </a>
            </div>

            <!-- Search -->
            <form class="flex flex-auto">
                <label class="form-control-addon-within rounded-full">
                    <input class="form-control border-none" placeholder="Search">
                    <button
                        class="text-gray-300 dark:text-gray-700 text-xl leading-none la la-search ltr:mr-4 rtl:ml-4"></button>
                </label>
            </form>

            <div class="flex gap-x-2">

                <!-- Sort By -->
                <div class="dropdown">
                    <button class="btn btn_outlined btn_secondary uppercase" data-toggle="dropdown-menu">
                        Sort By
                        <span class="ltr:ml-3 rtl:mr-3 la la-caret-down text-xl leading-none"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="#no-link">Ascending</a>
                        <a href="#no-link">Descending</a>
                    </div>
                </div>

                <!-- Add New -->
                <a href="{{ url('pages/blog/add') }}" class="btn btn_primary uppercase">Add New</a>
            </div>
        </div>
    </div>

    <!-- List -->
    <div class="flex flex-col gap-y-5">
        <div class="card card_row card_hoverable">
            <div>
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
                        Draft
                    </div>
                </div>
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
        <div class="card card_row card_hoverable">
            <div>
                <div class="image">
                    <div class="aspect-w-4 aspect-h-3">
                        <img src="{{ Vite::asset('resources/images/tomato.jpg') }}">
                    </div>
                    <label class="custom-checkbox absolute top-0 ltr:left-0 rtl:right-0 mt-2 ltr:ml-2 rtl:mr-2">
                        <input type="checkbox" data-toggle="cardSelection">
                        <span></span>
                    </label>
                    <div
                        class="badge badge_outlined badge_success uppercase absolute top-0 ltr:right-0 rtl:left-0 mt-2 ltr:mr-2 rtl:ml-2">
                        Published
                    </div>
                </div>
            </div>
            <div class="header">
                <h5>Donec tempor lacus quis ex ullamcorper, ut cursus dui pellentesque.</h5>
                <p>Nunc et tincidunt tortor. Integer pellentesque bibendum neque, ultricies semper neque vulputate
                    congue. Nunc fringilla mi sed nisi finibus vulputate. Nunc eu risus velit.</p>
            </div>
            <div class="body">
                <h6 class="uppercase">Views</h6>
                <p>150</p>
                <h6 class="uppercase mt-4 lg:mt-auto">Date Created</h6>
                <p>December 10, 2019</p>
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
        <div class="card card_row card_hoverable">
            <div>
                <div class="image">
                    <div class="aspect-w-4 aspect-h-3">
                        <img src="{{ Vite::asset('resources/images/pepper.jpg') }}">
                    </div>
                    <label class="custom-checkbox absolute top-0 ltr:left-0 rtl:right-0 mt-2 ltr:ml-2 rtl:mr-2">
                        <input type="checkbox" data-toggle="cardSelection">
                        <span></span>
                    </label>
                    <div
                        class="badge badge_outlined badge_secondary uppercase absolute top-0 ltr:right-0 rtl:left-0 mt-2 ltr:mr-2 rtl:ml-2">
                        Draft
                    </div>
                </div>
            </div>
            <div class="header">
                <h5>Quisque molestie velit sed elit finibus, nec gravida nunc finibus.</h5>
                <p>Nunc et tincidunt tortor. Integer pellentesque bibendum neque, ultricies semper neque vulputate
                    congue. Nunc fringilla mi sed nisi finibus vulputate. Nunc eu risus velit.</p>
            </div>
            <div class="body">
                <h6 class="uppercase">Views</h6>
                <p>300</p>
                <h6 class="uppercase mt-4 lg:mt-auto">Date Created</h6>
                <p>December 5, 2019</p>
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

    <div class="mt-5">
        @include('partials._pagination')
    </div>

@endsection
