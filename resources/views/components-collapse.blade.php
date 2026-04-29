@extends('layouts.master', ['title' => 'Collapse - Components - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Collapse</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Components</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Collapse</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-2 gap-5">

        <!-- Collapse -->
        <div class="card p-5">
            <h3>Collapse</h3>
            <div class="mt-5">
                <button class="btn btn_primary uppercase" data-toggle="collapse"
                    data-target='#exampleCollapse'>Toggle Collapse</button>
                <div id="exampleCollapse" class="collapsible multiple-collapse">
                    <div class="border border-divider rounded-xl mt-5 p-5">Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Voluptatibus accusamus porro eos soluta!
                        Debitis ab quis nam sed, dolorum dolore illum qui iure eius voluptatum nemo accusamus
                        blanditiis neque id.</div>
                </div>
                <button class="btn btn_primary uppercase mt-5 active" data-toggle="collapse"
                    data-target='#exampleCollapse2'>Toggle Collapse</button>
                <div id="exampleCollapse2" class="collapsible multiple-collapse open">
                    <div class="border border-divider rounded-xl mt-5 p-5">Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Voluptatibus accusamus porro eos soluta!
                        Debitis ab quis nam sed, dolorum dolore illum qui iure eius voluptatum nemo accusamus
                        blanditiis neque id.</div>
                </div>
                <button class="btn btn_primary uppercase mt-5" data-toggle="collapse"
                    data-target='.multiple-collapse'>Toggle Collapse All</button>
            </div>
        </div>

        <!-- Accordion -->
        <div class="card p-5">
            <h3>Accordion</h3>
            <div class="accordion border border-divider rounded-xl mt-5">
                <h5 class="accordion-header p-5" data-toggle="collapse" data-target="#accordion">
                    Accordion Title #1
                    <span class="collapsible-indicator la la-arrow-circle-down"></span>
                </h5>
                <div id="accordion" class="collapsible">
                    <div class="p-5 pt-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam iure
                        rem sed dicta ut a perspiciatis temporibus! Repudiandae quidem eaque unde culpa
                        molestias neque dolores assumenda magnam, ut doloremque iste.</div>
                </div>
                <hr>
                <h5 class="accordion-header p-5" data-toggle="collapse" data-target="#accordion-2">
                    Accordion Title #2
                    <span class="collapsible-indicator la la-arrow-circle-down"></span>
                </h5>
                <div id="accordion-2" class="collapsible">
                    <div class="p-5 pt-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam iure
                        rem sed dicta ut a perspiciatis temporibus! Repudiandae quidem eaque unde culpa
                        molestias neque dolores assumenda magnam, ut doloremque iste.</div>
                </div>
                <hr>
                <h5 class="accordion-header p-5 active" data-toggle="collapse" data-target="#accordion-3">
                    Accordion Title #3
                    <span class="collapsible-indicator la la-arrow-circle-down"></span>
                </h5>
                <div id="accordion-3" class="collapsible open">
                    <div class="p-5 pt-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam iure
                        rem sed dicta ut a perspiciatis temporibus! Repudiandae quidem eaque unde culpa
                        molestias neque dolores assumenda magnam, ut doloremque iste.</div>
                </div>
            </div>
        </div>
    </div>

@endsection
