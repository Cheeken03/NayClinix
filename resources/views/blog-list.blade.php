@extends('layouts.master', ['title' => 'List - Blog - Pages'])

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
                <li>List</li>
            </ul>
        </section>

        <div class="flex flex-wrap gap-2 items-center ltr:ml-auto rtl:mr-auto mb-5">

            <!-- Layout -->
            <div class="flex gap-x-2">
                <a href="#no-link" class="btn btn-icon btn-icon_large btn_outlined btn_primary">
                    <span class="la la-bars"></span>
                </a>
                <a href="{{ url('pages/blog/list-card-rows') }}" class="btn btn-icon btn-icon_large btn_outlined btn_secondary">
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
    <div class="card p-5">
        <div class="overflow-x-auto">
            <table class="table table-auto table_hoverable w-full">
                <thead>
                    <tr>
                        <th class="w-px">
                            <label class="custom-checkbox">
                                <input type="checkbox" checked partial>
                                <span></span>
                            </label>
                        </th>
                        <th class="ltr:text-left rtl:text-right uppercase">Title</th>
                        <th class="text-center uppercase">Views</th>
                        <th class="text-center uppercase">Date</th>
                        <th class="text-center uppercase">Pulbished</th>
                        <th class="uppercase"></th>
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
                        <td class="text-center">100</td>
                        <td class="text-center">December 15, 2019</td>
                        <td class="text-center">
                            <div class="badge badge_outlined badge_secondary uppercase">Draft</div>
                        </td>
                        <td class="ltr:text-right rtl:text-left whitespace-nowrap">
                            <div class="inline-flex ltr:ml-auto rtl:mr-auto">
                                <a href="#no-link" class="btn btn-icon btn_outlined btn_secondary">
                                    <span class="la la-pen-fancy"></span>
                                </a>
                                <a href="#no-link" class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2">
                                    <span class="la la-trash-alt"></span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-toggle="rowSelection">
                                <span></span>
                            </label>
                        </td>
                        <td>Donec tempor lacus quis ex ullamcorper, ut cursus dui pellentesque.</td>
                        <td class="text-center">150</td>
                        <td class="text-center">December 10, 2019</td>
                        <td class="text-center">
                            <div class="badge badge_outlined badge_success uppercase">Published</div>
                        </td>
                        <td class="ltr:text-right rtl:text-left whitespace-nowrap">
                            <div class="inline-flex ltr:ml-auto rtl:mr-auto">
                                <a href="#no-link" class="btn btn-icon btn_outlined btn_secondary">
                                    <span class="la la-pen-fancy"></span>
                                </a>
                                <a href="#no-link" class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2">
                                    <span class="la la-trash-alt"></span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-toggle="rowSelection">
                                <span></span>
                            </label>
                        </td>
                        <td>Quisque molestie velit sed elit finibus, nec gravida nunc finibus.</td>
                        <td class="text-center">300</td>
                        <td class="text-center">December 5, 2019</td>
                        <td class="text-center">
                            <div class="badge badge_outlined badge_secondary uppercase">Draft</div>
                        </td>
                        <td class="ltr:text-right rtl:text-left whitespace-nowrap">
                            <div class="inline-flex ltr:ml-auto rtl:mr-auto">
                                <a href="#no-link" class="btn btn-icon btn_outlined btn_secondary">
                                    <span class="la la-pen-fancy"></span>
                                </a>
                                <a href="#no-link" class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2">
                                    <span class="la la-trash-alt"></span>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-5">
        @include('partials._pagination')
    </div>

    <!-- Footer Bar -->
    <div class="footer-bar">
        <div class="flex items-center uppercase">
            <span class="badge badge_primary ltr:mr-2 rtl:ml-2">1</span>
            Post Selected
        </div>
        <div class="ltr:ml-auto rtl:mr-auto">
            <button class="btn btn_danger uppercase">
                <span class="la la-trash-alt text-xl leading-none ltr:mr-2 rtl:ml-2"></span>
                Remove
            </button>
        </div>
    </div>

@endsection
