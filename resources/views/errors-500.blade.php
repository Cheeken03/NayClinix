@extends('layouts.blank', ['title' => '500 Error - Errors'])

@section('body')

    <!-- Top Bar -->
    <section class="top-bar">

        <!-- Brand -->
        <span class="brand">Yeti</span>
    </section>

    <div class="container flex items-center justify-center mt-20 py-10">
        <div class="w-full md:w-1/2 xl:w-1/3">
            <div class="mx-5 md:mx-10 text-center uppercase">
                <h1 class="text-9xl font-bold">500</h1>
                <h2 class="text-primary mt-5">Something Went Wrong</h2>
                <h5 class="mt-2">Sorry, it’s me, not you</h5>
                <a href="{{ url('/') }}" class="btn btn_outlined btn_primary mt-5">Go Back</a>
                <a href="{{ url('/') }}" class="btn btn_primary mt-5 ltr:ml-2 rtl:mr-2">Retry</a>
            </div>
        </div>
    </div>

@endsection
