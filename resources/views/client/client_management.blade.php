@extends('layouts.layout')

@section('content')
<!-- Page Header -->
<div class="col-lg-12">
    <h1 class="page-header">Clients Management</h1>
</div>
<!--End Page Header -->
</div>

<div class="row">
<div class="col-lg-12">
    <!--Timeline -->

<div class="item">
    <label class="col-md-2">File Number:</label>
    <input type="number" >

</div>
<div  class="item">
    <label class="col-md-2">Client Name:</label>
    <input type="text" >
</div>
<div  class="item">
    <label class="col-md-2">Fiscal Year:</label>
    <select>
        <option selected>--Select--</option>
        <option>June-2015</option>
        <option>June-2016</option>
        <option>June-2017</option>
    </select>
</div>
 <div  class="item item4">
    <label class="col-md-2">Status:</label>
    <select>
        <option selected>--Select--</option>
        <option>Open</option>
        <option>Semi-open</option>
        <option>Closed-Lost</option>
        <option>Proposal</option>
        <option>Own</option>
        <option>All</option>
    </select>
    </div>
    <div class="item">
        <button class="btn1">Search</button>
    </div>

    <div class="item item6">
        <a href="#" class="btn btn-success btn1"  >New</a>
    </div>
    <div class="container table1 table3">
<div class="table-responsive ">
<table class="main-table table table-bordered text-center">
<tr>
<td>File Number</td>
<td>Client Name</td>
<td>Status</td>
<td>Details</td>

</tr>

<tr>
<td>11</td>
<td>Name1</td>
<td>open</td>
            <td><a href="details.html" style="margin-right:3px" ><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>

</tr>

<tr>
<td>22</td>
<td>Name2</td>
<td>won</td>
           <td><a href="details.html" style="margin-right:3px" ><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>

</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td></td>

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
