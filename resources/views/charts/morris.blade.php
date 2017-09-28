@extends('layouts.layout')

@section('content')
<!--  page header -->
<div class="col-lg-12">
   <h1 class="page-header">Morris Charts</h1>
</div>
<!--end  page header -->
</div>
<div class="row">
<div class="col-lg-6">
   <!--  Area Chart -->
   <div class="panel panel-default">
       <div class="panel-heading">
           Area Chart Example
       </div>
       <div class="panel-body">
           <div id="morris-area-chart"></div>
       </div>
   </div>
   <!-- End Area Chart -->
</div>

<div class="col-lg-6">
    <!--  Bar Chart -->
   <div class="panel panel-default">
       <div class="panel-heading">
           Bar Chart Example
       </div>
       <div class="panel-body">
           <div id="morris-bar-chart"></div>
       </div>
   </div>
<!-- End Bar Chart -->
</div>
<div class="col-lg-6">
    <!--  Line Chart -->
   <div class="panel panel-default">
       <div class="panel-heading">
           Line Chart Example
       </div>
       <div class="panel-body">
           <div id="morris-line-chart"></div>
       </div>
   </div>
    <!--  End Line Chart -->
</div>
<div class="col-lg-6">
    <!--  Donut Chart -->
   <div class="panel panel-default">
       <div class="panel-heading">
           Donut Chart Example
       </div>
       <div class="panel-body">
           <div id="morris-donut-chart"></div>
       </div>
   </div>
   <!-- End Donut Chart -->
</div>

</div>
@endsection
