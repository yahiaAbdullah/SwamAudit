<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="../plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="../css/style.css" rel="stylesheet" />
      <link href="../css/main-style.css" rel="stylesheet" />
      @if( config('app.locale') == 'ar')
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
      @endif
</head>

<body class="body-Login-back">

    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="../img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                          {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" placeholder="E-mail" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                                </div>
                                <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                  </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">
                                    Login
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="../plugins/jquery-1.10.2.js"></script>
    <script src="../plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
