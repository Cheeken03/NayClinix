@extends('layouts.blank', ['title' => 'Login'])

@section('body')

    <!-- Top Bar -->
    <section class="top-bar">

        <!-- Brand -->
        <span class="brand">Yeti</span>

        <nav class="flex items-center ltr:ml-auto rtl:mr-auto">

            <!-- Dark Mode -->
            <label class="switch switch_outlined" data-toggle="tooltip" data-tippy-content="Toggle Dark Mode">
                <input id="darkModeToggler" type="checkbox">
                <span></span>
            </label>

            <!-- Fullscreen -->
            <button id="fullScreenToggler"
                class="hidden lg:inline-block ltr:ml-5 rtl:mr-5 text-2xl leading-none la la-expand-arrows-alt"
                data-toggle="tooltip" data-tippy-content="Fullscreen"></button>

            <!-- Register -->
            <a href="{{ url('pages/auth/register') }}" class="btn btn_primary uppercase ltr:ml-5 rtl:mr-5">Register</a>
        </nav>
    </section>

    <div class="container flex items-center justify-center mt-20 py-10">
        <div class="w-full md:w-1/2 xl:w-1/3">
            <div class="mx-5 md:mx-10">
                <h2 class="uppercase">It’s Great To See You!</h2>
                <h4 class="uppercase">Login Here</h4>
            </div>
            <form class="card mt-5 p-5 md:p-10" action="index.html">
                <div class="mb-5">
                    <label class="label block mb-2" for="email">Email</label>
                    <input id="email" class="form-control" placeholder="example@example.com">
                </div>
                <div class="mb-5">
                    <label class="label block mb-2" for="password">Password</label>
                    <label class="form-control-addon-within">
                        <input id="password" type="password" class="form-control border-none" value="12345">
                        <span class="flex items-center ltr:pr-4 rtl:pl-4">
                            <button type="button"
                                class="text-gray-300 dark:text-gray-700 la la-eye text-xl leading-none"
                                data-toggle="password-visibility"></button>
                        </span>
                    </label>
                </div>
                <div class="flex items-center">
                    <a href="{{ url('pages/auth/forgot-password') }}" class="text-sm uppercase">Forgot Password?</a>
                    <button class="btn btn_primary ltr:ml-auto rtl:mr-auto uppercase">Login</button>
                </div>
            </form>
        </div>
    </div>

@endsection
