<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motiva Job Application</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
    <link rel="stylesheet" href="../../../resources/assets/css/bootstrap-datepicker.css">

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Motiva Dashboard</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home  &nbsp; <i class="fa fa-desktop" aria-hidden="true"></i></a><span class="sr-only">(current)</span></li>
                <li><a href="{{URL('dashboard/users')}}">Users &nbsp; <i class="fa fa-user" aria-hidden="true"></i></a> </li>
                <li><a href="{{URL('dashboard/options')}}">Options  &nbsp; <i class="fa fa-cog" aria-hidden="true"></i></a></li>
                <li><a href="{{URL('dashboard/positions')}}">Career Positions  &nbsp; <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
                <li><a href="{{URL('dashboard/applicants')}}">Job Applications &nbsp; <i class="fa fa-laptop" aria-hidden="true"></i></a></li>
                <li><a href="{{URL('dashboard/skills')}}">+ Options &nbsp; <i class="fa fa-database" aria-hidden="true"></i></a></li>
                <li><a href="{{URL('dashboard/users')}}">App Settings &nbsp; <i class="fa fa-cog" aria-hidden="true"></i></a></li>
                {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu">--}}
                {{--<li><a href="#">Users</a></li>--}}
                {{--<li><a href="#">Another action</a></li>--}}
                {{--<li><a href="#">Something else here</a></li>--}}
                {{--<li role="separator" class="divider"></li>--}}
                {{--<li><a href="#">Separated link</a></li>--}}
                {{--<li role="separator" class="divider"></li>--}}
                {{--<li><a href="#">One more separated link</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
            </ul>
            {{--<form class="navbar-form navbar-left">--}}
            {{--<div class="form-group">--}}
            {{--<input type="text" class="form-control" placeholder="Search">--}}
            {{--</div>--}}
            {{--<button type="submit" class="btn btn-default">Submit</button>--}}
            {{--</form>--}}
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings  &nbsp; <i class="fa fa-cogs" aria-hidden="true"></i></a> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::to('dashboard/home') }}">Log Out  &nbsp; <i class="fa fa-lock" aria-hidden="true"></i></a></li>
                        {{--<li><a href="#">Another action</a></li>--}}
                        {{--<li><a href="#">Something else here</a></li>--}}
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li><a href="#">Separated link</a></li>--}}
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Job Application</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open( ['route' =>'marital.store', 'method' => 'POST']) !!}

                    <div class="well well-sm">
                            <span style="font-size: 1em;" class="label label-success">Create Options &nbsp; <i class="fa fa-pencil" aria-hidden="true"></i>
                            </span>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Options Name') !!}
                                {!! Form::text('name', null,array('class' => 'form-control', 'placeholder' => 'Enter Option Name')) !!}

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Create Option</button>
                                <a class="btn btn-danger" href="{{URL('options')}}">Back</a>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>



                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Script JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>


</body>
</html>