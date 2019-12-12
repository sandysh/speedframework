<!doctype html>
<html lang="en">

<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="{{asset('css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />
</head>

<body>
<div class="wrapper ">

    <div class="main-panel">
        <!-- Navbar -->

        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 offset-3">
                        @if(Core\Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                           {{Core\Session::show('error')}}
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Attendance Login</h4>
                                <p class="card-category">Grab Infotech Pvt Ltd</p>
                            </div>
                            <div class="card-body">
                                <form method="post" action="/authenticate">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Email Address</label>
                                                <input type="email" class="form-control active" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary pull-right">Authenticate</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/core/jquery.min.js')}}"></script>
<script src="{{asset('js/core/popper.min.js')}}"></script>
<script src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{asset('js/material-dashboard.js?v=2.1.1')}}" type="text/javascript"></script>
</body>

</html>
