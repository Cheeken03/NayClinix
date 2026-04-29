@extends('layouts.master', ['title' => 'Dashboard'])

@section('workspace')

   <div class="container mt-0">
  <h1 class="text-center">🍽 Double D Kitchen Menu</h1>

  <div class="row g-0 mt-3">
    <!-- Menu Item -->
    <div class="col-md-4 px-5 mb-10 hover:drop-shadow-xl/25 fill-white  transition duration-700 ease-in-out cursor-pointer">
      <div class="card shadow-sm h-80">
        <!-- <img src="https://source.unsplash.com/400x300/?pizza" class="card-img-top" alt="Pizza"> -->
        <img src="{{ Vite::asset('resources/images/eba.jpg') }}" class="card-img-top" alt="Logo">
        <div class="card-body">
            <h5 class="card-title">Eba & Egusi</h5>
            <p class="card-text text-muted">Classic eba with fresh egusi soup and beef.</p>
            <h6 class="text-success">$12.99</h6>
            <div class="form-input mt-20 text-center">
                <x-primary-button class="uppercase">
                    {{ __('Order Now') }}
                </x-primary-button>
            </div>
        </div>
      </div>
    </div>

    <!-- Menu Item -->
    <div class="col-md-4 px-5 mb-10 hover:drop-shadow-xl/25 fill-white hover:border-secondary transition duration-700 ease-in-out cursor-pointer">
      <div class="card shadow-sm h-80">
       <img src="{{ Vite::asset('resources/images/rice.jpg') }}" class="card-img-top" alt="Logo">
        <div class="card-body">
            <h5 class="card-title">Rice & Stew</h5>
            <p class="card-text text-muted">Hot rice and stew with chicken.</p>
            <h6 class="text-success">$9.99</h6>
           <div class="form-input mt-20 text-center">
                <x-primary-button class="uppercase">
                    {{ __('Order Now') }}
                </x-primary-button>
            </div>
        </div>
      </div>
    </div>

    <!-- Menu Item -->
    <div class="col-md-4 px-5 mb-10 hover:drop-shadow-xl/25 fill-white hover:border-secondary transition duration-700 ease-in-out cursor-pointer">
      <div class="card shadow-sm h-80">
       <img src="{{ Vite::asset('resources/images/indomie_egg.jpg') }}" class="card-img-top" alt="Logo">
        <div class="card-body">
            <h5 class="card-title">Indomie and egg</h5>
            <p class="card-text text-muted">Delicious indomie with fried eggs.</p>
            <h6 class="text-success">$11.50</h6>
            <div class="form-input mt-20 text-center">
                <x-primary-button class="uppercase">
                    {{ __('Order Now') }}
                </x-primary-button>
            </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('scripts')

    <script src="{{ asset('build/js/chart.umd.js') }}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@34.3.3"></script> -->

@endsection
