@if(auth()->user())
 @extends('dashboard')
 @section('containt')  
 <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Product List</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Product</a></li>
                            </ol>
                        </div>
                    </div>
                </div>          
            </div>         
              <div class="contentbar">                
                <!-- Start row -->
                @if(Session::has('message'))
                  <p class="alert alert-success" style="background-color:#6ded6d;color:#fff" id="myElem">{{ Session::get('message') }}</p>
                  @endif
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Product List</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Product SKU</th>
                                            <th>Variant SKU</th>
                                            <th>Product Title</th>
                                            <th>MRP</th>
                                            <th>Quantity</th>
                                            <th>Selling Price</th>
                                            <th>Discount Type</th>
                                            <th>Discount Amount</th>
                                            <th>Expeiy Date</th>
                                            <th>Total Offer Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $value)
                                        <tr>
                                            <td>{{$value->product_sku}}</td>
                                            <td>{{$value->variant_sku}}</td>
                                            <td>{{$value->product_name}}</td>
                                            <td>{{$value->mrp}}</td>
                                            <td>{{$value->product_quantity}}</td>
                                            <td>{{$value->selling_price}}</td>
                                            <td>{{$value->discount_type}}</td>
                                            <td>{{$value->discount_amount}}</td>
                                            <td>{{$value->total_quantity_offered}}</td>
                                            <td>{{$value->expiry_date}}</td>
                                            <td>
                                               
                                              <a href="{{ url('/product/edit', ['id'=> Crypt::encrypt($value->id)]) }}"><button type="button"  class="btn btn-dark waves-effect waves-light" style="float: none;margin: 5px;"><span class="fa fa-pencil"></span></button></a>
                                           <button class="btn btn-danger" onclick="deleteConfirmation({{$value->id}})"><span class="fa fa-trash"></span></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div> 
             <script type="text/javascript">
    function deleteConfirmation(id) {
        swal({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "https://kamakhyaits.com/gorcery_supplier/public/deleteproduct/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {

                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                            location.reload(true);
                        } else {
                            swal("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script> 
         @endsection
         @endif