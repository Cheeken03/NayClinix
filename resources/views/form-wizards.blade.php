@extends('layouts.master', ['title' => 'Wizards - Form - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Wizards</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Form</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Wizards</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-2 gap-5">

        <!-- Style 1 -->
        <div>
            <h3>Style 1</h3>
            <div class="card mt-5 p-5">
                <div class="tabs wizard">
                    <nav class="tab-nav">
                        <button class="nav-link h5 active" data-toggle="tab" data-target="#tab-1">
                            Step 1
                            <small>First step description</small>
                        </button>
                        <button class="nav-link h5" data-toggle="tab" data-target="#tab-2">
                            Step 2
                            <small>Second step description</small>
                        </button>
                        <button class="nav-link h5" data-toggle="tab" data-target="#tab-3">
                            Step 3
                            <small>Third step description</small>
                        </button>
                    </nav>
                    <div class="tab-content mt-5">
                        <div id="tab-1" class="collapsible open">
                            <div class="mb-5">
                                <label class="label block mb-2" for="email">Email</label>
                                <input id="email" class="form-control" placeholder="example@example.com">
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="password">Password</label>
                                <input id="password" type="password" class="form-control" value="12345">
                            </div>
                        </div>
                        <div id="tab-2" class="collapsible">
                            Step 2 Content
                        </div>
                        <div id="tab-3" class="collapsible">
                            Step 3 Content
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="btn-group">
                            <button class="btn btn_primary uppercase" data-toggle="wizard"
                                data-direction="previous">Previous</button>
                            <button class="btn btn_primary uppercase" data-toggle="wizard"
                                data-direction="next">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Style 2 -->
        <div>
            <h3>Style 2</h3>
            <div class="card mt-5 p-5">
                <div class="tabs wizard wizard-style-2">
                    <nav class="tab-nav">
                        <button class="nav-link h5 active" data-toggle="tab" data-target="#tab-style-2-1">
                            Step 1
                            <small>First step description</small>
                        </button>
                        <button class="nav-link h5" data-toggle="tab" data-target="#tab-style-2-2">
                            Step 2
                            <small>Second step description</small>
                        </button>
                        <button class="nav-link h5" data-toggle="tab" data-target="#tab-style-2-3">
                            Step 3
                            <small>Third step description</small>
                        </button>
                    </nav>
                    <div class="tab-content mt-8">
                        <div id="tab-style-2-1" class="collapsible open">
                            <div class="mb-5">
                                <label class="label block mb-2" for="email-2">Email</label>
                                <input id="email-2" class="form-control" placeholder="example@example.com">
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="password-2">Password</label>
                                <input id="password-2" type="password" class="form-control" value="12345">
                            </div>

                        </div>
                        <div id="tab-style-2-2" class="collapsible">
                            Step 2 Content
                        </div>
                        <div id="tab-style-2-3" class="collapsible">
                            Step 3 Content
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="btn-group">
                            <button class="btn btn_primary uppercase" data-toggle="wizard"
                                data-direction="previous">Previous</button>
                            <button class="btn btn_primary uppercase" data-toggle="wizard"
                                data-direction="next">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
