<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Mail;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }


    public function login(AuthenticatesUsers $authenticatesUsers, Request $request, $provider = null)
    {
        return $authenticatesUsers->excute($request->all(), $this, $provider);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    public function store(Request $request)
    {
        $users = new User($request->all());
//        $users->confirm_token = str_random(120);
        $users->save();
//        $url = route('register/confirmation/{token}', ['token' => $users->confirm_token]);
//        Mail::send('emails/registration', compact('users', 'url'), function ($m) use ($users) {
//            $m->to($users->email, $users->username->subject('Activa tu cuenta'));
//        });
        return redirect('auth/login');
        //dd($users);
    }

    public function index() {
        return view ('auth.login');
    }
}
