 @if(auth()->user())
 @extends('dashboard')
 @section('containt') 

 <meta name="_token" content="{{csrf_token()}}" />
 <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Edit Account Detail</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Account Detail</a></li>
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
                                <h5 class="card-title">Account Detail Form</h5>
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
                                            <label for="inputEmail4">Bank Name</label>
                       <input type="text" class="form-control" id="bank_name" name="bank_name" value="{{$arr['bank_name']}}" placeholder=" bank name">
                                      
                                        </div>
                                       
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Account Type</label>
<select class="form-control" name="account_type" id="account_type">
 <option>choose..</option>
 <option value="business" <?php if($arr['account_type'] == 'business'){echo "selected";}?>>Business</option>
 <option value="saving" <?php if($arr['account_type'] == 'saving'){echo "selected";}?>>Saving</option>
 <option value="current" <?php if($arr['account_type'] == 'current'){echo "selected";}?>>Current</option>
</select>
                                          
                                        </div>
                                    </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                            <label for="inputPassword4">Account Number</label>
                                            <input type="text" class="form-control" name="account_number" value="{{$arr['account_number']}}" id="account_number" placeholder="account number">
                                          
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">IFSC Code</label>
                                            <input type="text" class="form-control" name="ifsc_code" value="{{$arr['ifsc_code']}}" id="ifsc_code" placeholder="ifsc code">
                                          
                                        </div>
                                    </div>
                                     <div class="form-row">
                                       
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Pan Number</label>
                                            <input type="text" class="form-control" name="pan_number" value="{{$arr['pan_number']}}" id="pan_number" placeholder="pan number">
                                          
                                        </div>
                                    </div>
                                    
                                  
                                 <center><button class="btn btn-primary" id="submit">Update Account</button></center>
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
         bank_name = $('#bank_name').val();
         account_type = $('#account_type').val();
         account_number = $('#account_number').val();
         ifsc_code = $('#ifsc_code').val();
         pan_number = $('#pan_number').val();
         

        $.ajax({
          url: 'https://kamakhyaits.com/grocery_user/public/accountlist/update',
          type:"POST",
          // dataType: "json",
          data:{
            "_token": "{{ csrf_token() }}",
            id:id,
            bank_name:bank_name,
            account_type:account_type,
            account_number:account_number,
            ifsc_code:ifsc_code,
            pan_number:pan_number,
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