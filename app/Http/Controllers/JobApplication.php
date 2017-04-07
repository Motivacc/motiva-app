<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

// Librerias y Dependencias
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Mail;

//Modelos
use App\Applicant;
use App\JobOptions;
use App\Position;
use App\Gender;
use App\Martial;



class JobApplication extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicant = Applicant::orderBy('id', 'ASC')->paginate('20');
        return view('applications/index', compact('applicant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = JobOptions::orderBy('id', 'ASC')->lists('name');
        $positions = Position::orderBy('id', 'ASC')->lists('name');
        $genders = Gender::orderBy('id', 'ASC')->lists('name');
        $skills = Skill::orderBy('id', 'ASC')->lists('name');
        $maritals = Martial::orderBy('id', 'ASC')->lists('name');
        return view('applications/create', compact('options', 'positions', 'genders', 'skills', 'maritals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $applicant = new Applicant($request->all());
        $applicant->save();
        return redirect('apply/create');
        //dd($applicant);
    }

    public function submited(){
        return view('applicants/submited');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
