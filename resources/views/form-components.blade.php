@extends('layouts.master', ['title' => 'Components - Form - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Components</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Form</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Components</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-3 gap-5">
        <div class="flex flex-col gap-y-5">

            <!-- Input -->
            <div class="card p-5">
                <h3>Input</h3>
                <div class="mt-5">
                    <label class="label block mb-2" for="input">Label</label>
                    <input id="input" class="form-control" placeholder="Enter text here">
                    <small class="block mt-2">This is help text.</small>
                </div>
            </div>

            <!-- Custom Select -->
            <div class="card p-5">
                <h3>Custom Select</h3>
                <div class="mt-5">
                    <div class="custom-select">
                        <select class="form-control">
                            <option>Select</option>
                            <option>Option</option>
                        </select>
                        <div class="custom-select-icon la la-caret-down"></div>
                    </div>
                </div>
            </div>

            <!-- Textarea -->
            <div class="card p-5">
                <h3>Textarea</h3>
                <div class="mt-5">
                    <textarea class="form-control" rows="5"></textarea>
                </div>
            </div>

            <!-- File Browser -->
            <div class="card p-5">
                <h3>File Browser</h3>
                <div class="mt-5">
                    <label class="input-group font-normal">
                        <div
                            class="file-name input-addon input-addon-prepend input-group-item w-full overflow-x-hidden">
                            No file chosen</div>
                        <input type="file" class="hidden">
                        <div class="input-group-item btn btn_primary uppercase">Choose File</div>
                    </label>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-y-5">

            <!-- Custom Input -->
            <div class="card p-5">
                <h3>Custom Input</h3>
                <h4 class="mt-5 uppercase">Checkbox</h4>
                <div class="flex flex-col gap-y-2 mt-5">
                    <label class="custom-checkbox">
                        <input type="checkbox">
                        <span></span>
                        <span>Checkbox</span>
                    </label>
                    <label class="custom-checkbox">
                        <input type="checkbox" checked>
                        <span></span>
                        <span>Checkbox Checked</span>
                    </label>
                    <label class="custom-checkbox">
                        <input type="checkbox" checked partial>
                        <span></span>
                        <span>Checkbox Partially Checked</span>
                    </label>
                </div>
                <h4 class="mt-10 uppercase">Radio</h4>
                <div class="flex flex-col gap-y-2 mt-5">
                    <label class="custom-radio">
                        <input type="radio" name="radio">
                        <span></span>
                        <span>Radio</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="radio" checked>
                        <span></span>
                        <span>Radio Checked</span>
                    </label>
                </div>
            </div>

            <!-- Switch -->
            <div class="card p-5">
                <h3>Switch</h3>
                <h4 class="mt-5 uppercase">Default</h4>
                <div class="flex flex-col gap-y-5 mt-5">
                    <label class="switch">
                        <input type="checkbox">
                        <span></span>
                        <span>Switched Off</span>
                    </label>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span></span>
                        <span>Switched On</span>
                    </label>
                </div>
                <h4 class="mt-10 uppercase">Outlined</h4>
                <div class="flex flex-col gap-y-5 mt-5">
                    <label class="switch switch_outlined">
                        <input type="checkbox">
                        <span></span>
                        <span>Switched Off</span>
                    </label>
                    <label class="switch switch_outlined">
                        <input type="checkbox" checked>
                        <span></span>
                        <span>Switched On</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-y-5">

            <!-- Range Slider -->
            <div class="card p-5">
                <h3>Range Slider</h3>
                <div class="mt-5">
                    <input type="range" min="1" max="100" value="50" class="custom-range">
                </div>
            </div>

            <!-- Rating -->
            <div class="card p-5">
                <h3>Rating</h3>
                <div class="rating-stars mt-5">
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                </div>
            </div>

            <!-- Search & Select -->
            <div class="card p-5">
                <h3>Search & Select</h3>
                <div class="search-select mt-5">
                    <label class="form-control-addon-within flex-row-reverse" data-toggle="search-select">
                        <input class="form-control ltr:pl-2 rtl:pr-2 border-none w-full" placeholder="Search"
                            value="Lumbini">
                        <span class="flex items-center ltr:pl-4 rtl:pr-4">
                            <span class="badge badge_primary">
                                Pokhara
                                <button type="button" class="ltr:ml-1 rtl:mr-1 la la-times"></button>
                            </span>
                        </span>
                    </label>
                    <div class="search-select-menu">
                        <h6 class="uppercase">Nepal</h6>
                        <div class="item">Kathmandu</div>
                        <div class="item active">Pokhara</div>
                        <div class="item">Lumbini</div>
                        <h6 class="uppercase">India</h6>
                        <div class="item">Delhi</div>
                        <div class="item">Mumbai</div>
                        <div class="item">Karnataka</div>
                    </div>
                </div>
            </div>

            <!-- Tags Input -->
            <div class="card p-5">
                <h3>Tags Input</h3>
                <div class="mt-5">
                    <label class="form-control-addon-within flex-row-reverse">
                        <input class="form-control ltr:pl-2 rtl:pr-2 border-none w-full" placeholder="Enter a tag">
                        <span class="flex items-center ltr:pl-4 rtl:pr-4">
                            <span class="badge badge_primary">
                                tag
                                <button type="button" class="ltr:ml-1 rtl:mr-1 la la-times"></button>
                            </span>
                        </span>
                    </label>
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

@endsection
