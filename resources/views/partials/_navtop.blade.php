
<section class="navbar-area navbar-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg justify-content-between d-flex">
                    <div class="d-flex">
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo-5.svg" alt="Logo">
                        </a>
                        <span></span>
                        <div class="text-xl text-white font-bold mt-4">NayClinx</div>
                    </div>
                    
                    @if(!isset($type) || $type != 'top-only')
                        <!-- Menu Toggler -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                       
                    @endif

                
                    <div class="" id="navbarOne">
                        <!-- Livewire nav menu -->
                        <livewire:partials.navtop />
                    </div>
                        

                </nav>

                
            </div>
        </div>
    </div>
</section>

