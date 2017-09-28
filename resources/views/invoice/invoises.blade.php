@extends('layouts.layout')

@section('content')
<!-- Page Header -->
<div class="col-lg-12">
    <h1 class="page-header">Client's Information Invoices and Payements</h1>
</div>
<!--End Page Header -->
</div>

<div class="row">
<div class="col-lg-12">
    <!--Timeline -->

<div class="item">
    <label>File Number:</label>
    <input type="number" disabled>

</div>
<div  class="item">
    <label>Client Name:</label>
    <input type="text" disabled >
</div>
<div  class="item">
    <label>Fiscal Year:</label>
    <select>
        <option selected>--Select--</option>
        <option>June-2015</option>
        <option>June-2016</option>
        <option>June-2017</option>
    </select>
</div>

     <div class="item item6">
         <h4 class="lft">Invoices</h4>
        <button class="btn1">New</button>
    </div>


    <div class="container table1 table3">
<div class="table-responsive ">
<table class="main-table table table-bordered text-center">
<tr>
<td>Fiscal Year</td>
            <td>Invoice No</td>
<td>Invoice Date</td>
<td>Amount</td>
<td>Status</td>
<td><a href="#" ><i class="fa fa-pencil-square-o ico" aria-hidden="true"></i></a></td>

</tr>

<tr>
<td>2016</td>
<td>123456</td>
<td>02/02/2016</td>
<td>12000</td>
            <td>Paid</td>
            <td><a href="#" ><i class="fa fa-pencil-square-o ico" aria-hidden="true"></i></a></td>

</tr>

<tr>
<td>2016</td>
<td>123456</td>
<td>02/05/2016</td>
<td>2000</td>
            <td>Sent</td>
           <td><a href="#" ><i class="fa fa-pencil-square-o ico" aria-hidden="true"></i></a></td>

</tr>

<tr>

<td>2016</td>
<td>123456</td>
<td>02/07/2016</td>
<td>3000</td>
            <td>Collected</td>
            <td><a href="#" ><i class="fa fa-pencil-square-o ico" aria-hidden="true"></i></a></td>

</tr>


</table>

     <div class="item item6">
         <h4 class="lft">Payements</h4>
        <button class="btn1">New</button>
    </div>


    <div class="container table1 table3">
<div class="table-responsive ">
<table class="main-table table table-bordered text-center">
<tr>

<td>Fiscal Year</td>
            <td>Payment No</td>
            <td>Payment Date</td>
<td>Amount</td>
<td>Inovice No</td>
<td><a href="#" ><i class="fa fa-pencil-square-o ico" aria-hidden="true"></i></a></td>

</tr>

<tr>
<td>2016</td>
<td>44444</td>
<td>20/02/2016</td>
<td>12000</td>
            <td>123456</td>
            <td><a href="#" ><i class="fa fa-pencil-square-o ico" aria-hidden="true"></i></a></td>

</tr>

<tr>
<td>2016</td>
<td>555555</td>
<td>22/05/2016</td>
<td>2000</td>
            <td>253456</td>
            <td><a href="#" ><i class="fa fa-pencil-square-o ico" aria-hidden="true"></i></a></td>

</tr>


</table>

        <!--<div class="panel-heading">
            <i class="fa fa-clock-o fa-fw"></i>Timeline
        </div>

        <div class="panel-body">
            <ul class="timeline">
                <li>
                    <div class="timeline-badge">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Timeline Event</h4>
                            <p>
                                <small class="text-muted"><i class="fa fa-time"></i>11 hours ago via Twitter</small>
                            </p>
                        </div>
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge warning">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Timeline Event</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge danger">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Timeline Event</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Timeline Event</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge info">
                        <i class="fa fa-save"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Timeline Event</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                            <hr>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Timeline Event</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge success">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Timeline Event</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>
    <!--End Timeline -->
</div>
</div>
@endsection
