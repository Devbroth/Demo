<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'user_id' => 'required',
            'phone' => 'required|min:10|numeric',
            'dob' => 'required',
            'adhar_number'=>'required',
            'address' => 'required',
            'email' => 'required|string|email|max:255|unique:suppliers',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
            $string  = $data['name'];
            $result = substr($string, 0, 2);
            $str=strtoupper($result);
            $ran = $str.$data['user_id'];
            $u_id = $ran;
        return User::create([
            'name' => $data['name'],
            'user_id' => $u_id,
            'phone' => $data['phone'],
            'dob' => $data['dob'],
            'adhar_number' => $data['adhar_number'],
            'email' => $data['email'],
            'address' => $data['address'],
            'api_token' => $data['password'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
