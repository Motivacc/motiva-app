@extends('skeleton')

@section('content')
    <div class="jumbotron">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Sign Up
                    </div>
                    <div class="panel-body">
                        <form class="form" class="form-horizontal" role="form" method="POST" action="/auth/register">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Set Your Username">
                            </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="Set Your Email">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Set Your Password">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success" type="submit">Register </button>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection