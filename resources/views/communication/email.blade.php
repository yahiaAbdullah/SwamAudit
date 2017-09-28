@extends('layouts.layout')

@section('content')
<div class="col-lg-12">
    <h1 class="page-header">Client's Information Communications Details</h1>
</div>
<!--End Page Header -->
</div>

<div class="row">
<div class="col-lg-12">
    <!--Timeline -->

<div class="item">
    <label class="col-md-2">File Number:</label>
    <input type="number" disabled>

</div>
<div  class="item">
    <label class="col-md-2">Client Name:</label>
    <input type="text" disabled >
</div>
<div  class="item">
    <label class="col-md-2">Fiscal Year:</label>
    <select disabled>
        <option selected>--Select--</option>
        <option>June-2015</option>
        <option>June-2016</option>
        <option>June-2017</option>
    </select>
</div>
<div  class="item">
    <label class="col-md-2">Date:</label>
    <input type="date" >
</div>
<div  class="item">
    <label class="col-md-2">Subject:</label>
    <input type="text"  >
</div>
<div  class="item item4">
    <label class="col-md-2">Type:</label>
    <select >
        <option selected>--Select--</option>
        <option>Letter</option>
        <option>Phone Call</option>
    </select>
</div>
<div  class="item item5">
    <label class="col-md-2">Sent to:</label>
    <input type="email"  >
</div>
<div  class="item item5">
    <label class="col-md-2">Sent By:</label>
    <input type="email"  >
</div>
<div  class="item">
    <label class="col-md-2">Details:</label>
    <textarea rows="3"></textarea>
</div>
<div  class="item item8">
    <label class="col-md-2" for="exampleInputFile">File:</label>
<label class="btn btn-primary btn-md  btn-file">
<i class="fa fa-upload fa-2x" aria-hidden="true"></i>
<input type="file" style="display:none" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    </label>
    <!--<button class="btn1 brows">Browse</button>-->
</div>

<secion class="dis">
    <div  class="item item9 col-md-6" >
     <label class="col-md-3">Added By:</label>
    <input  type="text" disabled>
</div>
     <div  class="item col-md-6">
    <label class="col-md-3">Added Date:</label>
    <input type="date" disabled >
</div>
     <div  class="item col-md-6">
    <label class="col-md-3">Uploaded By:</label>
    <input  type="text" disabled >
</div>
    <div  class="item col-md-6">
    <label class="col-md-3">Uploaded Date:</label>
    <input   type="date" disabled >
</div>
   </secion>

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
