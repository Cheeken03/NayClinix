@extends('layouts.master', ['title' => 'Sortable - Extras - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Sortable</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Extras</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Sortable</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-2 gap-5">
        <div class="flex flex-col gap-y-5">

            <!-- Style 1 -->
            <div class="card p-5">
                <h3>Style 1</h3>
                <div class="mt-5">
                    <ul id="sortable-style-1" class="sortable">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>
                </div>
            </div>

            <!-- Style 2 -->
            <div class="card p-5">
                <h3>Style 2</h3>
                <div class="mt-5">
                    <ul id="sortable-style-2" class="sortable">
                        <li>
                            <span class="handle la la-arrows"></span>
                            Item 1
                        </li>
                        <li>
                            <span class="handle la la-arrows"></span>
                            Item 2
                        </li>
                        <li>
                            <span class="handle la la-arrows"></span>
                            Item 3
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div>

            <!-- Style 3 -->
            <div class="card p-5">
                <h3>Style 3</h3>
                <div class="mt-5">
                    <div id="sortable-style-3" class="grid lg:grid-cols-3 gap-5">
                        <div class="card border border-divider px-4 py-8 text-center">
                            <span class="text-primary text-5xl leading-none la la-sun"></span>
                            <p class="mt-2">Published Posts</p>
                            <div class="text-primary mt-5 text-3xl leading-none">18</div>
                        </div>
                        <div class="card border border-divider px-4 py-8 text-center">
                            <span class="text-primary text-5xl leading-none la la-cloud"></span>
                            <p class="mt-2">Pending Posts</p>
                            <div class="text-primary mt-5 text-3xl leading-none">16</div>
                        </div>
                        <div class="card border border-divider px-4 py-8 text-center">
                            <span class="text-primary text-5xl leading-none la la-layer-group"></span>
                            <p class="mt-2">Categories</p>
                            <div class="text-primary mt-5 text-3xl leading-none">9</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('build/js/Sortable.min.js') }}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js') }}"></script> -->

@endsection
