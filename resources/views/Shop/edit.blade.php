 @if(auth()->user())
 @extends('dashboard')
 @section('containt') 
 <?php $var_id = null;
  ?>

 <meta name="_token" content="{{csrf_token()}}" />
 <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Edit Shop Detail</h4>
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
                                    <center><span class="btn btn-success" id="success" style="display:none;width: 80%">Successfully Update Record !!!</span>
                                     <span class="btn btn-danger" id="error1" style="display:none;width: 80%">Registration Number Already Exist !</span>
                                     <span class="btn btn-danger" id="error" style="display:none;width: 80%">GST Number Already Exist !</span>
                                    </center>   
                                <?php $cat_id = rand(1000,1000000000); ?>
                               <form id="myForm" enctype="multipart/form-data">
                                   <input type="hidden" name="id" id="id" value="{{$arr['id']}}">
                                    
                             
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">name</label>
                                            <input type="text" class="form-control" id="shop_name" name="shop_name" value="{{$arr['shop_name']}}" placeholder=" shop name">
                                      
                                        </div>
                                      
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">GST Number</label>
                                            <input type="text" class="form-control" name="shop_name" value="{{$arr['gst_number']}}" id="gst_number" placeholder="gst number">
                                          
                                        </div>
                                    </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                            <label for="inputPassword4">Registration Number</label>
                                            <input type="text" class="form-control" name="reg_number" value="{{$arr['reg_number']}}" id="reg_number" placeholder="registration number">
                                          
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Category</label>
                                            <input type="text" class="form-control" name="category" value="{{$arr['category']}}" id="category" placeholder="category">
                                          
                                        </div>
                                    </div>
                                     <div class="form-row">
                                       <div class="form-group col-md-6">
                                            <label for="inputPassword4">Pin Code</label>
                                            <input type="text" class="form-control" name="pin_code" value="{{$arr['pin_code']}}" id="pin_code" placeholder="pin code">
                                          
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Shop Type</label>
<select class="form-control" id="shop_type" name="shop_type">
  <option>choose...</option>
  <option value="grocery" <?php if($arr['shop_type'] == 'grocery'){echo "selected";} ?>>Grocery</option>
  <option value="dairy" <?php if($arr['shop_type'] == 'dairy'){echo "selected";} ?>>dairy</option>
</select>
                                           
                                        </div>
                                    </div>
                                     <div class="form-row">
                                       <div class="form-group col-md-6">
                                            <label for="inputPassword4">Off Day Of Week</label>
<select class="form-control" id="week_off" name="week_off">
  <option>choose...</option>
  <option value="sunday" <?php if($arr['week_off'] == 'sunday'){echo "selected";} ?>>Sunday</option>
  <option value="monday" <?php if($arr['week_off'] == 'monday'){echo "selected";} ?>>Monday</option>
  <option value="tuesday" <?php if($arr['week_off'] == 'tuesday'){echo "selected";} ?>>Tuesday</option>
  <option value="wednesday" <?php if($arr['week_off'] == 'wednesday'){echo "selected";} ?>>Wednestday</option>
  <option value="thrusday" <?php if($arr['week_off'] == 'thrusday'){echo "selected";} ?>>Thrusday</option>
  <option value="firday" <?php if($arr['week_off'] == 'firday'){echo "selected";} ?>>Firday</option>
  <option value="saturday" <?php if($arr['week_off'] == 'saturday'){echo "selected";} ?>>Saturday</option>
</select>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Address</label>
                                            <input type="text" class="form-control" name="address" value="{{$arr['address']}}" id="address" placeholder="address">
                                          
                                        </div>
                                    </div>
                                     <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">City</label>
                                            <input type="text" class="form-control" name="city" value="{{$arr['city']}}" id="city" placeholder="city">
                                          
                                        </div>
                                    </div>
                                  
                                 <center><button class="btn btn-primary" id="submit">Update Shop</button></center>
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

        id = $('#id').val();
       
         shop_name = $('#shop_name').val();
       
         gst_number = $('#gst_number').val();
         reg_number = $('#reg_number').val();
         category = $('#category').val();
         pin_code = $('#pin_code').val();
         shop_type = $('#shop_type').val();
         week_off = $('#week_off').val();
         address = $('#address').val();
         city = $('#city').val();

        $.ajax({
          url: 'https://kamakhyaits.com/grocery_user/public/shoplist/update',
          type:"POST",
          // dataType: "json",
          data:{
            "_token": "{{ csrf_token() }}",
            id:id,
           
            shop_name:shop_name,
            gst_number:gst_number,
            reg_number:reg_number,
            category:category,
            pin_code:pin_code,
            shop_type:shop_type,
            week_off:week_off,
            address:address,
            city:city,
           
          },
         success: function(result){
             if(result.status == 200){
                    $("#success").show()
                    $("#id").show()
                    $("#myForm")[0].reset();
                    location.reload(true); 
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

              @endsection
         @endif