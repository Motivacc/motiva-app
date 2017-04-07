<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApplicantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->enum('workbefore', ['Yes', 'No']);
            $table->string('payrange');
            $table->enum('desireposition', ['Customer Service Representative', 'Spanish Customer Service', 'Claims Representative', 'Sales Executive', 'IT', 'Other']);
            $table->string('name');
            $table->string('psourname');
            $table->string('msourname');
            $table->date('dob');
            $table->string('age');
            $table->enum('gender', ['Select', 'Male', 'Female']);
            $table->string('pofbirth');
            $table->string('nationality');

            $table->string('city');
            $table->string('state');
            $table->string('street');
            $table->string('streetnumber');
            $table->string('zipcode');
            $table->string('homephone');
            $table->string('mobilephone');
            $table->string('secondphone');
            $table->string('radioPhone');
            $table->string('email');
            $table->enum('relationship', ['Single', 'Married', 'Separated','Divorced', 'Living Together']);
            $table->string('children');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('emergencyphone');
            $table->string('relationemergency');
            $table->string('relationphoneEmergency');
            $table->string('dependents');
            $table->string('currentresidency');

            $table->string('leveleducation');
            $table->string('graduationschool');
            $table->date('dates');
            $table->string('degree');
            $table->string('englishspeake');
            $table->string('englishwrite');
            $table->enum('computerSkills',['beginner', 'intermediated', 'advanced']);
            $table->enum('validVisa', ['Yes', 'No']);
            $table->enum('tattos', ['Yes', 'No']);
            $table->string('memberclub');
            $table->enum('criminalrecord', ['Yes', 'No']);
            $table->enum('mexicoprision', ['Yes', 'No']);
            $table->enum('shift', ['Morning', 'Afternoon', 'Night']);
            $table->string('onCall');
            $table->enum('nightShift', ['Yes', 'No']);

            $table->string('refname');
            $table->string('refocupation');
            $table->string('refphone');
            $table->string('refemail');
            $table->string('timeknow');

            $table->enum('workexperience', ['Yes', 'No']);
            $table->string('companyname');
            $table->string('companycountry');
            $table->date('workdate');
            $table->string('quitjob');
            $table->string('jobtitle');
            $table->string('supervisorname');
            $table->string('supervisorphone');
            $table->integer('option_id')->unsigned()->nullable();
            $table->integer('skill_id')->unsigned()->nullable();
            $table->integer('position_id')->unsigned()->nullable();
            $table->integer('gender_id')->unsigned()->nullable();
            $table->integer('marital_id')->unsigned()->nullable();

            $table->foreign('option_id')->references('id')->on('options');
            $table->foreign('skill_id')->references('id')->on('skills');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('gender_id')->references('id')->on('gender');
            $table->foreign('marital_id')->references('id')->on('marital');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applicants');
    }
}
