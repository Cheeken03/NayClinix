@extends('layouts.master', ['title' => 'Point Of Sale - Applications'])

@section('workspace')

    <!-- Breadcrumb -->
    <div class="breadcrumb xl:flex items-start">
        <section class="breadcrumb">
            <h1>Point Of Sale</h1>
            <ul>
                <li><a href="#no-link">Applications</a></li>
                <li class="divider la la-arrow-right"></li>
                <li>Point Of Sale</li>
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

            <!-- Add New -->
            <button class="btn btn_primary uppercase">Add New</button>
        </div>
    </div>

    <!-- Items -->
    <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-5">
        <div class="card card_hoverable card_list">
            <div class="image image_icon">
                <span class="la la-folder la-4x"></span>
            </div>
            <div class="body">
                <h5>Potato</h5>
                <p>10 Items</p>
            </div>
        </div>
        <div class="card card_hoverable card_list">
            <div class="image image_icon">
                <span class="la la-folder la-4x"></span>
            </div>
            <div class="body">
                <h5>Tomato</h5>
                <p>20 Items</p>
            </div>
        </div>
        <div class="card card_hoverable card_list">
            <div class="image image_icon">
                <span class="la la-folder la-4x"></span>
            </div>
            <div class="body">
                <h5>Onion</h5>
                <p>10 Items</p>
            </div>
        </div>
        <div class="card card_hoverable card_list">
            <div class="image image_icon">
                <span class="la la-folder la-4x"></span>
            </div>
            <div class="body">
                <h5>Potato</h5>
                <p>5 Items</p>
            </div>
        </div>
    </div>

    <hr class="my-5 dark:border-gray-800">

    <!-- List -->
    <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-5">
        <div class="card card_column card_hoverable">
            <div class="image">
                <div class="aspect-w-4 aspect-h-3">
                    <img src="{{ Vite::asset('resources/images/potato.jpg') }}">
                </div>
            </div>
            <div class="header">
                <h3>Potato</h3>
            </div>
        </div>
        <div class="card card_column card_hoverable">
            <div class="image">
                <div class="aspect-w-4 aspect-h-3">
                    <img src="{{ Vite::asset('resources/images/tomato.jpg') }}">
                </div>
            </div>
            <div class="header">
                <h3>Tomato</h3>
            </div>
        </div>
        <div class="card card_column card_hoverable">
            <div class="image">
                <div class="aspect-w-4 aspect-h-3">
                    <img src="{{ Vite::asset('resources/images/pepper.jpg') }}">
                </div>
            </div>
            <div class="header">
                <h3>Pepper</h3>
            </div>
        </div>
        <div class="card card_column card_hoverable">
            <div class="image">
                <div class="aspect-w-4 aspect-h-3">
                    <img src="{{ Vite::asset('resources/images/ingredients.jpg') }}">
                </div>
            </div>
            <div class="header">
                <h3>Ingredients</h3>
            </div>
        </div>
        <div class="card card_column card_hoverable">
            <div class="image">
                <div class="aspect-w-4 aspect-h-3">
                    <img src="{{ Vite::asset('resources/images/tomato.jpg') }}">
                </div>
            </div>
            <div class="header">
                <h3>Tomato</h3>
            </div>
        </div>
        <div class="card card_column card_hoverable">
            <div class="image">
                <div class="aspect-w-4 aspect-h-3">
                    <img src="{{ Vite::asset('resources/images/pepper.jpg') }}">
                </div>
            </div>
            <div class="header">
                <h3>Pepper</h3>
            </div>
        </div>
    </div>

@endsection

@section('sidebar')

    <div class="overflow-y-auto">

        <!-- Shopping Bag -->
        <h2 class="p-5">Shopping Bag</h2>
        <hr>
        <div class="p-3">
            <p class="flex justify-between px-2 py-1 hover:bg-background rounded">
                <span>
                    Potato
                    <span class="text-muted">x 1</span>
                </span>
                <span class="font-bold">$10</span>
            </p>
            <p class="flex justify-between px-2 py-1 hover:bg-background rounded">
                <span>
                    Tomato
                    <span class="text-muted">x 2</span>
                </span>
                <span class="font-bold">$40</span>
            </p>
            <p class="flex justify-between px-2 py-1 hover:bg-background rounded">
                <span>
                    Onion
                    <span class="text-muted">x 1</span>
                </span>
                <span class="font-bold">$10</span>
            </p>
        </div>

        <!-- Coupon -->
        <h2 class="p-5">Coupon</h2>
        <hr>
        <div class="input-group p-5">
            <input class="form-control input-group-item" placeholder="Enter Coupon Code">
            <button class="btn btn_primary uppercase input-group-item">Apply</button>
        </div>

        <!-- Totals -->
        <h2 class="p-5">Totals</h2>
        <hr>
        <div class="px-5 py-3">
            <p class="flex justify-between py-1">
                Subtotal
                <span class="font-bold">$100</span>
            </p>
            <p class="flex justify-between py-1">
                Discount
                <span class="font-bold">-$10</span>
            </p>
            <p class="flex justify-between py-1">
                Tax
                <span class="font-bold">$15</span>
            </p>
            <hr class="my-4 border-dashed">
            <h5 class="flex justify-between">
                Total Charge
                <span>$105</span>
            </h5>
        </div>
    </div>

    <!-- Sidebar Footer -->
    <div class="mt-auto">
        <hr>
        <div class="flex p-5">
            <button class="btn btn_danger uppercase">Clear Items</button>
            <button class="btn btn_primary uppercase ltr:ml-auto rtl:mr-auto">Charge</button>
        </div>
    </div>

@endsection
