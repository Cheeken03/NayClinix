@extends('layouts.master', ['title' => 'Alerts - Components - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Alerts</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Components</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Alerts</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-2 gap-5">

        <!-- Default -->
        <div class="card p-5 flex flex-col gap-y-5">
            <h3>Default</h3>
            <div class="alert alert_primary">
                <strong class="uppercase"><bdi>Hello!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
            <div class="alert alert_secondary">
                <strong class="uppercase"><bdi>Hello!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
            <div class="alert alert_success">
                <strong class="uppercase"><bdi>Success!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
            <div class="alert alert_danger">
                <strong class="uppercase"><bdi>Danger!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
            <div class="alert alert_warning">
                <strong class="uppercase"><bdi>Warning!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
            <div class="alert alert_info">
                <strong class="uppercase"><bdi>Info!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
        </div>

        <!-- Outlined -->
        <div class="card p-5 flex flex-col gap-y-5">
            <h3>Outlined</h3>
            <div class="alert alert_outlined alert_primary">
                <strong class="uppercase"><bdi>Hello!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
            <div class="alert alert_outlined alert_secondary">
                <strong class="uppercase"><bdi>Hello!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
            <div class="alert alert_outlined alert_success">
                <strong class="uppercase"><bdi>Success!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
            <div class="alert alert_outlined alert_danger">
                <strong class="uppercase"><bdi>Danger!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
            <div class="alert alert_outlined alert_warning">
                <strong class="uppercase"><bdi>Warning!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
            <div class="alert alert_outlined alert_info">
                <strong class="uppercase"><bdi>Info!</bdi></strong>
                This is an alert message.
                <button class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
        </div>
    </div>

@endsection
