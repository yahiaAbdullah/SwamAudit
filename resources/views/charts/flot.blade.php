@extends('layouts.layout')

@section('content')
<!-- page header-->
<div class="col-lg-12">
    <h1 class="page-header">Flot Charts</h1>
</div>
 <!-- end page header-->
</div>
<div class="row">
<div class="col-lg-12">
    <!-- Line chart -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Line Chart Example
        </div>
        <div class="panel-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="flot-line-chart"></div>
            </div>
        </div>
    </div>
    <!--End Line chart -->
</div>
<div class="col-lg-6">
    <!-- pie chart-->
    <div class="panel panel-default">
        <div class="panel-heading">
            Pie Chart Example
        </div>
        <div class="panel-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="flot-pie-chart"></div>
            </div>
        </div>
    </div>
      <!--end pie chart-->
</div>
<div class="col-lg-6">
     <!--  Multiple Axes Line Chart-->
    <div class="panel panel-default">
        <div class="panel-heading">
            Multiple Axes Line Chart Example
        </div>
        <div class="panel-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="flot-line-chart-multi"></div>
            </div>
        </div>
    </div>
     <!-- End Multiple Axes Line Chart-->
</div>
<div class="col-lg-6">
    <!-- Moving Line Chart -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Moving Line Chart Example
        </div>
        <div class="panel-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="flot-line-chart-moving"></div>
            </div>
        </div>
    </div>
    <!--End Moving Line Chart -->
</div>
<div class="col-lg-6">
    <!-- Bar Chart -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Bar Chart Example
        </div>
        <div class="panel-body">
            <div class="flot-chart">
                <div class="flot-chart-content" id="flot-bar-chart"></div>
            </div>
        </div>
    </div>
     <!--End Bar Chart -->
</div>

</div>
@endsection
