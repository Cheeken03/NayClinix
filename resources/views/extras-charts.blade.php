@extends('layouts.master', ['title' => 'Charts - Extras - UI'])

@section('workspace')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Charts</h1>
        <ul>
            <li><a href="#no-link">UI</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#no-link">Extras</a></li>
            <li class="divider la la-arrow-right"></li>
            <li>Charts</li>
        </ul>
    </section>

    <div class="grid lg:grid-cols-2 gap-5">

        <!-- Area -->
        <div class="card p-5">
            <h3>Area</h3>
            <canvas id="areaChart" class="mt-5"></canvas>
        </div>

        <!-- Area With Shadow -->
        <div class="card p-5">
            <h3>Area With Shadow</h3>
            <canvas id="areaChartWithShadow" class="mt-5"></canvas>
        </div>

        <!-- Bar -->
        <div class="card p-5">
            <h3>Bar</h3>
            <canvas id="barChart" class="mt-5"></canvas>
        </div>

        <!-- Bar With Shadow -->
        <div class="card p-5">
            <h3>Bar With Shadow</h3>
            <canvas id="barChartWithShadow" class="mt-5"></canvas>
        </div>

        <!-- Line -->
        <div class="card p-5">
            <h3>Line</h3>
            <canvas id="lineChart" class="mt-5"></canvas>
        </div>

        <!-- Line With Shadow -->
        <div class="card p-5">
            <h3>Line With Shadow</h3>
            <canvas id="lineChartWithShadow" class="mt-5"></canvas>
        </div>


        <!-- Pie -->
        <div class="card p-5">
            <h3>Pie</h3>
            <div class="mt-5">
                <canvas id="pieChart"></canvas>
            </div>
        </div>

        <!-- Pie With Shadow -->
        <div class="card p-5">
            <h3>Pie With Shadow</h3>
            <div class="mt-5">
                <canvas id="pieChartWithShadow"></canvas>
            </div>
        </div>


        <!-- Doughnut -->
        <div class="card p-5">
            <h3>Doughnut</h3>
            <div class="mt-5">
                <canvas id="doughnutChart"></canvas>
            </div>
        </div>

        <!-- Doughnut With Shadow -->
        <div class="card p-5">
            <h3>Doughnut With Shadow</h3>
            <div class="mt-5">
                <canvas id="doughnutChartWithShadow"></canvas>
            </div>
        </div>


        <!-- Radar -->
        <div class="card p-5">
            <h3>Radar</h3>
            <div class="mt-5">
                <canvas id="radarChart"></canvas>
            </div>
        </div>

        <!-- Radar With Shadow -->
        <div class="card p-5">
            <h3>Radar With Shadow</h3>
            <div class="mt-5">
                <canvas id="radarChartWithShadow"></canvas>
            </div>
        </div>


        <!-- Polar -->
        <div class="card p-5">
            <h3>Polar</h3>
            <div class="mt-5">
                <canvas id="polarChart"></canvas>
            </div>
        </div>

        <!-- Polar With Shadow -->
        <div class="card p-5">
            <h3>Polar With Shadow</h3>
            <div class="mt-5">
                <canvas id="polarChartWithShadow"></canvas>
            </div>
        </div>

        <!-- Line With Annotation -->
        <div class="card p-5">
            <h3>Line With Annotation</h3>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-5 mt-5">
                <div class="card p-5">
                    <h6 class="chart-heading uppercase"></h6>
                    <h4 class="chart-value text-2xl mt-2"></h4>
                    <small class="chart-label uppercase"></small>
                    <canvas id="lineWithAnnotationChart1" class="mt-5"></canvas>
                </div>
                <div class="card p-5">
                    <h6 class="chart-heading uppercase"></h6>
                    <h4 class="chart-value text-2xl mt-2"></h4>
                    <small class="chart-label uppercase"></small>
                    <canvas id="lineWithAnnotationChart2" class="mt-5"></canvas>
                </div>
                <div class="card p-5">
                    <h6 class="chart-heading uppercase"></h6>
                    <h4 class="chart-value text-2xl mt-2"></h4>
                    <small class="chart-label uppercase"></small>
                    <canvas id="lineWithAnnotationChart3" class="mt-5"></canvas>
                </div>
                <div class="card p-5">
                    <h6 class="chart-heading uppercase"></h6>
                    <h4 class="chart-value text-2xl mt-2"></h4>
                    <small class="chart-label uppercase"></small>
                    <canvas id="lineWithAnnotationChart4" class="mt-5"></canvas>
                </div>
            </div>
        </div>

        <!-- Line With Annotation And Shadow -->
        <div class="card p-5">
            <h3>Line With Annotation And Shadow</h3>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-5 mt-5">
                <div class="card p-5">
                    <h6 class="chart-heading uppercase"></h6>
                    <h4 class="chart-value text-2xl mt-2"></h4>
                    <small class="chart-label uppercase"></small>
                    <canvas id="lineWithAnnotationAndShadowChart1" class="mt-5"></canvas>
                </div>
                <div class="card p-5">
                    <h6 class="chart-heading uppercase"></h6>
                    <h4 class="chart-value text-2xl mt-2"></h4>
                    <small class="chart-label uppercase"></small>
                    <canvas id="lineWithAnnotationAndShadowChart2" class="mt-5"></canvas>
                </div>
                <div class="card p-5">
                    <h6 class="chart-heading uppercase"></h6>
                    <h4 class="chart-value text-2xl mt-2"></h4>
                    <small class="chart-label uppercase"></small>
                    <canvas id="lineWithAnnotationAndShadowChart3" class="mt-5"></canvas>
                </div>
                <div class="card p-5">
                    <h6 class="chart-heading uppercase"></h6>
                    <h4 class="chart-value text-2xl mt-2"></h4>
                    <small class="chart-label uppercase"></small>
                    <canvas id="lineWithAnnotationAndShadowChart4" class="mt-5"></canvas>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('build/js/chart.umd.js') }}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.3"></script> -->

@endsection
