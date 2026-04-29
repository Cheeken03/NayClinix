@extends('layouts.master', ['title' => 'Tables - Components - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Tables</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Components</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Tables</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-2 gap-5">
        <div class="flex flex-col gap-y-5">

            <!-- Basic -->
            <div class="card p-5">
                <h3>Basic</h3>
                <table class="table w-full mt-3">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right uppercase">#</th>
                            <th class="ltr:text-left rtl:text-right uppercase">First</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Last</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Bordered -->
            <div class="card p-5">
                <h3>Bordered</h3>
                <table class="table table_bordered w-full mt-3">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right uppercase">#</th>
                            <th class="ltr:text-left rtl:text-right uppercase">First</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Last</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Hoverable -->
            <div class="card p-5">
                <h3>Hoverable</h3>
                <table class="table table_hoverable w-full mt-3">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right uppercase">#</th>
                            <th class="ltr:text-left rtl:text-right uppercase">First</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Last</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Striped -->
        <div class="flex flex-col gap-y-5">
            <div class="card p-5">
                <h3>Striped</h3>
                <table class="table table_striped w-full mt-3">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right uppercase">#</th>
                            <th class="ltr:text-left rtl:text-right uppercase">First</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Last</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Borderless -->
            <div class="card p-5">
                <h3>Borderless</h3>
                <table class="table table_borderless w-full mt-3">
                    <thead>
                        <tr>
                            <th class="ltr:text-left rtl:text-right uppercase">#</th>
                            <th class="ltr:text-left rtl:text-right uppercase">First</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Last</th>
                            <th class="ltr:text-left rtl:text-right uppercase">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@john</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
