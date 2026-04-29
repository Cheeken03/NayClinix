@extends('layouts.master', ['title' => 'Validations - Form - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Validations</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Form</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Validations</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-3 gap-5">
        <div class="flex flex-col gap-y-5">

            <!-- Input -->
            <div class="card p-5">
                <h3>Input</h3>
                <div class="mt-5">
                    <label class="label block mb-2" for="input">Label</label>
                    <input id="input" class="form-control is-invalid" placeholder="Enter text here">
                    <small class="block mt-2 invalid-feedback">This is help text.</small>
                </div>
            </div>

            <!-- Custom Select -->
            <div class="card p-5">
                <h3>Custom Select</h3>
                <div class="mt-5">
                    <div class="custom-select">
                        <select class="form-control is-invalid">
                            <option>Select</option>
                            <option>Option</option>
                        </select>
                        <div class="custom-select-icon la la-caret-down"></div>
                    </div>
                </div>
            </div>

            <!-- Textarea -->
            <div class="card p-5">
                <h3>Textarea</h3>
                <div class="mt-5">
                    <textarea class="form-control is-invalid" rows="5"></textarea>
                </div>
            </div>
        </div>

        <div>

            <!-- Custom Input -->
            <div class="card p-5">
                <h3>Custom Input</h3>
                <h4 class="mt-5 uppercase">Checkbox</h4>
                <div class="mt-5">
                    <label class="custom-checkbox is-invalid">
                        <input type="checkbox">
                        <span></span>
                        <span>Checkbox</span>
                    </label>
                </div>
                <h4 class="mt-10 uppercase">Radio</h4>
                <div class="mt-5">
                    <label class="custom-radio is-invalid">
                        <input type="radio" name="radio">
                        <span></span>
                        <span>Radio</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

@endsection
