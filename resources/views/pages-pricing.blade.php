@extends('layouts.master', ['title' => 'Pricing - Pages'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Pricing</h1>
        <ul>
            <li><a href="#no-link">Pages</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Pricing</li>
        </ul>
    </section>

    <!-- Pricing -->
    <div class="grid lg:grid-cols-3 xl:grid-cols-4 gap-5">
        <div class="card text-center">
            <div class="p-5">
                <h2 class="uppercase">Gold</h2>
                <h4 class="uppercase mt-2">For Small Projects</h4>
            </div>
            <div class="p-5 bg-background bg-opacity-50 dark:bg-opacity-50 uppercase text-primary">
                <div class="text-2xl font-bold mb-2">$15</div>
                <span class="border-t border-primary pt-1 text-xs">Monthly</span>
            </div>
            <div class="p-5">
                <a href="#no-link" class="btn btn_primary uppercase">Get Started</a>
            </div>
            <hr class="border-dashed">
            <div class="p-5">
                <ul class="leading-loose">
                    <li>Upto 5 Users</li>
                    <li>Max 100 Items</li>
                    <li>500 Queries To Database</li>
                    <li>Basic Statistics</li>
                    <li>Email Support</li>
                </ul>
            </div>
        </div>
        <div class="card text-center">
            <div class="p-5">
                <h2 class="uppercase">Diamond</h2>
                <h4 class="uppercase mt-2">For Medium Projects</h4>
            </div>
            <div class="p-5 bg-background bg-opacity-50 dark:bg-opacity-50 uppercase text-primary">
                <div class="text-2xl font-bold mb-2">$25</div>
                <span class="border-t border-primary pt-1 text-xs">Monthly</span>
            </div>
            <div class="p-5">
                <a href="#no-link" class="btn btn_primary uppercase">Get Started</a>
            </div>
            <hr class="border-dashed">
            <div class="p-5">
                <ul class="leading-loose">
                    <li>Upto 5 Users</li>
                    <li>Max 100 Items</li>
                    <li>500 Queries To Database</li>
                    <li>Basic Statistics</li>
                    <li>Email Support</li>
                </ul>
            </div>
        </div>
        <div class="card text-center">
            <div class="p-5">
                <h2 class="uppercase">To The Moon</h2>
                <h4 class="uppercase mt-2">For Complex Projects</h4>
            </div>
            <div class="p-5 bg-background bg-opacity-50 dark:bg-opacity-50 uppercase text-primary">
                <div class="text-2xl font-bold mb-2">$35</div>
                <span class="border-t border-primary pt-1 text-xs">Monthly</span>
            </div>
            <div class="p-5">
                <a href="#no-link" class="btn btn_primary uppercase">Get Started</a>
            </div>
            <hr class="border-dashed">
            <div class="p-5">
                <ul class="leading-loose">
                    <li>Upto 5 Users</li>
                    <li>Max 100 Items</li>
                    <li>500 Queries To Database</li>
                    <li>Basic Statistics</li>
                    <li>Email Support</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
