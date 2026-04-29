@extends('layouts.master', ['title' => 'Chat - Applications', 'footer' => false, 'workspaceClasses' => 'pb-32'])

@section('workspace')

    <!-- Header -->
    <section class="flex items-center lg:justify-end mb-5">
        <div class="avatar w-16 h-16 ltr:mr-5 rtl:ml-5">
            <div class="status bg-success"></div>
            <img src="{{ Vite::asset('resources/images/images/potato.jpg') }}">
        </div>
        <div>
            <h5>Potato Bahadur</h5>
            <p>Last seen today 2:20PM</p>
        </div>
    </section>

    <hr class="dark:border-gray-800 mb-8">

    <!-- Chats -->
    <div class="relative flex-grow">
        <div class="absolute flex flex-col gap-5 w-full top-0 bottom-0 overflow-y-scroll">

            <!-- Received -->
            <div class="card flex items-start w-11/12 p-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                <span
                    class="whitespace-nowrap ltr:ml-auto rtl:mr-auto ltr:text-right rtl:text-left ltr:pl-5 rtl:pr-5 text-muted">Yesterday
                    2:20PM</span>
            </div>
            <div class="card flex items-start w-11/12 p-5">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                labore et dolore magna aliquyam erat, sed diam
                <span
                    class="whitespace-nowrap ltr:ml-auto rtl:mr-auto ltr:text-right rtl:text-left ltr:pl-5 rtl:pr-5 text-muted">Yesterday
                    2:20PM</span>
            </div>
            <div class="card flex items-start w-11/12 p-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                <span
                    class="whitespace-nowrap ltr:ml-auto rtl:mr-auto ltr:text-right rtl:text-left ltr:pl-5 rtl:pr-5 text-muted">Yesterday
                    2:20PM</span>
            </div>

            <!-- Sent -->
            <div class="card flex items-start w-11/12 ltr:ml-auto rtl:mr-auto p-5 bg-primary text-component">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                <span
                    class="whitespace-nowrap ltr:ml-auto rtl:mr-auto ltr:text-right rtl:text-left ltr:pl-5 rtl:pr-5">Yesterday
                    2:20PM</span>
            </div>
            <div class="card flex items-start w-11/12 ltr:ml-auto rtl:mr-auto p-5 bg-primary text-component">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                labore et dolore magna aliquyam erat, sed diam
                <span
                    class="whitespace-nowrap ltr:ml-auto rtl:mr-auto ltr:text-right rtl:text-left ltr:pl-5 rtl:pr-5">Yesterday
                    2:20PM</span>
            </div>
            <div class="card flex items-start w-11/12 ltr:ml-auto rtl:mr-auto p-5 bg-primary text-component">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                <span
                    class="whitespace-nowrap ltr:ml-auto rtl:mr-auto ltr:text-right rtl:text-left ltr:pl-5 rtl:pr-5">Yesterday
                    2:20PM</span>
            </div>
        </div>
    </div>

    <!-- Footer Bar - Send Message -->
    <div class="footer-bar absolute">
        <input class="flex flex-auto ltr:mr-5 rtl:ml-5 bg-transparent outline-none placeholder:text-placeholder"
            placeholder="Enter message...">
        <div class="flex sm:flex-wrap gap-5 ltr:ml-auto rtl:mr-auto">
            <button class="btn btn-icon btn-icon_large btn_outlined btn_primary">
                <span class="la la-paperclip text-xl leading-none"></span>
            </button>
            <button class="btn btn_primary uppercase">
                <span class="la la-paper-plane text-xl leading-none ltr:mr-2 rtl:ml-2"></span>
                Send
            </button>
        </div>
    </div>

@endsection

@section('sidebar')


    <div class="overflow-y-auto">

        <!-- Tabs -->
        <div class="tabs p-5">
            <nav class="tab-nav mt-5">
                <button class="nav-link h5 uppercase active" data-toggle="tab"
                    data-target="#tab-1">Messages</button>
                <button class="nav-link h5 uppercase" data-toggle="tab" data-target="#tab-2">Contacts</button>
            </nav>
            <div class="tab-content mt-5">

                <!-- Messages -->
                <div id="tab-1" class="collapsible open">

                    <!-- Search -->
                    <form class="flex  mb-5">
                        <label class="form-control-addon-within rounded-full">
                            <input class="form-control border-none" placeholder="Search">
                            <button
                                class="text-gray-300 dark:text-gray-700 text-xl leading-none la la-search ltr:mr-4 rtl:ml-4"></button>
                        </label>
                    </form>

                    <div class="flex items-center py-5">
                        <div class="avatar w-16 h-16 ltr:mr-5 rtl:ml-5">
                            <div class="status bg-success"></div>
                            <img src="{{ Vite::asset('resources/images/images/potato.jpg') }}">
                        </div>
                        <div>
                            <h5>Potato Bahadur</h5>
                            <p>Lorem ispum dolot is sit</p>
                        </div>
                        <small class="ltr:ml-auto rtl:mr-auto ltr:pl-5 rtl:pr-5">2:22PM</small>
                    </div>
                    <hr>
                    <div class="flex items-center py-5">
                        <div class="avatar w-16 h-16 ltr:mr-5 rtl:ml-5">
                            <div class="status bg-success"></div>
                            <img src="{{ Vite::asset('resources/images/images/tomato.jpg') }}">
                        </div>
                        <div>
                            <h5>Tomato Prashad</h5>
                            <p>Lorem ispum dolot is sit</p>
                        </div>
                        <small class="ltr:ml-auto rtl:mr-auto ltr:pl-5 rtl:pr-5">1:00PM</small>
                    </div>
                    <hr>
                    <div class="flex items-center py-5">
                        <div class="avatar w-16 h-16 ltr:mr-5 rtl:ml-5">
                            <img src="{{ Vite::asset('resources/images/images/breakfast.jpg') }}">
                        </div>
                        <div>
                            <h5>Onion Kale</h5>
                            <p>Lorem ispum dolot is sit</p>
                        </div>
                        <small class="ltr:ml-auto rtl:mr-auto ltr:pl-5 rtl:pr-5">3:30PM</small>
                    </div>
                </div>

                <!-- Contacts -->
                <div id="tab-2" class="collapsible">
                    <div class="flex items-center py-5">
                        <div class="avatar w-16 h-16 ltr:mr-5 rtl:ml-5">
                            <div class="status bg-success"></div>
                            <img src="{{ Vite::asset('resources/images/images/potato.jpg') }}">
                        </div>
                        <div>
                            <h5>Potato Bahadur</h5>
                            <p>Last seen today 2:20PM</p>
                        </div>
                    </div>
                    <hr>
                    <div class="flex items-center py-5">
                        <div class="avatar w-16 h-16 ltr:mr-5 rtl:ml-5">
                            <div class="status bg-warning"></div>
                            <img src="{{ Vite::asset('resources/images/images/tomato.jpg') }}">
                        </div>
                        <div>
                            <h5>Tomato Prashad</h5>
                            <p>Last seen today 2:20PM</p>
                        </div>
                    </div>
                    <hr>
                    <div class="flex items-center py-5">
                        <div class="avatar w-16 h-16 ltr:mr-5 rtl:ml-5">
                            <div class="status bg-success"></div>
                            <img src="{{ Vite::asset('resources/images/images/breakfast.jpg') }}">
                        </div>
                        <div>
                            <h5>Onion Kale</h5>
                            <p>Last seen today 2:20PM</p>
                        </div>
                    </div>
                    <hr>
                    <div class="flex items-center py-5">
                        <div class="avatar w-16 h-16 ltr:mr-5 rtl:ml-5">
                            <div class="status bg-success"></div>
                            <img src="{{ Vite::asset('resources/images/images/potato.jpg') }}">
                        </div>
                        <div>
                            <h5>Potato Bahadur</h5>
                            <p>Last seen today 2:20PM</p>
                        </div>
                    </div>
                    <hr>
                    <div class="flex items-center py-5">
                        <div class="avatar w-16 h-16 ltr:mr-5 rtl:ml-5">
                            <div class="status bg-danger"></div>
                            <img src="{{ Vite::asset('resources/images/images/tomato.jpg') }}">
                        </div>
                        <div>
                            <h5>Tomato Prashad</h5>
                            <p>Last seen today 2:20PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
