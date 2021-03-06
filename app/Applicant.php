<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicants';
    protected $fillable = [
        'workbefore',
        'payrange',
        'desirepostion',
        'name',
        'psourname',
        'msourname',
        'dob',
        'age',
        'gender',
        'pofbirth',
        'nationality',
        'city',
        'stret',
        'streetnumber',
        'zipcode',
        'homephone',
        'mobilephone',
        'secondphone',
        'radiophone',
        'email',
        'relationship',
        'children',
        'fathername',
        'mothername',
        'emergencyphone',
        'relationemergency',
        'relationphoneEmergency',
        'dependents',
        'currentresidency',
        'levelofeducation',
        'graduationschool',
        'dates',
        'degree',
        'englishspeake',
        'englishwrite',
        'computerSkills',
        'validVisa',
        'tattos',
        'memberclub',
        'criminalrecord',
        'mexicoprision',
        'shift',
        'onCall',
        'nightShift',
        'refname',
        'refocupation',
        'refphone',
        'refemail',
        'timeknow',
        'workexperience',
        'companyname',
        'companycountry',
        'workdate',
        'quitjob',
        'jobtitle',
        'supervisorname',
        'supervisorphone',
    ];
}
