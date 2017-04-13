<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Applicant;
use App\User;
use App\Martial;
use App\JobOptions;
use App\Position;
use App\Skill;
use App\Gender;

use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function doLogin(){
        $rules = array(
            'email'     => 'required|email',
            'password'  => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Redirect::to('auth/login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            // autenticamos por medio de las credenciales
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            );

            //Intentamos  hacer el login
            if (Auth::attempt($userdata)) {


                echo 'SUCCESS!';

            } else {

                // si no pasan las credenciales redirigimos
                return Redirect::to('login');

            }


        }
    }


    public function index()
    {
        $skills = Skill::orderBy('id', 'ASC')->paginate('5');
        $options = JobOptions::orderBy('id', 'ASC')->paginate('5');
        $positions = Position::orderBy('id', 'ASC')->paginate('5');
        $maritals = Martial::orderBy('id', 'ASC')->paginate('5');
        $users = User::orderBy('id', 'ASC')->paginate('5');
        $applicants = Applicant::orderBy('id', 'ASC')->paginate('5');
        $genders = Gender::orderBy('id', 'ASC')->paginate('5');
        return view('home.index', compact('options', 'skills', 'positions', 'maritals', 'users', 'applicants', 'genders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
