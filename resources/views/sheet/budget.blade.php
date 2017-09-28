@extends('layouts.layout')

@section('content')
<!-- page header -->
<div class="col-lg-12">
   <h1 class="page-header">Budget Sheet</h1>
   <div class="item item6">
       <a href="#" class="btn btn-success btn1"  >Edit</a>
       <a href="#" class="btn btn-success btn1"  >Save</a>
       <i class="fa fa-print fa-2x" aria-hidden="true" ></i>

   </div>
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
   <input type="text"  disabled>
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
       <option>Under Development </option>
       <option>Draft</option>
       <option>Final</option>
   </select>
   </div>

   <div class="item">
        <label class="col-md-2">Date:</label>
   <input type="date" >
   </div>
   <div class="item">
        <label class="col-md-2">Job Number:</label>
   <input type="number" >
   </div>
   <div  class="item item4">
   <label class="col-md-2">Job Type:</label>
   <select>
       <option selected>--Select--</option>
       <option>Final Audit </option>
       <option>Intrem Audit</option>
       <option>Quarter Audit</option>
   </select>
   </div>
       <div  class="item item4">
   <label class="col-md-2">Job Loction:</label>
   <select>
       <option selected>--Select--</option>
       <option>Outside Main City </option>
       <option>Inside Main City</option>
   </select>
       </div>
   <div class="item item6">
       <a href="#" class="btn btn-success btn1" style="margin-right:3px" >Add</a>
   </div>
   <div class="container table1 table3">
<div class="table-responsive ">
<table class="main-table table table-bordered text-center">
<tr>
<td>Description</td>
<td>Partner</td>
<td>Manager</td>
<td>Senior</td>
<td>Semi Senior</td>
<td>Staff</td>
<td>Secretary</td>
<td>Total</td>
<td>%</td>
<td>Conrol</td>

</tr>

<tr>
<td>Assets</td>
<td colspan="9"></td>

</tr>

<tr>
<td>Cash and Banks</td>
<td></td>
<td></td>
<td></td>
<td></td>
           <td>3.00 <i class="fa fa-user" aria-hidden="true"></i> </td>
           <td></td>
<td>3.00</td>
<td>2.8%</td>
           <td>
               <a href="#" class="ico"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
               <a href="#" class="ico"><i class="fa fa-trash" aria-hidden="true"></i></a>
           </td>

</tr>

<tr>
<td>Assets</td>
<td colspan="9"></td>

</tr>

<tr>
<td>Accounts Receivables</td>
<td></td>
<td></td>
<td></td>
<td>4.00 <i class="fa fa-user" aria-hidden="true"></i></td>
           <td>2.00 <i class="fa fa-user" aria-hidden="true"></i> </td>
           <td></td>
<td>6.00</td>
<td>4.1%</td>
           <td>
               <a href="#" class="ico"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
               <a href="#" class="ico"><i class="fa fa-trash" aria-hidden="true"></i></a>
           </td>
</tr>
<tr>
<td>Liabilities</td>
<td colspan="9"></td>
</tr>

<tr>
<td>Accounts Payable</td>
<td></td>
<td></td>
<td></td>
       <td></td>
           <td>3.00 <i class="fa fa-user" aria-hidden="true"></i> </td>
           <td></td>
<td>3.00</td>
<td>2.8%</td>
           <td>
               <a href="#" class="ico"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
               <a href="#" class="ico"><i class="fa fa-trash" aria-hidden="true"></i></a>
           </td>
</tr>
       <tr>
<td>Equity</td>
<td colspan="9"></td>

</tr>
       <tr>
<td>Accounts Payable</td>
<td>1.00 <i class="fa fa-user" aria-hidden="true"></i> </td>
<td></td>
<td></td>
           <td></td>
           <td>3.00 <i class="fa fa-user" aria-hidden="true"></i> </td>
           <td></td>
<td>4.00</td>
<td>3.1%</td>
           <td>
               <a href="#" class="ico"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
               <a href="#" class="ico"><i class="fa fa-trash" aria-hidden="true"></i></a>
           </td>
</tr>
        <tr>
<td>Total Hours(x)</td>
<td></td>
<td></td>
<td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
<td</td>
<td></td>
           <td></td>
</tr>
        <tr>
<td>Hourly Rate(y)</td>
<td></td>
<td></td>
<td></td>
           <td></td>
           <td></td>
           <td></td>
<td</td>
<td></td>
           <td></td>
           <td></td>
</tr>
        <tr>
<td>Total Amount(x*y)</td>
<td></td>
<td></td>
<td></td>
           <td></td>
           <td></td>
           <td></td>
<td</td>
<td></td>
           <td></td>
           <td></td>
</tr>
</table>
   </div>
   </div>

   <div class="container table1 table3">
          <div class="item item6">
       <h4>Cost For Outside Main City</h4>
   </div>
<div class="table-responsive ">
<table class="main-table table table-bordered text-center">
<tr>
<td>Description</td>
<td>Partner</td>
<td>Manager</td>
<td>Senior</td>
<td>Semi Senior</td>
<td>Staff</td>
<td>Secretary</td>
<td>Total</td>
<td>%</td>
<td>Conrol</td>

</tr>

<tr>
<td>Total Days(x)</td>
<td>1.00</td>
<td>-</td>
<td>-</td>
           <td>-</td>
           <td>-</td>
           <td>-</td>
<td>1</td>
<td></td>
           <td></td>

</tr>

<tr>
<td>Day Rate(y)</td>
<td>550.00</td>
<td>-</td>
<td>-</td>
           <td>-</td>
           <td>-</td>
           <td>-</td>
<td></td>
<td></td>
           <td></td>


</tr>

<tr>
<td>Total Amount(x*y)</td>
<td>550.00</td>
<td>-</td>
<td>-</td>
           <td>-</td>
           <td>-</td>
           <td>-</td>
<td>550.00</td>
<td></td>
           <td></td>


</tr>

<tr>
<td>Total Days(x)</td>
<td>1.00</td>
<td>-</td>
<td>-</td>
           <td>-</td>
           <td>-</td>
           <td>-</td>
<td>1</td>
<td></td>
           <td></td>

</tr>
<tr>
<td>Car Rent Days * 100 SAR</td>
<td>100.00</td>
<td>-</td>
<td>-</td>
           <td>-</td>
           <td>-</td>
           <td>-</td>
<td>100.00</td>
<td></td>
           <td></td>

</tr>

<tr>
<td>Transportation From to Airport</td>
<td>-</td>
<td>-</td>
<td>-</td>
           <td>-</td>
           <td>-</td>
           <td>-</td>
<td></td>
<td></td>
           <td></td>

</tr>
       <tr>
<td>Air Tickets</td>
<td>-</td>
<td>-</td>
<td>-</td>
           <td>-</td>
           <td>-</td>
           <td>-</td>
<td></td>
<td></td>
           <td></td>

</tr>
        <tr>
<td>Fedex</td>
<td>-</td>
<td>-</td>
<td>-</td>
           <td>-</td>
           <td>-</td>
           <td>-</td>
           <td>-</td>
<td></td>
<td></td>
</tr>
        <tr>
<td>Total Cost For Outise City</td>
<td>650.00</td>
<td>-</td>
<td>-</td>
           <td>-</td>
           <td>-</td>
           <td>-</td>
<td>650.00</td>
<td></td>
           <td></td>
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
<div class="bottom">
<div  class="item col-md-12">
   <label >Total Budget Amount:</label>
   <input type="text" value="4700"  disabled>
</div>
<div  class="item col-md-12">
   <label>Standard Amount:</label>
   <input type="text"  disabled>
</div>
<div  class="item col-md-12">
   <label >Write Down/Write Up:</label>
   <input type="text"  value="5875.00" disabled>
   <input  type="text"  value="125%">

</div><div  class="item col-md-12">
   <label >Final Budget:</label>
   <input type="text" value="10757.00" disabled>
</div>
</div>

</div>
<!-- end page-wrapper -->

</div>
@endsection
