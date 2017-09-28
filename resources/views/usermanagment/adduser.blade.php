@extends('layouts.layout')

@section('content')
<div class="col-lg-12">
    <h1 class="page-header">{{trans('layout.adduser')}}</h1>
</div>
 <!--end  page header -->
</div>
<div class="row">
  <form class="" action="/adduser" method="post">
    {{ csrf_field() }}
    <div class="col-lg-12">

        <div class="item">
        <label class="col-md-3">{{trans('layout.username')}}: </label>
        <input type="text" name="user_name" >

    </div>
    <div  class="item">
        <label class="col-md-3">{{trans('layout.email')}}: </label>
        <input type="text" name="email">
    </div>
     <div  class="item">
        <label class="col-md-3">{{trans('layout.firstname')}}: </label>
        <input type="text" name="first_name">
    </div>
    <div  class="item">
        <label class="col-md-3">{{trans('layout.lastname')}}: </label>
        <input type="text" name="last_name">
    </div>
    <div  class="item">
        <label class="col-md-3">{{trans('layout.website')}}: </label>
        <input type="text" name="website">
    </div>
    <div  class="item">
        <label class="col-md-3">{{trans('layout.password')}}: </label>
        <input type="password" name="password" >
    </div>
    <div class="item">
             <label class="col-md-3">{{trans('layout.sendun')}}:</label>
            <input  type="checkbox" aria-label="...">
            <span>{{trans('layout.senduemail')}}.</span>
        </div>
    <div  class="item ">
        <label class="col-md-3">{{trans('layout.role')}} :</label>
        <select>
            <option selected>--{{trans('layout.select')}}--</option>
            <option>Adminstrator</option>
            <option>Manager</option>
            <option>Employee</option>
            <option>user</option>
        </select>
    </div>

        </div>

        <div class="item item8">
            <button type="submit" class="btn1">{{trans('layout.adduser')}}</button>
        </div>
  </form>

</div>
</div>
@endsection
