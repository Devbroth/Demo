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
class ShopController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
        
    }
     public function index(Request $request){
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://kamakhyaits.com/grocery_user/public/shoplist');
        $response = $request->getBody();
          $data = json_decode($response);
          return view('Shop.index',['data'=>$data]);
      }
    function add()
    {
       $clientc = new \GuzzleHttp\Client();
           $requestc = $clientc->get('https://kamakhyaits.com/grocery_product/public/citylist');
           $responsec = $requestc->getBody();
           $datac = json_decode($responsec);
       return view('Shop.add',['datac'=>$datac]);
    }
    function fetch(Request $request)
    {
      $arr = array();
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     
           $client = new \GuzzleHttp\Client();
           $request = $client->get('https://kamakhyaits.com/grocery_product/public/pincodelist');
           $response = $request->getBody();
           $data = json_decode($response);
           $data = json_decode($response);
           foreach ($data as  $val) {
             if($value == $val->city_id){
              array_push($arr, $val->pincode);
             }
           }

     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($arr as $row)
     {
      $output .= '<option value="'.$row.'">'.$row.'</option>';
     }
     echo $output;
    }
    public function edit(Request $request){
      // echo "string";die;
      $id = Crypt::decrypt($request->id);
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://kamakhyaits.com/grocery_user/public/shoplist');
        $response = $request->getBody();
          $data = json_decode($response);
          foreach ($data as  $value) {
            if($id == $value->id){
              $arr['id'] = $value->id;
              $arr['supplier_id '] = $value->supplier_id ;
              $arr['shop_id'] = $value->shop_id;
              $arr['city'] = $value->city;
              $arr['shop_name'] = $value->shop_name;
              $arr['gst_number'] = $value->gst_number;
              $arr['reg_number'] = $value->reg_number;
              $arr['category'] = $value->category;
              $arr['pin_code'] = $value->pin_code;
              $arr['shop_type'] = $value->shop_type;
              $arr['week_off'] = $value->week_off;
              $arr['address'] = $value->address;
            }

          }
          return view('Shop.edit',['arr'=>$arr]);
    }
        public function destroy($id)
    {
       DB::delete('delete from tbl_supplyer_product where id = ?',[$id]);
       return redirect('product')->with('message', 'successfully delete');
    }
   
    
}
