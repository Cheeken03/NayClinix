@extends('layouts.master', ['title' => 'Editors - Extras - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Editors</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Extras</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Editors</li>
        </ul>
    </section>

    <!-- CKEditor -->
    <div class="card p-5">
        <h3>CKEditor</h3>
        <div class="mt-5">
            <textarea id="ckeditor"></textarea>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('build/js/ckeditor.js') }}"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js') }}"></script> -->

@endsection
