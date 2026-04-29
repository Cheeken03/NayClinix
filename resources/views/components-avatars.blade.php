@extends('layouts.master', ['title' => 'Avatars - Components - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Avatars</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Components</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Avatars</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-4 gap-5">

        <!-- Default -->
        <div class="flex flex-col space-y-5">
            <div class="card p-5">
                <h3>Default</h3>
                <div class="flex items-center gap-x-4 mt-4">
                    <div class="avatar">
                        <img src="{{ Vite::asset('resources/images/potato.jpg') }}">
                    </div>
                    <div class="avatar w-16 h-16">
                        <img src="{{ Vite::asset('resources/images/tomato.jpg') }}">
                    </div>
                    <div class="avatar w-20 h-20">
                        <img src="{{ Vite::asset('resources/images/breakfast.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="card p-5">
                <h3>Default With Initials</h3>
                <div class="flex items-center gap-x-4 mt-4">
                    <div class="avatar">JD</div>
                    <div class="avatar w-16 h-16 text-2xl">JD</div>
                    <div class="avatar w-20 h-20 text-4xl">JD</div>
                </div>
            </div>
        </div>

        <div class="flex flex-col space-y-5">
            <div class="card p-5">
                <h3>Default With Status</h3>
                <div class="flex items-center gap-x-4 mt-4">
                    <div class="avatar">
                        <div class="status bg-success"></div>
                        <img src="{{ Vite::asset('resources/images/potato.jpg') }}">
                    </div>
                    <div class="avatar w-16 h-16">
                        <div class="status bg-warning"></div>
                        <img src="{{ Vite::asset('resources/images/tomato.jpg') }}">
                    </div>
                    <div class="avatar w-20 h-20">
                        <div class="status bg-danger"></div>
                        <img src="{{ Vite::asset('resources/images/breakfast.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="card p-5">
                <h3>Default With Initials & Status</h3>
                <div class="flex items-center gap-x-4 mt-4">
                    <div class="avatar">
                        <div class="status bg-success"></div>
                        JD
                    </div>
                    <div class="avatar w-16 h-16 text-2xl">
                        <div class="status bg-warning"></div>
                        JD
                    </div>
                    <div class="avatar w-20 h-20 text-4xl">
                        <div class="status bg-danger"></div>
                        JD
                    </div>
                </div>
            </div>
        </div>

        <!-- Shadowed -->
        <div class="flex flex-col space-y-5">
            <div class="card p-5">
                <h3>Shadowed</h3>
                <div class="flex items-center gap-x-4 mt-4">
                    <div class="avatar avatar_with-shadow">
                        <img src="{{ Vite::asset('resources/images/potato.jpg') }}">
                    </div>
                    <div class="avatar avatar_with-shadow w-16 h-16">
                        <img src="{{ Vite::asset('resources/images/tomato.jpg') }}">
                    </div>
                    <div class="avatar avatar_with-shadow w-20 h-20">
                        <img src="{{ Vite::asset('resources/images/breakfast.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="card p-5">
                <h3>Shadowed With Initials</h3>
                <div class="flex items-center gap-x-4 mt-4">
                    <div class="avatar avatar_with-shadow text-xl">JD</div>
                    <div class="avatar avatar_with-shadow w-16 h-16 text-2xl">
                        JD</div>
                    <div class="avatar avatar_with-shadow w-20 h-20 text-4xl">
                        JD</div>
                </div>
            </div>
        </div>
        <div class="flex flex-col space-y-5">
            <div class="card p-5">
                <h3>Shadowed With Status</h3>
                <div class="flex items-center gap-x-4 mt-4">
                    <div class="avatar avatar_with-shadow">
                        <div class="status bg-success"></div>
                        <img src="{{ Vite::asset('resources/images/potato.jpg') }}">
                    </div>
                    <div class="avatar avatar_with-shadow w-16 h-16">
                        <div class="status bg-warning"></div>
                        <img src="{{ Vite::asset('resources/images/tomato.jpg') }}">
                    </div>
                    <div class="avatar avatar_with-shadow w-20 h-20">
                        <div class="status bg-danger"></div>
                        <img src="{{ Vite::asset('resources/images/breakfast.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="card p-5">
                <h3>Shadowed With Initials & Status</h3>
                <div class="flex items-center gap-x-4 mt-4">
                    <div class="avatar avatar_with-shadow text-xl">
                        <div class="status bg-success"></div>
                        JD
                    </div>
                    <div class="avatar avatar_with-shadow w-16 h-16 text-2xl">
                        <div class="status bg-warning"></div>
                        JD
                    </div>
                    <div class="avatar avatar_with-shadow w-20 h-20 text-4xl">
                        <div class="status bg-danger"></div>
                        JD
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
