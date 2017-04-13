@extends('skeleton')

@section('navbar')
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
@endsection

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="well">
                        <h4>System Users</h4>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well">
                        <h4>Job Applications</h4>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Applicant Name</th>
                                <th>Pay Range</th>
                                <th>Email</th>
                                <th>Phone</th>


                            </tr>
                            </thead>

                            <tbody>
                             @foreach($applicants as $applicant)
                                 <tr>
                                     <td>{{$applicant->name}}</td>
                                     <td>{{$applicant->payrange}}</td>
                                     <td><{{$applicant->email}}/td>
                                     <td>{{$applicant->mobilephone}}</td>

                                 </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="well">
                        <h5>Career Positions</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>No.</th>

                            </tr>
                            </thead>

                            <tbody>
                           @foreach($positions as $position)
                               <tr>
                                   <td>{{$position->id}}</td>
                                   <td>{{$position->name}}</td>
                                   <td>{{$position->created_at->diffForHumans()}}</td>

                               </tr>
                           @endforeach
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a href="" class="btn btn-success btn-xs">Viel All &nbsp; <i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well">
                        <h5>Generic Form Options</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <td>Created</td>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($options as $option)
                                <tr>

                                    <td>{{$option->id}}</td>
                                    <td>{{$option->name}}</td>
                                    <td>{{$option->created_at->diffForHumans()}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                            <div class="form-group">
                                <a href="" class="btn btn-success btn-xs">Viel All &nbsp; <i class="fa fa-eye"></i></a>
                            </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="well">
                        <h5> Form Gender Options</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created</th>

                            </tr>
                            </thead>

                            <tbody>
                                @foreach($genders as $gender)
                                    <tr>
                                        <td>{{$gender->id}}</td>
                                        <td>{{$gender->name}}</td>
                                        <td>{{$gender->created_at->diffForHumans()}}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="form-group">
                            <a href="" class="btn btn-success btn-xs">Viel All &nbsp; <i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="well">
                        <h5>Form Skills</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach($skills as $skill)
                                <tr>
                                    <td>{{$skill->id}}</td>
                                    <td>{{$skill->name}}</td>
                                    <td>{{$skill->created_at->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="form-group">
                            <a href="" class="btn btn-success btn-xs">Viel All &nbsp; <i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    <hr>
    <footer class="text-center">
        2017 &copy; Motiva CC
    </footer>
@endsection

