@extends('layouts.master', ['title' => 'Services'])

@section('services')
    <section class="slider-area slider-one" 
    x-init="$el.querySelector(`[data-bs-target='#sponsorshipModal']`).click()"
    >
        <div class="bd-example">
            <div id="carouselOne" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselOne" data-slide-to="1"></li>
                    <li data-target="#carouselOne" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item bg_cover active" style="background: url('{{ Vite::asset('resources/images/medical.jpg') }}') center/cover no-repeat;">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-10 col-lg-7 col-sm-10">
                                        <h2 class="carousel-title">Together we can save lives ---- Support the MEDPIN free medical outreach</h2>
                                        <ul class="carousel-btn rounded-buttons">
                                            <li data-bs-toggle="modal" data-bs-target="#sponsorshipModal"><a class="main-btn rounded-three text-decoration-none" href="#">Sponsorship</a></li>
                                            <li data-bs-toggle="modal" data-bs-target="#supportModal"><a class="main-btn rounded-one text-decoration-none" href="#">Support</a></li>
                                        </ul>
                                       
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                    <x-modal action="sponsorship" title="Sponsorship & Partnership Form">
                        <livewire:sponsorship.sponsor-form>               
                    </x-modal>
                    <x-modal action="support" title="Support Form">
                        <livewire:support.support-form>               
                    </x-modal>

                    <!-- <div class="carousel-item bg_cover"  style="background: url('{{ Vite::asset('resources/images/medical3.jpg') }}') center/cover no-repeat;">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-7 col-sm-10">
                                        <h2 class="carousel-title">Free Medical & Health Care Services</h2>
                                        <ul class="carousel-btn rounded-buttons">
                                            <li><a class="main-btn rounded-three text-decoration-none" href="#">Sponsorship</a></li>
                                            <li><a class="main-btn rounded-one text-decoration-none" href="#">Support</a></li>
                                        </ul>
                                    </div>
                                </div> 
                            </div> 
                        </div> 
                    </div> -->

                    <!-- <div class="carousel-item bg_cover" style="background-image: url(assets/images/slider/slider-one/3.jpg)">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-7 col-sm-10">
                                        <h2 class="carousel-title">Your Health Is Our Priority</h2>
                                        <ul class="carousel-btn rounded-buttons">
                                            <li><a class="main-btn rounded-three text-decoration-none" href="#">Sponsorship</a></li>
                                            <li><a class="main-btn rounded-one text-decoration-none" href="#">Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>  -->
                </div> 

                <!-- <a class="carousel-control-prev text-decoration-none" href="#carouselOne" role="button" data-slide="prev">
                    <i class="lni-arrow-left-circle"></i>
                </a>

                <a class="carousel-control-next text-decoration-none" href="#carouselOne" role="button" data-slide="next">
                    <i class="lni-arrow-right-circle"></i>
                </a> -->
            </div> <!-- carousel -->
        </div> <!-- bd-example -->

    </section>

    <!-- <section class="features-area features-one">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Become a Sponsor</h3>
                        <p class="text">Support the Medpin Medical Outreach 2025 to promote accessible healthcare for families and communities in Lagos and beyond.</p>
                    </div> 
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features text-center mt-40">
                        <div class="features-icon">
                            <i class="lni-school-compass"></i>
                            <img class="shape" src="assets/images/features/f-shape-1.svg" alt="Shape">
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#" class="text-decoration-none">Platinum Sponsor</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                            <div class="features-btn rounded-buttons">
                                <a class="main-btn rounded-one text-decoration-none" href="#">KNOW MORE</a>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features text-center mt-40">
                        <div class="features-icon">
                            <i class="lni-construction"></i>
                            <img class="shape" src="assets/images/features/f-shape-1.svg" alt="Shape">
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#" class="text-decoration-none">Gold Sponsor</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                            <div class="features-btn rounded-buttons">
                                <a class="main-btn rounded-one text-decoration-none" href="#">KNOW MORE</a>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features text-center mt-40">
                        <div class="features-icon">
                            <i class="lni-cup"></i>
                            <img class="shape" src="assets/images/features/f-shape-1.svg" alt="Shape">
                        </div>
                        <div class="features-content">
                            <h4 class="features-title"><a href="#" class="text-decoration-none">Silver Sponsor</a></h4>
                            <p class="text">Short description for the ones who look for something new. Awesome!</p>
                            <div class="features-btn rounded-buttons">
                                <a class="main-btn rounded-one text-decoration-none" href="#">KNOW MORE</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section> -->

    <x-footer></x-footer>

@endsection