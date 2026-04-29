@extends('layouts.master', ['title' => 'Media Library - Applications'])

@section('workspace')

    <!-- Breadcrumb -->
    <div class="lg:flex items-start">
        <section class="breadcrumb">
            <h1>Media Library</h1>
            <ul>
                <li><a href="#no-link">Applications</a></li>
                <li class="divider la la-arrow-right"></li>
                <li>Media Library</li>
            </ul>
        </section>

        <div class="flex flex-wrap gap-2 items-center ltr:ml-auto rtl:mr-auto mb-5">

            <!-- Search -->
            <form class="flex flex-auto">
                <label class="form-control-addon-within rounded-full">
                    <input class="form-control border-none" placeholder="Search">
                    <button
                        class="text-gray-300 dark:text-gray-700 text-xl leading-none la la-search ltr:mr-4 rtl:ml-4"></button>
                </label>
            </form>

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
        </div>
    </div>

    <!-- Actions -->
    <div class="card p-4 flex flex-wrap gap-2">
        <button class="btn btn_primary uppercase">
            <span class="la la-sync text-xl leading-none ltr:mr-2 rtl:ml-2"></span>
            Refresh
        </button>
        <div class="flex flex-wrap gap-2 ltr:ml-auto rtl:mr-auto">
            <button class="btn btn_primary uppercase">
                <span class="la la-upload text-xl leading-none ltr:mr-2 rtl:ml-2"></span>
                Upload
            </button>
            <button class="btn btn_primary uppercase">
                <span class="la la-folder-plus text-xl leading-none ltr:mr-2 rtl:ml-2"></span>
                New Folder
            </button>
            <button class="btn btn_primary uppercase">
                <span class="la la-random text-xl leading-none ltr:mr-2 rtl:ml-2"></span>
                Move
            </button>
            <button class="btn btn_primary uppercase">
                <span class="la la-redo-alt text-xl leading-none ltr:mr-2 rtl:ml-2"></span>
                Rename
            </button>
            <button class="btn btn_danger uppercase">
                <span class="la la-trash text-xl leading-none ltr:mr-2 rtl:ml-2"></span>
                Remove
            </button>
        </div>
    </div>

    <!-- Breadcrumb - Media Library -->
    <section class="breadcrumb breadcrumb_alt mt-5 p-4">
        <ul>
            <li><a href="#no-link"><span class="la la-folder text-xl ltr:mr-2 rtl:ml-2"></span>Root</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Folder</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-5 mt-5">

        <div class="lg:col-span-2 xl:col-span-3">

            <!-- Items -->
            <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-5">
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
                <div class="card card_hoverable card_list">
                    <div class="image image_icon">
                        <span class="la la-folder la-4x"></span>
                    </div>
                    <div class="body">
                        <h5>Tomato</h5>
                        <p>March 15, 2020</p>
                    </div>
                    <div class="actions">
                        <label class="custom-checkbox">
                            <input type="checkbox" data-toggle="cardSelection">
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="card card_hoverable card_list">
                    <div class="image image_icon">
                        <span class="la la-folder la-4x"></span>
                    </div>
                    <div class="body">
                        <h5>Onion</h5>
                        <p>December 15, 2019</p>
                    </div>
                    <div class="actions">
                        <label class="custom-checkbox">
                            <input type="checkbox" data-toggle="cardSelection">
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="card card_hoverable card_list">
                    <div class="image image_icon">
                        <span class="la la-music la-4x"></span>
                    </div>
                    <div class="body">
                        <h5>Potato.mp3</h5>
                        <p>December 15, 2019</p>
                    </div>
                    <div class="actions">
                        <label class="custom-checkbox">
                            <input type="checkbox" data-toggle="cardSelection">
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="card card_hoverable card_list">
                    <div class="image image_icon">
                        <span class="la la-video la-4x"></span>
                    </div>
                    <div class="body">
                        <h5>Tomato.mp4</h5>
                        <p>March 15, 2020</p>
                    </div>
                    <div class="actions">
                        <label class="custom-checkbox">
                            <input type="checkbox" data-toggle="cardSelection">
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="card card_hoverable card_list">
                    <div class="image image_icon">
                        <span class="la la-file la-4x"></span>
                    </div>
                    <div class="body">
                        <h5>Onion.pdf</h5>
                        <p>December 15, 2019</p>
                    </div>
                    <div class="actions">
                        <label class="custom-checkbox">
                            <input type="checkbox" data-toggle="cardSelection">
                            <span></span>
                        </label>
                    </div>
                </div>
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
                <div class="card card_hoverable card_list">
                    <div class="image">
                        <img src="{{ Vite::asset('resources/images/pepper.jpg') }}">
                    </div>
                    <div class="body">
                        <h5>Tomato.jpg</h5>
                        <p>March 15, 2020</p>
                    </div>
                    <div class="actions">
                        <label class="custom-checkbox">
                            <input type="checkbox" data-toggle="cardSelection">
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="card card_hoverable card_list">
                    <div class="image">
                        <img src="{{ Vite::asset('resources/images/onion.jpg') }}">
                    </div>
                    <div class="body">
                        <h5>Onion.jpg</h5>
                        <p>December 15, 2019</p>
                    </div>
                    <div class="actions">
                        <label class="custom-checkbox">
                            <input type="checkbox" data-toggle="cardSelection">
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="card card_hoverable card_list">
                    <div class="image">
                        <img src="{{ Vite::asset('resources/images/potato.jpg') }}">
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
                <div class="card card_hoverable card_list">
                    <div class="image">
                        <img src="{{ Vite::asset('resources/images/tomato.jpg') }}">
                    </div>
                    <div class="body">
                        <h5>Tomato.jpg</h5>
                        <p>March 15, 2020</p>
                    </div>
                    <div class="actions">
                        <label class="custom-checkbox">
                            <input type="checkbox" data-toggle="cardSelection">
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-y-5 lg:col-span-1">

            <!-- Preview -->
            <div class="card card_column">
                <div class="image">
                    <div class="aspect-w-4 aspect-h-3">
                        <img src="{{ Vite::asset('resources/images/ingredients.jpg') }}">
                    </div>
                </div>
                <div class="body">
                    <h6 class="uppercase">Name</h6>
                    <p>filename.ext</p>
                    <h6 class="mt-4 uppercase">Public URL</h6>
                    <p><a href="#" target="_blank">filename.ext</a></p>
                    <h6 class="mt-4 uppercase">Type</h6>
                    <p>image/jpg</p>
                    <h6 class="mt-4 uppercase">Last Modified</h6>
                    <p>December 15, 2019</p>
                    <h6 class="mt-4 uppercase">Size</h6>
                    <p>100 KB</p>
                </div>
            </div>

            <!-- Dropzone -->
            <div class="card p-5">
                <h3>Dropzone</h3>
                <div class="dropzone mt-5">
                    <h3>Drop files here to upload</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        @include('partials._pagination')
    </div>

@endsection
