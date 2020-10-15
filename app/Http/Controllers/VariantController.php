<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use \Crypt;
use Auth;
use Guzzle\Http\Client;
class VariantController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
     
    function add()
    {
       return view('Variant.search_variant');
    }
}
