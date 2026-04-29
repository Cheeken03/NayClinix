@extends('layouts.master', ['title' => 'Tabs - Components - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Tabs</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Components</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Tabs</li>
        </ul>
    </section>

    <!-- Tabs -->
    <div class="grid lg:grid-cols-2 gap-5">
        <div class="card p-5">
            <h3>Tabs</h3>
            <div class="tabs mt-5">
                <nav class="tab-nav">
                    <button class="nav-link h5 uppercase active" data-toggle="tab" data-target="#tab-1">Tab
                        One</button>
                    <button class="nav-link h5 uppercase" data-toggle="tab" data-target="#tab-2">Tab
                        Two</button>
                    <button class="nav-link h5 uppercase" data-toggle="tab" data-target="#tab-3">Tab
                        Three</button>
                </nav>
                <div class="tab-content mt-5">
                    <div id="tab-1" class="collapsible open">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi veritatis officiis,
                        quidem placeat autem nihil voluptatem velit quaerat adipisci veniam iste. Quae odio sint
                        dolorum aliquid eos numquam est ducimus! Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Itaque enim alias odit facilis, necessitatibus quam nulla! Sapiente
                        nostrum nulla ut, aspernatur nisi unde enim quas ipsam laudantium excepturi vel
                        consequuntur.
                    </div>
                    <div id="tab-2" class="collapsible">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi veritatis officiis,
                        quidem placeat autem nihil voluptatem velit quaerat adipisci veniam iste. Quae odio sint
                        dolorum aliquid eos numquam est ducimus! Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Itaque enim alias odit facilis, necessitatibus quam nulla! Sapiente
                        nostrum nulla ut, aspernatur nisi unde enim quas ipsam laudantium excepturi vel
                        consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi veritatis
                        officiis, quidem placeat autem nihil voluptatem velit quaerat adipisci veniam iste. Quae
                        odio sint dolorum aliquid eos numquam est ducimus! Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit. Itaque enim alias odit facilis, necessitatibus quam nulla!
                        Sapiente nostrum nulla ut, aspernatur nisi unde enim quas ipsam laudantium excepturi vel
                        consequuntur.
                    </div>
                    <div id="tab-3" class="collapsible">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi veritatis officiis,
                        quidem placeat autem nihil voluptatem velit quaerat adipisci veniam iste. Quae odio sint
                        dolorum aliquid eos numquam est ducimus! Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Itaque enim alias odit facilis, necessitatibus quam nulla! Sapiente
                        nostrum nulla ut, aspernatur nisi unde enim quas ipsam laudantium excepturi vel
                        consequuntur.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
