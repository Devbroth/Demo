<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{    
	 protected $connection = 'Supplyerdb';
	 protected $table = 'tbl_supplyer_product';
     protected $fillable = ['product_name','category_id','sub_category_id','sku','mrp_price','selling_price','quantity','unit','image','description'];
}