@extends('skeleton')

@section('content')
    <div class="jumbotron">
        <h2 class="text-center">Login Dashboard</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Login</h4>
                    </div>

                    <div class="panel-body">
                        {!! Form::open()  !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Input addons</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                        {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Enter your Email')) !!}
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Input addons</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"> <i class="fa fa-lock" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">User Login</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="">Forgot your password?</a>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection