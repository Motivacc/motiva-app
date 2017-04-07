<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Motiva Job Apply Online</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../node_modules/sweetalert/dist/sweetalert.css">
</head>
<body>

<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h3>Welcome</h3>
                    <img src="http://www.motivacc.com/wp-content/themes/candyjobs/inc/images/logo.png" alt="logo">
                </div>
            </div>
        </div>
    </div>


</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">


            <div class="well">

                <p><strong>MOTIVA</strong> is an equal opportunity employer and does not discriminate against otherwise qualified applicants on the basis of race, color, creed, religion, ancestry, age, sex, marital status, national origin, disability or handicap, genetic information, or veteran status.    </p>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> I Agree
                    </label>
                </div>
            </div>
            <a href="{{url('apply/create')}}" class="btn btn-success">Apply Now!</a>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../../../node_modules/sweetalert/dist/sweetalert-dev.js"></script>
@include('sweet::alert')
</body>
</html>