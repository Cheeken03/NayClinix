@extends('layouts.master', ['title' => 'Badges - Components - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Badges</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Components</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Badges</li>
        </ul>
    </section>

    <!-- Default -->
    <div class="card p-5">
        <h3>Default</h3>
        <div class="flex flex-wrap gap-5 mt-5">
            <div class="badge badge_primary uppercase">Primary</div>
            <div class="badge badge_secondary uppercase">Secondary</div>
            <div class="badge badge_success uppercase">Success</div>
            <div class="badge badge_danger uppercase">Danger</div>
            <div class="badge badge_warning uppercase">Warning</div>
            <div class="badge badge_info uppercase">Info</div>
        </div>
    </div>

    <!-- Outlined -->
    <div class="card mt-5 p-5">
        <h3>Outlined</h3>
        <div class="flex flex-wrap gap-5 mt-5">
            <div class="badge badge_outlined badge_primary uppercase">Primary</div>
            <div class="badge badge_outlined badge_secondary uppercase">Secondary</div>
            <div class="badge badge_outlined badge_success uppercase">Success</div>
            <div class="badge badge_outlined badge_danger uppercase">Danger</div>
            <div class="badge badge_outlined badge_warning uppercase">Warning</div>
            <div class="badge badge_outlined badge_info uppercase">Info</div>
        </div>
    </div>

@endsection
