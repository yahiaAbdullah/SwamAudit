@extends('layouts.layout')

@section('content')
<!-- Page Header -->
<div class="col-lg-12">
    <h1 class="page-header">Client's Information Communications Log</h1>
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
          <select>
              <option selected>--Select--</option>
              <option>June-2015</option>
              <option>June-2016</option>
              <option>June-2017</option>
          </select>
      </div>

           <div class="item item6">
               <h4 class="lft">Emails</h4>
              <a href="email.html" class="btn btn-success btn2"  >New</a>
          </div>


          <div class="container table1 table3">
      <div class="table-responsive ">
      <table class="main-table table table-bordered text-center">
      <tr>
      <td>Date</td>
                  <td>Subject</td>
      <td>Sent To</td>
      <td>Sent By</td>
      <td>Details</td>
      </tr>

      <tr>
      <td>02/05/2016</td>
      <td>Plan for a visit</td>
                  <td>a@a.com</td>
                  <td>m@gs.com</td>
                  <td><a href="" ><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>

      </tr>

      <tr>
      <td>02/06/2016</td>
      <td>Invoice 123</td>
                  <td>a@a.com</td>
                  <td>m@gs.com</td>
                  <td><a href="" ><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
      </tr>




      </table>

           <div class="item item6">
               <h4 class="lft">Other Communications</h4>
              <button class="btn1">New</button>
          </div>


          <div class="container table1 table3">
      <div class="table-responsive ">
      <table class="main-table table table-bordered text-center">
      <tr>

      <td>Date</td>
                  <td>Subject</td>
      <td>Sent To</td>
      <td>Sent By</td>
      <td>Type</td>
      <td>Details</td>
      <td>Edit</td>

      </tr>

      <tr>
      <td>02/03/2016</td>
      <td>Parposal</td>
                  <td>Nasir</td>
                  <td>Ali</td>
                  <td>Letter + CD</td>
                  <td><a href="" ><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
      <td><a href="" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>

      </tr>

      <tr>
      <td>02/02/2016</td>
      <td>Discuss Delay</td>
                  <td>Nasir</td>
                  <td>Ali</td>
                  <td>Phon Call</td>
                  <td><a href="" ><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
      <td><a href="" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>

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
