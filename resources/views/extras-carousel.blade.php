@extends('layouts.master', ['title' => 'Carousel - Extras - UI', 'workspaceClasses' => 'overflow-hidden'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Carousel</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Extras</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Carousel</li>
        </ul>
    </section>

    <div class="card p-5">
        <h3>Style 1</h3>
        <div id="carousel-style-1" class="glide mt-5">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides">
                    <div class="glide__slide">
                        <div class="border border-divider rounded-lg px-4 py-8 text-center">
                            <span class="text-primary text-5xl leading-none la la-sun"></span>
                            <p class="mt-2">Published Posts</p>
                            <div class="text-primary mt-5 text-3xl leading-none">18</div>
                        </div>
                    </div>
                    <div class="glide__slide">
                        <div class="border border-divider rounded-lg px-4 py-8 text-center">
                            <span class="text-primary text-5xl leading-none la la-cloud"></span>
                            <p class="mt-2">Pending Posts</p>
                            <div class="text-primary mt-5 text-3xl leading-none">16</div>
                        </div>
                    </div>
                    <div class="glide__slide">
                        <div class="border border-divider rounded-lg px-4 py-8 text-center">
                            <span class="text-primary text-5xl leading-none la la-layer-group"></span>
                            <p class="mt-2">Categories</p>
                            <div class="text-primary mt-5 text-3xl leading-none">9</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><span
                        class="la la-arrow-left"></span></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><span
                        class="la la-arrow-right"></span></button>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('build/js/glide.min.js') }}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script> -->

@endsection
