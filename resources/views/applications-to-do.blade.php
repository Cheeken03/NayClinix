@extends('layouts.master', ['title' => 'To Do - Applications'])

@section('workspace')

    <!-- Breadcrumb -->
    <div class="lg:flex items-start">
        <section class="breadcrumb">
            <h1>To Do</h1>
            <ul>
                <li><a href="#no-link">Applications</a></li>
                <li class="divider la la-arrow-right"></li>
                <li>To Do</li>
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
            <div class="dropdown ">
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

    <!-- To Do -->
    <div class="flex flex-col gap-y-5 ">
        <div class="card relative p-5">
            <div
                class="lg:absolute top-0 ltr:right-0 rtl:left-0 lg:mt-3 lg:ltr:mr-5 lg:rtl:ml-5 mb-5 lg:flex items-center justify-end ltr:text-right rtl:text-left">
                <span class="inline-flex text-muted pb-2 lg:pb-0">March 10, 2020</span>
                <a href="#no-link" class="btn btn-icon btn_outlined btn_secondary ltr:ml-5 rtl:mr-5">
                    <span class="la la-pen-fancy"></span>
                </a>
                <a href="#no-link" class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2">
                    <span class="la la-trash-alt"></span>
                </a>
            </div>
            <table class="table table_hoverable w-full">
                <thead>
                    <tr>
                        <th class="w-px">
                            <label class="custom-checkbox">
                                <input type="checkbox" checked partial>
                                <span></span>
                            </label>
                        </th>
                        <th class="ltr:text-left rtl:text-right uppercase">Potato</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-toggle="rowSelection">
                                <span></span>
                            </label>
                        </td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-toggle="rowSelection">
                                <span></span>
                            </label>
                        </td>
                        <td>Donec tempor lacus quis ex ullamcorper, ut cursus dui pellentesque.</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-toggle="rowSelection">
                                <span></span>
                            </label>
                        </td>
                        <td>Quisque molestie velit sed elit finibus, nec gravida nunc finibus.</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-toggle="rowSelection">
                                <span></span>
                            </label>
                        </td>
                        <td>
                            <input class="w-full bg-transparent outline-none placeholder:text-placeholder"
                                placeholder="add new task here ...">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- To Do -->
        <div class="card relative p-5">
            <div
                class="lg:absolute top-0 ltr:right-0 rtl:left-0 lg:mt-3 lg:ltr:mr-5 lg:rtl:ml-5 mb-5 lg:flex items-center justify-end ltr:text-right rtl:text-left">
                <span class="inline-flex text-muted pb-2 lg:pb-0">March 10, 2020</span>
                <a href="#no-link" class="btn btn-icon btn_outlined btn_secondary ltr:ml-5 rtl:mr-5">
                    <span class="la la-pen-fancy"></span>
                </a>
                <a href="#no-link" class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2">
                    <span class="la la-trash-alt"></span>
                </a>
            </div>
            <table class="table table_hoverable w-full">
                <thead>
                    <tr>
                        <th class="w-px">
                            <label class="custom-checkbox">
                                <input type="checkbox" checked partial>
                                <span></span>
                            </label>
                        </th>
                        <th class="ltr:text-left rtl:text-right uppercase">Tomato</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-toggle="rowSelection">
                                <span></span>
                            </label>
                        </td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-toggle="rowSelection">
                                <span></span>
                            </label>
                        </td>
                        <td>Donec tempor lacus quis ex ullamcorper, ut cursus dui pellentesque.</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-toggle="rowSelection">
                                <span></span>
                            </label>
                        </td>
                        <td>Quisque molestie velit sed elit finibus, nec gravida nunc finibus.</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-toggle="rowSelection">
                                <span></span>
                            </label>
                        </td>
                        <td>
                            <input class="w-full bg-transparent outline-none placeholder:text-placeholder"
                                placeholder="add new task here ...">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('sidebar')

    <div class="overflow-y-auto">

        <!-- Status -->
        <h2 class="p-5">Status</h2>
        <hr>
        <div class="flex flex-col gap-y-5 p-5">
            <a href="#no-link" class="flex items-center text-normal">
                <span class="la la-sync text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                Pending Tasks
                <span class="badge badge_outlined badge_primary ltr:mr-2 rtl:ml-2 ltr:ml-auto rtl:mr-auto">10</span>
            </a>
            <a href="#no-link" class="flex items-center text-normal">
                <span class="la la-check-circle text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                Completed Tasks
                <span class="badge badge_outlined badge_primary ltr:mr-2 rtl:ml-2 ltr:ml-auto rtl:mr-auto">20</span>
            </a>
        </div>

        <!-- Categories -->
        <h2 class="p-5">Categories</h2>
        <hr>
        <div class="flex flex-col gap-y-5 p-5">
            <label class="custom-checkbox">
                <input type="checkbox">
                <span></span>
                <span>Potato</span>
                <span class="badge badge_outlined badge_primary ltr:mr-2 rtl:ml-2 ltr:ml-auto rtl:mr-auto">10</span>
            </label>
            <label class="custom-checkbox">
                <input type="checkbox">
                <span></span>
                <span>Tomato</span>
                <span class="badge badge_outlined badge_primary ltr:mr-2 rtl:ml-2 ltr:ml-auto rtl:mr-auto">20</span>
            </label>
            <label class="custom-checkbox">
                <input type="checkbox">
                <span></span>
                <span>Onion</span>
                <span class="badge badge_outlined badge_primary ltr:mr-2 rtl:ml-2 ltr:ml-auto rtl:mr-auto">10</span>
            </label>
        </div>

        <!-- Tags -->
        <h2 class="p-5">Tags</h2>
        <hr>
        <div class="flex gap-2 p-5">
            <button class="badge badge_outlined badge_primary">Potato</button>
            <button class="badge badge_outlined badge_success">Tomato</button>
            <button class="badge badge_outlined badge_warning">Onion</button>
        </div>
    </div>

@endsection
