 @if(auth()->user())
 @extends('dashboard')
 @section('containt') 
 <?php 
$p_sku=null;
$v_sku=null;
$p_sku = $_GET['product_sku'];
$v_sku = $_GET['v_sku'];
 ?>
 <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Add Product</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                               <!--  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Product</a></li> -->
                            </ol>
                        </div>
                    </div>
                </div>          
            </div> 

            <div class="row">
            <div class="col-md-1"></div> 
              <div class="col-md-10">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Product Form</h5>
                            </div>
                            <div class="card-body">
                                    @if(session()->get('success'))
                                        <div class="alert alert-success" id="myElem" style="background-color:#6ded6d;color:#fff">
                                          {{ session()->get('success') }}  
                                        </div>
                                       @endif
   <center><span class="btn btn-success" id="success" style="display:none;width: 80%">Successfully Store Record !!!</span>
 <span class="btn btn-danger" id="error" style="display:none">you can add only one product with same cit !</span>
</center>
                               <form id="myForm" enctype="multipart/form-data">
 
                                   <input type="hidden" name="supplier_id" id="supplier_id" value="{{ Auth::user()->user_id }}">


                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Product Sku</label>
                                            <input type="text" class="form-control" id="product_sku" name="product_sku" value="<?php echo $p_sku; ?>" readonly="">
                                            
                                      
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Variant SKU</label>
                                            <input type="text" class="form-control" id="variant_sku" name="variant_sku" value="<?php echo $v_sku; ?>" readonly="">
                                          
                                        </div>
                                    </div>
                                    @foreach($data as $prod)
                                    <?php if($p_sku == $prod->product_sku){ ?>
                                    <input type="hidden" class="form-control" id="variant_id" name="variant_id" value="{{$prod->variant_id}}" readonly="">

                                    <input type="hidden" class="form-control" id="product_id" name="product_id" value="{{$prod->product_id}}" readonly="">

                                    <input type="hidden" class="form-control" id="unit_type" name="unit_type" value="{{$prod->unit_type}}" readonly="">

                                    <input type="hidden" class="form-control" id="unit_amount" name="unit_amount" value="{{$prod->unit_amount}}" readonly="">



                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Name</label>
                                            <input type="text" class="form-control" id="product_name" name="product_name" value="{{$prod->product_name}}" readonly="">
                                            <span id="require" style="display:none;color:red">field are required</span>
                                      
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Product Category</label>
                                            <input type="text" class="form-control"  value="{{$prod->product_category_name}}" readonly="">
                                             <input type="hidden" name="product_category_id" id="product_category_id" value="{{$prod->product_category_id}}">
                                        </div>
                                    </div>
                                     <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="inputAddress">Sub Category</label>
                                           <input type="text" class="form-control"  value="{{$prod->product_sub_category_name}}" readonly="">
                                       <input type="hidden" name="product_sub_category_id" id="product_sub_category_id" value="{{$prod->product_sub_category_id}}">
                                          
                                        </div>
                                       <div class="form-group col-md-6">
                                            <label for="inputZip">Brand Name</label>
                                            <input type="text" class="form-control" value="{{$prod->brand_name}}" readonly="">
                                            <input type="hidden" name="brand_id" id="brand_id" value="{{$prod->brand_id}}">
                                           
                                        </div>
                                   </div>
                                   <?php } ?>
                                   @endforeach
                                   <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Product quantity</label>
                                            <input type="text" class="form-control" id="product_quantity" name="product_quantity" value="{{old('product_quantity')}}" placeholder="quantity">
                                            
                                      
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Expire Date</label>
                                            <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="{{old('expiry_date')}}" placeholder="expiry date">
                                          
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">MRP</label>
                                            <input type="text" class="form-control" id="mrp" name="mrp" value="{{old('mrp')}}" placeholder="product mrp">
                                            
                                      
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Discount Type</label>
                                            <select class="form-control" id="discount_type" id="discount_type" value="{{old('discount_type')}}">
                                                <option value="precentage">Precebtage</option>
                                                <option value="flat_price">Flat Price</option>
                                                <option value="no_discount">No Discount</option>
                                            </select>
                                          
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Discount Amount</label>
                                            <input type="text" class="form-control" id="discount_amount" name="discount_amount" value="{{old('discount_amount')}}" placeholder="discount amount">
                                        </div>
                                        <div class="form-group col-md-6">
                                             <label for="inputEmail4">Selling Price</label>
                                            <input type="text" class="form-control" id="selling_price" name="selling_price" value="{{old('selling_price')}}" placeholder="selling price">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Discription Note</label>
                        <input type="text" class="form-control" id="additional_note" name="additional_note" value="{{old('additional_note')}}" placeholder=" * note">
                                        </div>
                                        <div class="form-group col-md-6">
                                             <label for="inputEmail4">Total Quantity Offered</label>
                                            <input type="text" class="form-control" id="total_quantity_offered" name="total_quantity_offered" value="{{old('total_quantity_offered')}}" placeholder="total quantity offered">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                          <label for="inputPassword4">City</label>
                                          <select class="form-control" name="city_id" id="city_id">
                                               @foreach($datac as $city)
                                                  <option value="{{$city->city_id}}">{{$city->city_name}}</option>
                                                @endforeach  
                                          </select>
                                        
                                      </div>
                                    </div>
                                     <div class="form-row">
                                        <div class="form-group col-md-12">
                                           <label for="inputCity">Description</label>
                                          <textarea rows="5" value="{{old('description')}}" name="description" id="description" class="form-control"></textarea>
                                          
                                        </div>
                                    </div>
                                   
                                  <center>   <button type="submit" class="btn btn-primary">Add Product</button></center>
                                </form>
                                <br>
                            </div>
                        </div>
                    </div>
               <div class="col-md-1"></div>  
           </div>



            
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script type="text/javascript">
     $('#myForm').on('submit',function(event){
        event.preventDefault();

       event.preventDefault();
        product_sku = $('#product_sku').val();
        variant_sku = $('#variant_sku').val();
        product_id = $('#product_id').val();
        variant_id = $('#variant_id').val();
        supplier_id = $('#supplier_id').val();
        product_name = $('#product_name').val();
        product_category_id = $('#product_category_id').val();
        product_sub_category_id = $('#product_sub_category_id').val();
        brand_id = $('#brand_id').val();
        mrp = $('#mrp').val();
        expiry_date = $('#expiry_date').val();
        discount_type = $('#discount_type').val();
        discount_amount = $('#discount_amount').val();
        product_quantity = $('#product_quantity').val();
        selling_price = $('#selling_price').val();
        additional_note = $('#additional_note').val();
        total_quantity_offered = $('#total_quantity_offered').val();
        unit_amount = $('#unit_amount').val();
        unit_type = $('#unit_type').val();
        city_id = $('#city_id').val();
        description = $('#description').val();

        $.ajax({
          url: 'https://kamakhyaits.com/grocery_product/public/supplierproductlist/store',
          type:"POST",
          // dataType: "json",
          data:{
            "_token": "{{ csrf_token() }}",
            product_sku:product_sku,
            supplier_id:supplier_id,
            variant_sku:variant_sku,
            variant_id:variant_id,
            product_id:product_id,
            product_name:product_name,
            product_category_id:product_category_id,
            product_sub_category_id:product_sub_category_id,
            brand_id:brand_id,
            mrp:mrp,
            discount_type:discount_type,
            discount_amount:discount_amount,
            expiry_date:expiry_date,
            selling_price:selling_price,
            product_quantity:product_quantity,
            additional_note:additional_note,
            total_quantity_offered:total_quantity_offered,
            unit_amount:unit_amount,
            unit_type:unit_type,
            description:description,
            city_id:city_id,
          },
         success: function(result){
             if(result.status == 200){
                    $("#success").show()
                    $("#myForm")[0].reset(); 
                    //  $( "#var" ).val( (result.id));
                    // $("#paypalpayment").submit();
             } if(result.status == 201){
                   $("#error").show()
             }
             if(result.status == 202){
                   $("#require").show()
             }
             
          
          }});
        });
      </script>
      <script>
    setInterval(() => {
       $("#success").hide()
       $("#error").hide()
       $("#error1").hide()
       $("#loading").hide();
       $("#already").hide()
   }, 5000);
     setInterval(() => {
       $("#require").hide()
   }, 7000);
</script>
<!-- <form id="paypalpayment" name="form_id" action="{{url('variantlist/add')}}" method="post">
  @csrf()
  <input type="hidden" name="id" id="var">
  }
</form> -->
              @endsection
         @endif