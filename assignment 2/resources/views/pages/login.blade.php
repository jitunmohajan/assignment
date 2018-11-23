<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Project</title>
    <link href="{{asset('LoginBackend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('LoginBackend/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('LoginBackend/dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('LoginBackend/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form id="Login" method="post" action="{{ URL::to('loginstore') }}">
                            {{csrf_field()}}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                        <p class="loginhere">
                            Don't have an account ? <a href="{{ URL::to('/register') }}" class="{{ URL::to('/register') }}">Sign up</a>
                        </p>
                        <div class="alert-success"> 
                            <?php
                              $message = Session::get('message');
                              if ($message)
                                echo $message;
                                Session::put('message',null)
                            ?>        
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</body>

</html>
