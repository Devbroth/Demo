<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use \Crypt;
class ProductController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $client = new \GuzzleHttp\Client();
          $request = $client->get('https://kamakhyaits.com/grocery_product/public/supplierproductlist');
          $response = $request->getBody();
          $data = json_decode($response);
          // echo "<pre>";print_r($data);die;
          return view('Product.index',['data'=>$data]); 
    }
    function add(Request $request)
    {
         $pro_sku = $request->product_sku;
          $var_sku = $request->v_sku;
          $client = new \GuzzleHttp\Client();
          $request = $client->get('https://kamakhyaits.com/grocery_product/public/supplierproduct/product');
          $response = $request->getBody();
          $data = json_decode($response);

          $clientc = new \GuzzleHttp\Client();
          $requestc = $clientc->get('https://kamakhyaits.com/grocery_product/public/pincodelist');
          $responsec = $requestc->getBody();
          $datac = json_decode($responsec);
          // echo "<pre>";print_r($datac);die;
           
        return view('Product.add',compact('data','datac'));
    }
     public function edit(Request $request){
      // echo "string";die;
      $id = Crypt::decrypt($request->id);
       
          $client1 = new \GuzzleHttp\Client();
          $request1 = $client1->get('https://kamakhyaits.com/grocery_product/public/supplierproduct/product');
          $response1 = $request1->getBody();
          $data1 = json_decode($response1);


        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://kamakhyaits.com/grocery_product/public/supplierproductlist');
        $response = $request->getBody();
          $data = json_decode($response);
          
          foreach ($data as  $value) {
            if($id == $value->id){
              $arr['id'] = $value->id;
              $arr['city '] = $value->city ;
              $arr['product_sku'] = $value->product_sku;
              $arr['variant_sku'] = $value->variant_sku;
              $arr['description'] = $value->description;
              $arr['product_name'] = $value->product_name;
              $arr['additional_note'] = $value->additional_note;
              $arr['product_quantity'] = $value->product_quantity;
              $arr['expiry_date'] = $value->expiry_date;
              $arr['mrp'] = $value->mrp;
              $arr['discount_type'] = $value->discount_type;
              $arr['discount_amount'] = $value->discount_amount;
              $arr['selling_price'] = $value->selling_price;
              $arr['total_quantity_offered'] = $value->total_quantity_offered;
            }

          }
          return view('Product.edit',compact('arr','data1'));
    }
    
}
