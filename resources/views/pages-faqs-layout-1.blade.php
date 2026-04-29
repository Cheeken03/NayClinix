@extends('layouts.master', ['title' => 'FAQs - Layout 1 - Pages'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>FAQs</h1>
        <ul>
            <li><a href="#no-link">Pages</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">FAQs</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Layout 1</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-4 gap-5">

        <!-- Categories -->
        <div class="lg:col-span-2 xl:col-span-1">
            <div class="card p-5">
                <h3>Categories</h3>
                <div class="mt-5 leading-normal">
                    <a href="#no-link" class="flex items-center text-normal">
                        <span class="la la-laptop text-muted text-2xl ltr:mr-2 rtl:ml-2"></span>
                        Questions Regarding Potato
                    </a>
                    <a href="#no-link" class="flex items-center text-normal">
                        <span class="la la-apple-alt text-muted text-2xl ltr:mr-2 rtl:ml-2"></span>
                        Fruits
                    </a>
                    <hr class="my-2">
                    <a href="#no-link" class="flex items-center text-normal">
                        <span class="la la-egg text-muted text-2xl ltr:mr-2 rtl:ml-2"></span>
                        Tomato
                    </a>
                    <a href="#no-link" class="flex items-center text-normal">
                        <span class="la la-hamburger text-muted text-2xl ltr:mr-2 rtl:ml-2"></span>
                        Onions Have Skin?
                    </a>
                    <hr class="my-2">
                    <a href="#no-link" class="flex items-center text-normal">
                        <span class="la la-lemon text-muted text-2xl ltr:mr-2 rtl:ml-2"></span>
                        We Know Nothing
                    </a>
                </div>
            </div>
        </div>

        <!-- FAQs -->
        <div class="flex flex-col gap-y-5 lg:col-span-2 xl:col-span-3">
            <div class="card p-5">
                <h3>Questions Regarding Potato</h3>
                <div class="accordion border border-divider rounded-xl mt-5">
                    <h5 class="accordion-header p-5" data-toggle="collapse" data-target="#faqs-1">
                        Who Created Potato
                        <span class="collapsible-indicator la la-arrow-circle-down"></span>
                    </h5>
                    <div id="faqs-1" class="collapsible">
                        <div class="p-5 pt-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam iure
                            rem sed dicta ut a perspiciatis temporibus! Repudiandae quidem eaque unde culpa
                            molestias neque dolores assumenda magnam, ut doloremque iste.</div>
                    </div>
                    <hr>
                    <h5 class="accordion-header p-5" data-toggle="collapse" data-target="#faqs-1-2">
                        We Want Potato
                        <span class="collapsible-indicator la la-arrow-circle-down"></span>
                    </h5>
                    <div id="faqs-1-2" class="collapsible">
                        <div class="p-5 pt-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam iure
                            rem sed dicta ut a perspiciatis temporibus! Repudiandae quidem eaque unde culpa
                            molestias neque dolores assumenda magnam, ut doloremque iste.</div>
                    </div>
                    <hr>
                    <h5 class="accordion-header p-5 active" data-toggle="collapse" data-target="#faqs-1-3">
                        Where To Buy Potato
                        <span class="collapsible-indicator la la-arrow-circle-down"></span>
                    </h5>
                    <div id="faqs-1-3" class="collapsible open">
                        <div class="p-5 pt-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam iure
                            rem sed dicta ut a perspiciatis temporibus! Repudiandae quidem eaque unde culpa
                            molestias neque dolores assumenda magnam, ut doloremque iste.</div>
                    </div>
                </div>
            </div>
            <div class="card p-5">
                <h3>Fruits</h3>
                <div class="accordion border border-divider rounded-xl mt-5">
                    <h5 class="accordion-header p-5" data-toggle="collapse" data-target="#faqs-2">
                        Who Created Potato
                        <span class="collapsible-indicator la la-arrow-circle-down"></span>
                    </h5>
                    <div id="faqs-2" class="collapsible">
                        <div class="p-5 pt-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam iure
                            rem sed dicta ut a perspiciatis temporibus! Repudiandae quidem eaque unde culpa
                            molestias neque dolores assumenda magnam, ut doloremque iste.</div>
                    </div>
                    <hr>
                    <h5 class="accordion-header p-5" data-toggle="collapse" data-target="#faqs-2-2">
                        We Want Potato
                        <span class="collapsible-indicator la la-arrow-circle-down"></span>
                    </h5>
                    <div id="faqs-2-2" class="collapsible">
                        <div class="p-5 pt-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam iure
                            rem sed dicta ut a perspiciatis temporibus! Repudiandae quidem eaque unde culpa
                            molestias neque dolores assumenda magnam, ut doloremque iste.</div>
                    </div>
                    <hr>
                    <h5 class="accordion-header p-5 active" data-toggle="collapse" data-target="#faqs-2-3">
                        Where To Buy Potato
                        <span class="collapsible-indicator la la-arrow-circle-down"></span>
                    </h5>
                    <div id="faqs-2-3" class="collapsible open">
                        <div class="p-5 pt-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam iure
                            rem sed dicta ut a perspiciatis temporibus! Repudiandae quidem eaque unde culpa
                            molestias neque dolores assumenda magnam, ut doloremque iste.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
