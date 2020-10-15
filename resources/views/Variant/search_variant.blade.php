 @if(auth()->user())
 @extends('dashboard')
 @section('containt') 
 <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Search Variant</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
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
                                <h5 class="card-title">Variant </h5>
                            </div>
                            <div class="card-body">
                                  @if(session()->get('success'))
                                    <div class="alert alert-success" id="myElem" style="background-color:#6ded6d;color:#fff">
                                      {{ session()->get('success') }}  
                                    </div>
                                   @endif
                                   @if(session()->get('error'))
                                    <div class="alert alert-danger" id="myElem" style="background-color:red;color:#fff">
                                      {{ session()->get('error') }}  
                                    </div>
                                   @endif
                                <?php $cat_id = rand(1000,1000000000); ?>
                               <form id="myForm" enctype="multipart/form-data">
                                 
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            
                                          <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Variant SKU" autocomplete="off" />
                                             <div id="variantlist"></div>
                                            
                                           
                                      
                                        </div>
                                        <div class="form-group col-md-2">
                                          <center>  <button type="submit" class="btn btn-primary">Search Variant</button></center>
                                        </div>
                                    </div>
                                  
                                </form>
                                <br>
                            </div>
                        </div>
                    </div>
               <div class="col-md-1"></div> 
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script type="text/javascript">

    $('#myForm').on('submit',function(event){
        event.preventDefault();

        product_name = $('#product_name').val();
        $.ajax({
          url: 'https://kamakhyaits.com/grocery_product/public/suppliervariantlist/suppliersearch',
          type:"POST",
          // dataType: "json",
          data:{
            "_token": "{{ csrf_token() }}",
            product_name:product_name,
          },
         success: function(result){
             if(result.status == 200){
                    $("#success").show()
                    $("#myForm")[0].reset(); 
                    $( "#v_sku" ).val( (result.v_sku));
                    $( "#product_sku" ).val( (result.product_sku));
                    $("#paypalpayment").submit();
             } if(result.status == 201){
                   $("#error").show()
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
</script>

<form id="paypalpayment" name="form_id" action="{{url('product/add-product')}}" method="get">
  <input type="hidden" name="product_sku" id="product_sku">
  <input type="hidden" name="v_sku" id="v_sku">

  }
</form>


























<script>
$(document).ready(function(){

 $('#product_name').keyup(function(){ 
        var product_name = $(this).val();
        if(product_name != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url: "https://kamakhyaits.com/grocery_product/public/variantautofill",
          method:"POST",
          data:{product_name:product_name, _token:_token},
          success:function(data){
           $('#variantlist').fadeIn();  
                    $('#variantlist').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#product_name').val($(this).text());  
        $('#variantlist').fadeOut();  
    });  

});
</script>
































<!--  <script type="text/javascript">
        $(document).ready(function () {
           $('#variant_sku').change(function () {
             var id = $(this).val();

             $('#unit_type').find('option').not(':first').remove();

             $.ajax({
                url:'https://kamakhyaits.com/grocery_product/public/unitamount/'+id,
                type:'get',
                dataType:'json',
                success:function (response) {
                    var len = 0;
                    if (response.data != null) {
                        len = response.data.length;
                    }

                    if (len>0) {
                        for (var i = 0; i<len; i++) {
                             var id = response.data[i].id;
                             var unit_type = response.data[i].unit_type;

                             var option = "<option value='"+id+"'>"+unit_type+"</option>"; 

                             $("#unit_type").append(option);
                        }
                    }
                }
             })
           });
        });
</script> -->

              @endsection
         @endif