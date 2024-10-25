@extends('admin.layouts.app')
@section('title', 'Overview')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin_dashboard/assets/css/vendors/chartist.css') }}">
@endsection

@section('admin.dashboard','active')

@section('content')
<div class="row">




    <div class="col-xl-12 chart_data_left">
        <div class="card">
            <div class="card-body p-0">
                <div class="d-flex justify-content-end mt-2">
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Filter
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li>
                            <a class="dropdown-item" href="{{ route('admin.dashboard',['filter' => 'today']) }}">Today</a></li>
                          <li><a class="dropdown-item" href="{{ route('admin.dashboard',['filter' => 'week']) }}">Last 7 days</a></li>
                          <li><a class="dropdown-item" href="{{ route('admin.dashboard',['filter' => 'month']) }}">Last 30 days</a></li>
                          <li><a class="dropdown-item" href="{{ route('admin.dashboard',['filter' => 'year']) }}">Last 1 year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row m-0 chart-main">
                    {{-- <div class="col-sm-6 p-0">
                        <div class="d-flex align-items-center">
                            <div class="earnings-small-chart">
                                <div class="small-bar">
                                    <div class="small-chart flot-chart-container"></div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="right-chart-content">
                                    <h4>${{ $total_sell }}</h4>
                                    <p>Total Earnings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-0">
                        <div class="d-flex align-items-center">
                            <div class="earnings-small-chart">
                                <div class="small-bar">
                                    <div class="small-chart1 flot-chart-container"></div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="right-chart-content">
                                    <h4>${{ $total_withdraw }}</h4>
                                    <p>Total Withdraw</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>



</div>
@endsection


@section('js')
<script src="{{ asset('admin_dashboard/assets/js/config.js') }}"></script>
<script src="{{ asset('admin_dashboard/assets/js/chart/chartist/chartist.js') }}"></script>
<script src="{{ asset('admin_dashboard/assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
<script src="{{ asset('admin_dashboard/assets/js/chart/knob/knob.min.js') }}"></script>
<script src="{{ asset('admin_dashboard/assets/js/chart/knob/knob-chart.js') }}"></script>
<script src="{{ asset('admin_dashboard/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('admin_dashboard/assets/js/chart/apex-chart/stock-prices.js') }}"></script>

<script src="{{ asset('admin_dashboard/assets/js/chart/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('admin_dashboard/assets/js/chart/chartjs/chart.custom.js') }}"></script>

<script src="{{ asset('admin_dashboard/assets/js/dashboard/default.js') }}"></script>
<script src="{{ asset('admin_dashboard/assets/js/dashboard/dashboard_2.js') }}"></script>
<script src="{{ asset('admin_dashboard/assets/js/chart-widget.js') }}"></script>




@endsection
