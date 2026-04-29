@extends('layouts.master', ['title' => 'Buttons - Components - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Buttons</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Components</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Buttons</li>
        </ul>
    </section>

    <!-- Default -->
    <div class="card p-5">
        <h3>Default</h3>
        <div class="flex flex-wrap gap-5 mt-5">
            <button class="btn btn_primary uppercase">Primary</button>
            <button class="btn btn_secondary uppercase">Secondary</button>
            <button class="btn btn_success uppercase">Success</button>
            <button class="btn btn_danger uppercase">Danger</button>
            <button class="btn btn_warning uppercase">Warning</button>
            <button class="btn btn_info uppercase">Info</button>
            <button disabled class="btn btn_primary uppercase">Disabled</button>
            <button class="btn btn_primary uppercase">
                <span class="la la-star ltr:mr-2 rtl:ml-2"></span>
                With Icon
            </button>
        </div>
    </div>

    <!-- Outlined -->
    <div class="card mt-5 p-5">
        <h3>Outlined</h3>
        <div class="flex flex-wrap gap-5 mt-5">
            <button class="btn btn_outlined btn_primary uppercase">Primary</button>
            <button class="btn btn_outlined btn_secondary uppercase">Secondary</button>
            <button class="btn btn_outlined btn_success uppercase">Success</button>
            <button class="btn btn_outlined btn_danger uppercase">Danger</button>
            <button class="btn btn_outlined btn_warning uppercase">Warning</button>
            <button class="btn btn_outlined btn_info uppercase">Info</button>
            <button disabled class="btn btn_outlined btn_primary uppercase">Disabled</button>
            <button class="btn btn_outlined btn_primary uppercase">
                <span class="la la-star ltr:mr-2 rtl:ml-2"></span>
                With Icon
            </button>
        </div>
    </div>

    <!-- Icon Default -->
    <div class="card mt-5 p-5">
        <h3>Icon Button Default</h3>
        <div class="flex flex-wrap gap-5 mt-5">
            <button class="btn btn-icon btn-icon_large btn_primary uppercase">
                <span class="la la-star"></span>
            </button>
            <button class="btn btn-icon btn-icon_large btn_secondary uppercase">
                <span class="la la-star"></span>
            </button>
            <button class="btn btn-icon btn-icon_large btn_success uppercase">
                <span class="la la-star"></span>
            </button>
            <button class="btn btn-icon btn-icon_large btn_danger uppercase">
                <span class="la la-star"></span>
            </button>
            <button class="btn btn-icon btn-icon_large btn_warning uppercase">
                <span class="la la-star"></span>
            </button>
            <button class="btn btn-icon btn-icon_large btn_info uppercase">
                <span class="la la-star"></span>
            </button>
            <button disabled class="btn btn-icon btn-icon_large btn_primary uppercase">
                <span class="la la-star"></span>
            </button>
        </div>
    </div>

    <!-- Icon Outlined -->
    <div class="card mt-5 p-5">
        <h3>Icon Button Outlined</h3>
        <div class="flex flex-wrap gap-5 mt-5">
            <button class="btn btn-icon btn-icon_large btn_outlined btn_primary uppercase">
                <span class="la la-star"></span>
            </button>
            <button class="btn btn-icon btn-icon_large btn_outlined btn_secondary uppercase">
                <span class="la la-star"></span>
            </button>
            <button class="btn btn-icon btn-icon_large btn_outlined btn_success uppercase">
                <span class="la la-star"></span>
            </button>
            <button class="btn btn-icon btn-icon_large btn_outlined btn_danger uppercase">
                <span class="la la-star"></span>
            </button>
            <button class="btn btn-icon btn-icon_large btn_outlined btn_warning uppercase">
                <span class="la la-star"></span>
            </button>
            <button class="btn btn-icon btn-icon_large btn_outlined btn_info uppercase">
                <span class="la la-star"></span>
            </button>
            <button disabled class="btn btn-icon btn-icon_large btn_outlined btn_primary uppercase">
                <span class="la la-star"></span>
            </button>
        </div>
    </div>

    <!-- Grouped -->
    <div class="card mt-5 p-5 flex flex-col gap-y-5">
        <h3>Grouped</h3>
        <div class="btn-group">
            <button class="btn btn_primary uppercase">L</button>
            <button class="btn btn_primary uppercase">C</button>
            <button class="btn btn_primary uppercase">R</button>
        </div>
        <div class="btn-group">
            <button class="btn btn_outlined btn_primary uppercase">L</button>
            <button class="btn btn_outlined btn_primary uppercase">C</button>
            <button class="btn btn_outlined btn_primary uppercase">R</button>
        </div>
        <div class="btn-group">
            <button class="btn btn_primary uppercase">L</button>
            <button class="btn btn_primary uppercase">L</button>
            <button class="btn btn_outlined btn_primary uppercase">R</button>
            <button class="btn btn_outlined btn_primary uppercase">R</button>
        </div>
        <div class="btn-group">
            <button class="btn btn_outlined btn_primary uppercase">L</button>
            <button class="btn btn_outlined btn_primary uppercase">L</button>
            <button class="btn btn_primary uppercase">R</button>
            <button class="btn btn_primary uppercase">R</button>
        </div>
    </div>

@endsection
