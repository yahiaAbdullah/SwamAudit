@extends('layouts.layout')

@section('content')
<!-- page header -->
<div class="col-lg-12">
   <h1 class="page-header">Budget/Actual Sheets Management</h1>
</div>
<!--end page header -->
</div>
<div class="row">
<div class="col-lg-12">
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
        <label class="col-md-2">Job Number:</label>
   <input type="number" >
   </div>
   <div class="item ">
       <button class="btn1">Search</button>
   </div>
   <div class="item item6">
       <a href="budget.html" class="btn btn-success btn1" >New Budget Sheet</a>
   </div>
   <div class="container table1 table3">
<div class="table-responsive ">
<table class="main-table table table-bordered text-center">
<tr>
<td>File Number</td>
<td>Client Name</td>
<td>Job No</td>
<td>Budget</td>
<td>Actual</td>

</tr>

<tr>
<td>11</td>
<td>Name1</td>
           <td>55</td>
<td><i class="fa fa-info-circle" aria-hidden="true"></i></td>
<td><i class="fa fa-info-circle" aria-hidden="true"></i></td>
</tr>

<tr>
<td>22</td>
<td>Name2</td>
           <td>12</td>
<td><i class="fa fa-info-circle" aria-hidden="true"></i></td>
<td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>

</tr>

<tr>
<td>23</td>
<td>Name3</td>
           <td>44</td>
<td><i class="fa fa-info-circle" aria-hidden="true"></i></td>
<td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
</tr>


</table>

   <!-- Form Elements -->
   <!--<div class="panel panel-default">
       <div class="panel-heading">
           Basic Form Elements
       </div>
       <div class="panel-body">
           <div class="row">
               <div class="col-lg-6">
                   <form role="form">
                       <div class="form-group">
                           <label>Text Input</label>
                           <input class="form-control">
                           <p class="help-block">Example block-level help text here.</p>
                       </div>
                       <div class="form-group">
                           <label>Text Input with Placeholder</label>
                           <input class="form-control" placeholder="Enter text">
                       </div>
                       <div class="form-group">
                           <label>Static Control</label>
                           <p class="form-control-static">email@example.com</p>
                       </div>
                       <div class="form-group">
                           <label>File input</label>
                           <input type="file">
                       </div>
                       <div class="form-group">
                           <label>Text area</label>
                           <textarea class="form-control" rows="3"></textarea>
                       </div>
                       <div class="form-group">
                           <label>Checkboxes</label>
                           <div class="checkbox">
                               <label>
                                   <input type="checkbox" value="">Checkbox 1
                               </label>
                           </div>
                           <div class="checkbox">
                               <label>
                                   <input type="checkbox" value="">Checkbox 2
                               </label>
                           </div>
                           <div class="checkbox">
                               <label>
                                   <input type="checkbox" value="">Checkbox 3
                               </label>
                           </div>
                       </div>
                       <div class="form-group">
                           <label>Inline Checkboxes</label>
                           <label class="checkbox-inline">
                               <input type="checkbox">1
                           </label>
                           <label class="checkbox-inline">
                               <input type="checkbox">2
                           </label>
                           <label class="checkbox-inline">
                               <input type="checkbox">3
                           </label>
                       </div>
                       <div class="form-group">
                           <label>Radio Buttons</label>
                           <div class="radio">
                               <label>
                                   <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                               </label>
                           </div>
                           <div class="radio">
                               <label>
                                   <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                               </label>
                           </div>
                           <div class="radio">
                               <label>
                                   <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                               </label>
                           </div>
                       </div>
                       <div class="form-group">
                           <label>Inline Radio Buttons</label>
                           <label class="radio-inline">
                               <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                           </label>
                           <label class="radio-inline">
                               <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                           </label>
                           <label class="radio-inline">
                               <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                           </label>
                       </div>
                       <div class="form-group">
                           <label>Selects</label>
                           <select class="form-control">
                               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option>5</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <label>Multiple Selects</label>
                           <select multiple class="form-control">
                               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                               <option>5</option>
                           </select>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit Button</button>
                       <button type="reset" class="btn btn-success">Reset Button</button>
                   </form>
               </div>
               <div class="col-lg-6">
                   <h1>Disabled Form States</h1>
                   <form role="form">
                       <fieldset disabled="disabled">
                           <div class="form-group">
                               <label for="disabledSelect">Disabled input</label>
                               <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                           </div>
                           <div class="form-group">
                               <label for="disabledSelect">Disabled select menu</label>
                               <select id="disabledSelect" class="form-control">
                                   <option>Disabled select</option>
                               </select>
                           </div>
                           <div class="checkbox">
                               <label>
                                   <input type="checkbox">Disabled Checkbox
                               </label>
                           </div>
                           <button type="submit" class="btn btn-primary">Disabled Button</button>
                       </fieldset>
                   </form>
                   <h1>Form Validation States</h1>
                   <form role="form">
                       <div class="form-group has-success">
                           <label class="control-label" for="inputSuccess">Input with success</label>
                           <input type="text" class="form-control" id="inputSuccess">
                       </div>
                       <div class="form-group has-warning">
                           <label class="control-label" for="inputWarning">Input with warning</label>
                           <input type="text" class="form-control" id="inputWarning">
                       </div>
                       <div class="form-group has-error">
                           <label class="control-label" for="inputError">Input with error</label>
                           <input type="text" class="form-control" id="inputError">
                       </div>
                   </form>
                   <h1>Input Groups</h1>
                   <form role="form">
                       <div class="form-group input-group">
                           <span class="input-group-addon">@</span>
                           <input type="text" class="form-control" placeholder="Username">
                       </div>
                       <div class="form-group input-group">
                           <input type="text" class="form-control">
                           <span class="input-group-addon">.00</span>
                       </div>
                       <div class="form-group input-group">
                           <span class="input-group-addon"><i class="fa fa-eur"></i>
                           </span>
                           <input type="text" class="form-control" placeholder="Font Awesome Icon">
                       </div>
                       <div class="form-group input-group">
                           <span class="input-group-addon">$</span>
                           <input type="text" class="form-control">
                           <span class="input-group-addon">.00</span>
                       </div>
                       <div class="form-group input-group">
                           <input type="text" class="form-control">
                           <span class="input-group-btn">
                               <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                               </button>
                           </span>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
    <!-- End Form Elements -->
</div>
</div>
@endsection
