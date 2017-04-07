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
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Job Application</h3>
                    </div>
                    <div class="panel-body">
                            {!! Form::open( ['route' =>'apply.store', 'apply','method' => 'POST']) !!}

                        <div class="well well-sm">
                            <span style="font-size: 1em;" class="label label-success">Applicant &nbsp; <i class="fa fa-pencil" aria-hidden="true"></i>
</span>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                   {!! Form::label('workbefore', 'Have you worked at MOTIVA before?') !!}
                                   {!! Form::select('option_id', $options, null,['class' => 'form-control']) !!}
                               </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('payrange', 'Desire pay range?') !!}
                                   <div class="input-group">
                                       <span class="input-group-addon">$</span>
                                       {!! Form::text('payrange', null, array('class' => 'form-control', 'placeholder' => '$00.000')) !!}
                                   </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('payrange', 'Desire position') !!}
                                    {!! Form::select('position_id', $positions, null,['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                        </div>

                        <div class="well well-sm">
                            <span style="font-size: 1em;" class="label label-success">Personal Information &nbsp; <i class="fa fa-address-card" aria-hidden="true"></i>
 </span>
                        </div>


                        <div class="row">


                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('name', 'Name(s)')  !!}
                                    {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Enter Your Name')) !!}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('psourname', 'Paternal Sourname')  !!}
                                    {!! Form::text('psourname', null, array('class' => 'form-control', 'placeholder' => 'Enter Your Paternal Sourname')) !!}

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('msourname', 'Maternal Sourname')  !!}
                                    {!! Form::text('msourname', null, array('class' => 'form-control', 'placeholder' => 'Enter Your Maternal Sourname')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('dob', 'Birth Date')  !!}
                                    {!! Form::text('dob', null, array('class' => 'form-control', 'placeholder' => 'Enter Your Name')) !!}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('age', 'Age')  !!}
                                    {!! Form::text('age', null, array('class' => 'form-control', 'placeholder' => 'Enter Your Paternal Sourname')) !!}

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('gender', 'Gender')  !!}
                                    {!! Form::select('gender_id', $genders, null,['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                        </div>
                        <div class="well well-sm">
                            <span style="font-size: 1em;" class="label label-success">Address &nbsp; <i class="fa fa-map-signs" aria-hidden="true"></i>
</span>
                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('state', 'State') !!}
                                    {!! Form::text('state', null, array('class' => 'form-control', 'placeholder' => 'Enter Your State')) !!}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('city', 'City') !!}
                                    {!! Form::text('city', null, array('class' => 'form-control', 'placeholder' => 'Enter Your City')) !!}

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('street', 'Street') !!}
                                    {!! Form::text('street', null, array('class' => 'form-control', 'placeholder' => 'Enter Your Street Address')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('streetnumber', 'Sreet Number') !!}
                                    {!! Form::text('streetnumber', null, array('class' => 'form-control', 'placeholder' => 'Exemple: 41218')) !!}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('zipcode', 'Zip Code') !!}
                                    {!! Form::text('zipcode', null, array('class' => 'form-control', 'placeholder' => 'Enter Your Zip Code')) !!}

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('homephone', 'Home Phone') !!}
                                    {!! Form::text('homephone', null, array('class' => 'form-control', 'placeholder' => '(area)123-7896')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('mobilephone', 'Mobile Phone') !!}
                                    {!! Form::text('mobilephone', null, array('class' => 'form-control', 'placeholder' => '(area)123-7896')) !!}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('secondphone', 'Secondary Phone') !!}
                                    {!! Form::text('secondphone', null, array('class' => 'form-control', 'placeholder' => '(area)123-7896')) !!}

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('email', 'Email') !!}
                                    {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Enter Your email @address.com')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('relationship', 'Marital Status') !!}
                                    {!! Form::select('marital_id', $maritals, null,['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('children', 'Do you have Children, how many?') !!}
                                    {!! Form::number('children', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('fathername', 'Father Name' )!!}
                                    {!! Form::text('fathername', null, array('class' => 'form-control', 'placeholder' => 'Entry Your Father Name')) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('mothername', 'Mother Name') !!}
                                    {!! Form::text('mothername', null, array('class' => 'form-control' , 'placeholder' => 'Enter Your Mother Name')) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('emergencyphone', 'Emergency Contact') !!}
                                    {!! Form::text('emergencyphone', null, array('class' => 'form-control' , 'placeholder' => 'Contact Emergency Name')) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('emrelationemergencyail', 'Your relation with the contact?') !!}
                                    {!! Form::text('emrelationemergencyail', null, array('class' => 'form-control' , 'placeholder' => 'Enter Contact Relation')) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('relationphoneEmergency', 'Emergency Phone') !!}
                                    {!! Form::text('relationphoneEmergency', null, array('class' => 'form-control' , 'placeholder' => 'Enter Contact Phone')) !!}

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('dependents', 'Household members dependent on you?') !!}
                                    {!! Form::text('dependents', null, array('class' => 'form-control' , 'placeholder' => 'Enter Your Dependents: Use a Number')) !!}

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('currentresidency', 'Time living in current residence?') !!}
                                    {!! Form::text('currentresidency', null, array('class' => 'form-control' , 'placeholder' => 'Use a Number: Years')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="well well-sm">
                            <span style="font-size: 1em;" class="label label-success">General Information &nbsp; <i class="fa fa-id-card" aria-hidden="true"></i>
</span>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('leveleducation', 'What is your level of education?') !!}
                                    {!! Form::text('leveleducation', null, array('class' => 'form-control' , 'placeholder' => 'Exemple: Junior High, High Scool, Collage Degree, Other')) !!}

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('graduationschool', 'School or Institution Name') !!}
                                    {!! Form::text('graduationschool', null, array('class' => 'form-control' , 'placeholder' => 'Enter Your Dependents: Use a Number')) !!}

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('dates', 'Dete of Graduation') !!}
                                    {!! Form::text('dates', null, array('class' => 'form-control' , 'placeholder' => 'Exemple: 12/12/1980')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('degree', 'Degree') !!}
                                    {!! Form::text('degree', null, array('class' => 'form-control' , 'placeholder' => 'Enter you Degree if are Applicable')) !!}

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('englishspeake', 'English Proficiency ') !!}
                                    {!! Form::text('englishspeake', null, array('class' => 'form-control' , 'placeholder' => 'Exemple: 100%')) !!}

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('englishwrite', 'English writing level') !!}
                                    {!! Form::text('englishwrite', null, array('class' => 'form-control' , 'placeholder' => 'Exemple: 100%')) !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('computerSkills', 'Computer proficiency') !!}
                                    {!! Form::select('skills_id', $skills, null,['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('validVisa', 'Do you have a valid VISA/Passport?') !!}
                                    {!! Form::select('option_id', $options, null,['class' => 'form-control']) !!}

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('tattos', 'Do you have tattoos in your body?') !!}
                                    {!! Form::select('option_id', $options, null,['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('memberclub', 'Mention Clubs or Associations where you have been a member.') !!}
                                    {!! Form::text('memberclub', null, array('class' => 'form-control' , 'placeholder' => 'Exemple: Sport Club, Religiuos, other')) !!}

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('criminalrecord', 'Household members dependent on you?') !!}
                                    {!! Form::select('option_id', $options, null,['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('mexicoprision', 'Time living in current residence?') !!}
                                    {!! Form::select('option_id', $options, null,['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="well well-sm">
                            <span style="font-size: 1em;" class="label label-success">Availability/When can you start? &nbsp; <i class="fa fa-clock-o" aria-hidden="true"></i>
</span>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('shift', 'Shift') !!}
                                    {!! Form::select('shift', ['Morning', 'Afternoon', 'Night']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('onCall', 'Are you available for on-call work?' ) !!}
                                    {!! Form::select('option_id', $options, null,['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('nightShift', 'Are you available for night shift?') !!}
                                    {!! Form::select('option_id', $options, null,['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>

                       <div class="well well-sm">
                           <span style="font-size: 1em;" class="label label-success">References &nbsp; <i class="fa fa-users" aria-hidden="true"></i>
</span>
                       </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('refname', 'Name') !!}
                                    {!! Form::text('refname', null, array('class' => 'form-control' , 'placeholder' => 'Enter Reference Name')) !!}

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('refocupation', 'Occupation ') !!}
                                    {!! Form::text('refocupation', null, array('class' => 'form-control' , 'placeholder' => 'Enter Reference Occupation')) !!}

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('refphone', 'Reference Phone') !!}
                                    {!! Form::text('refphone', null, array('class' => 'form-control' , 'placeholder' => 'Enter Reference Phone')) !!}

                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('refemail', 'Reference Email') !!}
                                        {!! Form::text('refemail', null, array('class' => 'form-control' , 'placeholder' => 'Enter Reference Email')) !!}

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('timeknow', 'How long have you known this person? (1) ') !!}
                                        {!! Form::text('timeknow', null, array('class' => 'form-control' , 'placeholder' => 'Enter How long have you known this person')) !!}

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="">
                                            <button style="margin-top: 5%;" class="btn btn-success">Add More Fields &nbsp; <i class="fa fa-plus"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="well well-sm">
                                <span style="font-size: 1em;" class="label label-success">Employment References &nbsp; <i class="fa fa-building" aria-hidden="true"></i>
</span>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('workexperience','Work Experience') !!}
                                        {!! Form::text('workexperience', null, array('class' => 'form-control', 'placeholder' => 'Enter Yes or No' )) !!}

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('companyname','Name of the Company') !!}
                                        {!! Form::text('companyname', null, array('class' => 'form-control', 'placeholder' => 'Enter the Company Name' )) !!}


                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('companycountry','Country') !!}
                                        {!! Form::text('companycountry', null, array('class' => 'form-control', 'placeholder' => 'Enter Country' )) !!}

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('workdate','Date') !!}
                                        {!! Form::text('workdate', null, array('class' => 'form-control', 'placeholder' => 'Exemple: 12/12/1980' )) !!}


                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('quitjob','Why did you leave your job?') !!}
                                        {!! Form::text('quitjob', null, array('class' => 'form-control', 'placeholder' => 'Enter Here' )) !!}


                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('jobtitle','Job Title') !!}
                                        {!! Form::text('jobtitle', null, array('class' => 'form-control', 'placeholder' => 'Last Job Title' )) !!}


                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('supervisorname','Who was your supervisor?') !!}
                                        {!! Form::text('supervisorname', null, array('class' => 'form-control', 'placeholder' => 'Enter Supervisor Name' )) !!}


                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('quitjob','Supervisor Phone') !!}
                                        {!! Form::text('quitjob', null, array('class' => 'form-control', 'placeholder' => 'Enter Supervisor Phone' )) !!}


                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <button style="margin-top: 5%;" class="btn btn-success">Add More Fields &nbsp; <i class="fa fa-plus"></i> </button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">

                                      <button class="btn btn-success" type="submit">Submit Application!</button>

                                  </div>
                                </div>
                                <div class="col-md-6">

                                </div>
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