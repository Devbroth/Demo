 @if(auth()->user())
 @extends('dashboard')
 @section('containt')  
 <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Bank Detail List</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Bank Detail</a></li>
                            </ol>
                        </div>
                    </div>
                </div>          
            </div>         
              <div class="contentbar">                
              
                @if(Session::has('message'))
                  <p class="alert alert-success" style="background-color:#6ded6d;color:#fff" id="myElem">{{ Session::get('message') }}</p>
                  @endif
                  
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Bank Detail List</h5>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                             <th>Sr.no</th>
                                            <th>Bank Name</th>
                                            <th>Account Number</th>
                                            <th>IFSC Code</th>
                                             <th>Account Type</th>
                                            <th>Pan Number</th>
                                          
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                        $supplier_id= Auth::user()->user_id;
                                        $i=1; ?>
                                         @foreach($data as $value)
                                          <?php if($supplier_id = $value->supplier_id) { ?>
                                             <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$value->bank_name}}</td>
                                            <td>{{$value->account_number}}</td>
                                            <td>{{$value->ifsc_code}}</t>
                                            <td>{{$value->account_type}}</td>
                                            <td>{{$value->pan_number}}</td>
                                            <td>
                                               
                                             <a href="{{ url('/account/edit',  ['id'=> Crypt::encrypt($value->id)]) }}"><button type="button"  class="btn btn-dark waves-effect waves-light" style="float: none;margin: 5px;"><span class="fa fa-pencil"></span></button></a>
                                            <button class="btn btn-danger" onclick="deleteConfirmation({{$value->id}})"><span class="fa fa-trash"></span></button>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                        @endforeach
                                             
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
               
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
                    url: "https://kamakhyaits.com/gorcery_supplier/public/deleteaccount/" + id,
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