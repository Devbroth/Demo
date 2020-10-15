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
class AccountController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
     public function index(Request $request){
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://kamakhyaits.com/grocery_user/public/accountlist');
        $response = $request->getBody();
          $data = json_decode($response);
          return view('Account.index',['data'=>$data]);
      }
    function add()
    {
       return view('Account.add');
    }
    public function edit(Request $request){
      // echo "string";die;
      $id = Crypt::decrypt($request->id);
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://kamakhyaits.com/grocery_user/public/accountlist');
        $response = $request->getBody();
          $data = json_decode($response);
          // echo "<pre>";print_r($data);die;
          foreach ($data as  $value) {
            if($id == $value->id){
              $arr['id'] = $value->id;
              $arr['bank_name'] = $value->bank_name;
              $arr['account_type'] = $value->account_type;
              $arr['account_number'] = $value->account_number;
              $arr['ifsc_code'] = $value->ifsc_code;
              $arr['pan_number'] = $value->pan_number;
             
            }

          }
           return view('Account.edit',['arr'=>$arr]);
    }
   
        public function destroy($id)
    {

       DB::delete('delete from tbl_supplyer_product where id = ?',[$id]);
        return redirect('product')->with('message', 'successfully delete');
    }
   
    
}
