@extends('layouts.master', ['title' => 'Invoice - Pages'])

@section('workspace')

    <!-- Breadcrumb -->
    <div class="lg:flex items-start">
        <section class="breadcrumb">
            <h1>Invoice</h1>
            <ul>
                <li><a href="#no-link">Pages</a></li>
                <li class="divider la la-arrow-right"></li>
                <li>Invoice</li>
            </ul>
        </section>

        <div class="flex flex-wrap gap-2 items-center ltr:ml-auto rtl:mr-auto mb-5">
            <button class="btn btn_primary uppercase">
                <span class="la la-print text-xl leading-none ltr:mr-2 rtl:ml-2"></span>
                Print
            </button>
            <button class="btn btn_primary btn_outlined uppercase">
                <span class="la la-file-alt text-xl leading-none ltr:mr-2 rtl:ml-2"></span>
                Export PDF
            </button>
        </div>
    </div>

    <!-- Invoice -->
    <div class="card">
        <div class="p-10">
            <h2 class="uppercase text-4xl text-primary">Invoice</h2>
        </div>
        <hr>
        <div class="px-10 py-5 flex justify-between">
            <div><strong>Invoice No.:</strong> 122619</div>
            <div><strong>Date:</strong> 08/06/2021</div>
        </div>
        <hr>
        <div class="px-10 py-5 flex justify-between">
            <div>
                <h4 class="mb-2 uppercase">Invoice To</h4>
                <p class="leading-relaxed">Potato Johnes<br>
                    15 Hodges Mews, CA<br>
                    20205<br>
                    United States</p>
            </div>
            <div class="ltr:text-right rtl:text-left">
                <h4 class="mb-2 uppercase">Payment To</h4>
                <p class="leading-relaxed">Tomato Johnes<br>
                    15 Hodges Mews, CA<br>
                    20205<br>
                    United States</p>
            </div>
        </div>
        <hr>
        <div class="overflow-x-auto p-10">
            <table class="table table_list w-full">
                <thead>
                    <tr>
                        <th class="ltr:text-left rtl:text-right uppercase">Description</th>
                        <th class="w-px uppercase">Rate</th>
                        <th class="w-px uppercase">QTY</th>
                        <th class="w-px uppercase">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h5>Potato Fries</h5>
                            <p>Lorem ipsum dolor sit amet</p>
                        </td>
                        <td class="text-center">$10</td>
                        <td class="text-center">2</td>
                        <td class="text-center font-bold">$10</td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Tomato</h5>
                            <p>Consectetur adipiscing elit</p>
                        </td>
                        <td class="text-center">$10</td>
                        <td class="text-center">2</td>
                        <td class="text-center font-bold">$20</td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Onion</h5>
                            <p>Dolor sit amet</p>
                        </td>
                        <td class="text-center">$10</td>
                        <td class="text-center">2</td>
                        <td class="text-center font-bold">$10</td>
                    </tr>
                    <tr class="ltr:text-right rtl:text-left font-bold">
                        <td colspan="4">
                            Sub Total: $40
                            <br>
                            Tax: $5
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="p-10 ltr:text-right rtl:text-left">
            <h4 class="uppercase">Total</h4>
            <p class="text-4xl my-4">$45</p>
            <p>Forty Five Dollars Only</p>
        </div>
    </div>

@endsection
