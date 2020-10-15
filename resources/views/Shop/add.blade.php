 @if(auth()->user())
 @extends('dashboard')
 @section('containt') 
 <?php $var_id = null;
  ?>

 <meta name="_token" content="{{csrf_token()}}" />
 <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Add Shop Detail</h4>
                        <div class="breadcrumb-list">
                            <!-- <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Shop Detail</a></li>
                            </ol> -->
                        </div>
                    </div>
                </div>          
            </div> 

            <div class="row">
            <div class="col-md-1"></div> 
              <div class="col-md-10">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Shop Detail Form</h5>
                            </div>
                            <div class="card-body">
                                  @if(session()->get('success_message'))
                                    <div class="alert alert-success" id="myElem" style="background-color:#6ded6d;color:#fff">
                                      {{ session()->get('success_message') }}  
                                    </div>
                                   @endif

                                     @if(session()->get('error'))
                                    <div class="alert alert-danger" id="myElem" style="background-color:red;color:#fff">
                                      {{ session()->get('error') }}  
                                    </div>
                                   @endif
                                    <center><span class="btn btn-success" id="success" style="display:none;width: 80%">Successfully Store Record !!!</span>
                                     <span class="btn btn-danger" id="error1" style="display:none;width: 80%">Registration Number Already Exist !</span>
                                     <span class="btn btn-danger" id="error" style="display:none;width: 80%">GST Number Already Exist !</span>
                                    </center>   
                                <?php $cat_id = rand(1000,1000000000); ?>
                               <form id="myForm" enctype="multipart/form-data">
                                   <input type="hidden" name="shop_id" id="shop_id" value="<?php echo $cat_id; ?>">
                                   <input type="hidden" name="supplier_id" id="supplier_id" value="{{ Auth::user()->user_id }} ">  
                             
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">name</label>
                                            <input type="text" class="form-control" id="shop_name" name="shop_name" value="{{old('shop_name')}}" placeholder=" shop name">
                                      
                                        </div>
                                      
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">GST Number</label>
                                            <input type="text" class="form-control" name="shop_name" value="{{old('gst_number')}}" id="gst_number" placeholder="gst number">
                                          
                                        </div>
                                    </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                            <label for="inputPassword4">Registration Number</label>
                                            <input type="text" class="form-control" name="reg_number" value="{{old('reg_number')}}" id="reg_number" placeholder="registration number">
                                          
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Category</label>
                                            <input type="text" class="form-control" name="category" value="{{old('category')}}" id="category" placeholder="category">
                                          
                                        </div>
                                    </div>
                                     <div class="form-row">
                                      <div class="form-group col-md-6">
                                            <label for="inputPassword4">City</label>
                                            <select name="city" id="city" class="form-control input-lg dynamic" data-dependent="pincode">
                                              <option value="">select</option>
                                             @foreach($datac as $value)
                                             <option value="{{$value->city_id}}">{{$value->city_name}}</option>
                                             @endforeach
                                            </select>
                                          
                                        </div>
                                       <div class="form-group col-md-6">
                                            <label for="inputPassword4">Pin Code</label>
                                            <select name="pincode" id="pincode" class="form-control input-lg dynamic">
                                             <option value="">Select Pin Code</option>
                                            </select>
                                          
                                        </div>
                                        
                                    </div>
                                     <div class="form-row">
                                      <div class="form-group col-md-6">
                                            <label for="inputPassword4">Shop Type</label>
                                            <select class="form-control" id="shop_type" name="shop_type">
                                              <option>choose...</option>
                                              <option value="grocery">Grocery</option>
                                              <option value="dairy">dairy</option>
                                            </select>
                                           
                                        </div>
                                       <div class="form-group col-md-6">
                                            <label for="inputPassword4">Off Day Of Week</label>
                                            <select class="form-control" id="week_off" name="week_off">
                                              <option>choose...</option>
                                              <option value="sunday">Sunday</option>
                                              <option value="monday">Monday</option>
                                              <option value="tuesday">Tuesday</option>
                                              <option value="wednesday">Wednestday</option>
                                              <option value="thrusday">Thrusday</option>
                                              <option value="firday">Firday</option>
                                              <option value="saturday">Saturday</option>
                                            </select>

                                        </div>
                                       
                                    </div>
                                     <div class="form-row">
                                         <div class="form-group col-md-6">
                                            <label for="inputPassword4">Address</label>
                                            <input type="text" class="form-control" name="address" value="{{old('address')}}" id="address" placeholder="address">
                                          
                                        </div>
                                    </div>
                                  
                                 <center><button class="btn btn-primary" id="submit">Add Shop</button></center>
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

        shop_id = $('#shop_id').val();
        supplier_id = $('#supplier_id').val();
         shop_name = $('#shop_name').val();
         gst_number = $('#gst_number').val();
         reg_number = $('#reg_number').val();
         category = $('#category').val();
         pin_code = $('#pin_code').val();
         shop_type = $('#shop_type').val();
         week_off = $('#week_off').val();
         address = $('#address').val();
         city = $('#city').val();
         pincode = $('#pincode').val();

        $.ajax({
          url: 'https://kamakhyaits.com/grocery_user/public/shoplist/store',
          type:"POST",
          // dataType: "json",count
          data:{
            "_token": "{{ csrf_token() }}",
            shop_id:shop_id,
            supplier_id:supplier_id,
            shop_name:shop_name,
            gst_number:gst_number,
            reg_number:reg_number,
            category:category,
            pin_code:pin_code,
            shop_type:shop_type,
            week_off:week_off,
            address:address,
            city:city,
            pincode:pincode,
           
          },
         success: function(result){
             if(result.status == 200){
                    $("#success").show()
                    $("#id").show()
                    $("#myForm")[0].reset();
                     $( "#shop" ).val( (result.shop));
                     $( "#supplier" ).val( (result.supplier));
                    $("#paypalpayment").submit();
                  // window.location.href = "http://localhost/grocery_admin/public/supplier/addshop/"+result.id; 
             }if(result.status == 201){
                   $("#error").show()
             }
             if(result.status == 202){
                   $("#error1").show()
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
   }, 3000);
</script>
<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('dynamicdependent.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#city').change(function(){
  // $('#pincode').val('');
  // $('#city').val('');
 });

 $('#pincode').change(function(){
  // $('#city').val('');
 });
 

});
</script>
<form id="paypalpayment" name="form_id" action="{{url('account/add-account')}}" method="get">
  
  <input type="text" name="supplier" id="supplier">
  <input type="text" name="shop" id="shop">
</form>
              @endsection
         @endif