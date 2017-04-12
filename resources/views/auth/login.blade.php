@extends('skeleton')
@section('content')

    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Dashboard</h2>
                    <img src="http://www.motivacc.com/wp-content/themes/candyjobs/inc/images/logo.png" alt="logo">

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Login</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::open(array('url' => 'auth/login', 'method' => 'POST')) !!}
                                <div class="form-group">
                                    {!! Form::label('email', 'User Name or Email') !!}
                                    {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Enter User or Email')) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('password', 'Password') !!}
                                    <input type="password" name="password" class="form-control" placeholder="Enter your Password" >
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Login !!</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection