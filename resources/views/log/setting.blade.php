@extends('layouts.layout')

@section('content')
<!--  page header -->
<div class="col-lg-12">
    <h1 class="page-header">Settings</h1>
</div>
 <!--end  page header -->
</div>
<div class="row">
<div class="col-lg-12">


     <!--  Alert Styles -->
    <!--
    <div class="panel panel-default">
        <div class="panel-heading">
            Alert Styles
        </div>
        <div class="panel-body">
            <div class="alert alert-success">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
            </div>
            <div class="alert alert-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
            </div>
            <div class="alert alert-warning">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
            </div>
            <div class="alert alert-danger">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
            </div>
        </div>
    </div>
    <!-- End Alert Styles --
</div>
<div class="col-lg-6">
    <!--  Dismissable Alerts --
    <div class="panel panel-default">
        <div class="panel-heading">
            Dismissable Alerts
        </div>
        <div class="panel-body">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
            </div>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
            </div>
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
            </div>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
            </div>
        </div>
    </div>
     <!-- End Dismissable Alerts --
</div>
</div>
<div class="row">
<div class="col-lg-6">
     <!--  Modals--
    <div class="panel panel-default">
        <div class="panel-heading">
            Modals
        </div>
        <div class="panel-body">
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                Launch Demo Modal
            </button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- End Modals--
</div>
<div class="col-lg-6">
     <!--  Tooltips and Popovers--
    <div class="panel panel-default">
        <div class="panel-heading">
            Tooltips and Popovers
        </div>
        <div class="panel-body">
            <h4>Tooltip Demo</h4>
            <div class="tooltip-demo">
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
            </div>
            <br>
            <h4>Clickable Popover Demo</h4>
            <div class="tooltip-demo">
                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on left
                </button>
                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on top
                </button>
                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on bottom
                </button>
                <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on right
                </button>
            </div>
        </div>
    </div>
     <!--End  Tooltips and Popovers-->
</div>
</div>
@endsection
