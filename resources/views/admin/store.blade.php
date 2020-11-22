@extends('admin.master.admin-master')
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/bootstrap/css/datatables.css')}}">
    <link href="{{asset('public/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <title>Hawk Action Reporting Portal</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @yield('nav')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @yield('sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Add New Store</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Stores</li>
                                        </ol>
                                    </nav>
                                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                                      Add New Camera
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <!-- ============================================================== -->
                        <!-- ========================= Search Bar ========================= -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0"></div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                <div class="card-body">
                                    <form action="{{route('addstore')}}" method="POST" id="storeform" data-parsley-validate="" novalidate="">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Client</label>
                                                        <select class="form-control" id="user_id" name="user_id">
                                                            <option>Select Client</option>
                                                            @foreach($users as $user)
                                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Store Name</label>
                                                    <input id="store_name" type="text" name="store_name" data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input id="address" type="text" name="address" data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>City</label>
                                                        <select class="form-control" id="city_id" name="city_id">
                                                            <option>Select City</option>
                                                            @foreach($cities as $city)
                                                            <option value="{{$city->id}}">{{$city->city_name}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>State</label>
                                                        <select class="form-control" id="state_id" name="state_id">
                                                            <option>Select State</option>
                                                            @foreach($states as $state)
                                                            <option value="{{$state->id}}">{{$state->state_name}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Country</label>
                                                        <select class="form-control" id="country_id" name="country_id">
                                                            @foreach($countries as $country)
                                                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <p class="text-right m-2">
                                                    <button type="submit" class="btn btn-space btn-primary">Add Store </button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                         <label id="report-msg" class=""></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0"></div>
                    </div>
                        <!-- ============================================================== -->                          <!-- Package List Table   -->
                        <!-- ============================================================== -->

                        @if(session('success'))
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 message">
                            <label id='success-delete' class="report-success">{{session('success')}}</label>
                        </div>
                        @elseif(session('error'))
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 message">
                            <label id='error-delete' class="report-error">{{session('error')}}</label>
                        </div>
                        @endif

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Stores</h5>
                                    <div class="card-body p-0"> 
                                        <div class="table-responsive">
                                            <table id="store_table" class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Store ID</th>
                                                        <th class="border-0">Client</th>
                                                        <th class="border-0">Store Name</th>
                                                        <th class="border-0">Address</th>
                                                        <th class="border-0">City</th>
                                                        <th class="border-0">State</th>
                                                        <th class="border-0">Country</th>
                                                        <th class="border-0">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    
                                                </tbody>
                                            </table>    
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- ======================== Modal =============================== -->
            <!-- ============================================================== -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add New Camera</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="camera_form">
                  @csrf
                  <div class="modal-body">
                        <div class="form-group">
                            <label>Store</label>
                            <select class="form-control" id="store_id" name="store_id">
                                <option>Select Store</option>
                                @foreach($stores as $store)
                                <option value="{{$store->id}}">{{$store->store_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Camera Name</label>
                            <input id="camera_name" type="text" name="camera_name" data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Camera</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2020 Concept. All rights reserved. Dashboard by MRM-Soft.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- INDEX PAGE end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{asset('public/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/datatables.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/datatables_bootstrap.js')}}"></script>    
    <script src="{{asset('public/vendor/bootstrap/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/buttons.print.min.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{asset('public/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('public/js/main-js.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            var table = $('#store_table').DataTable({
                dom: 'Bfrtip',
                "pageLength": 15,
                "order": [[ 0, "desc" ]],
                buttons: [
                    'print',
                ]
            } );

            $.ajax({
                type:"GET",
                url:"{{route('showstore')}}",
                success:function(data){

                    if(data != 'null')
                        {
                            var data1 = JSON.parse(data);
                            var del = "";
                            
                            $.each(data1,function(key,value){
                                
                                del = "<a href='/admin/delstore/"+value.id+"' class='font-tags edit' onclick='if (! confirm('Are you sure you want to delete?')) { return false; }'><i class='fa fa-trash' aria-hidden='true'></i></a>"
                                table.row.add([value.id,value.username,value.store_name,value.address,value.city_name,value.state_name,value.country_name,del]);
                                table.draw();
                            });

                        }
                        else{
                            
                            console.log("No Values Found in Database");
                        }
                },
                error:function(){
                    console.log("Error in fetching reports from database (Please check your Internet Connection)");
                }
            });


            //APPEND NEW SINGLE ROW TO TABLE WHEN FORM CLICK

            $('#storeform').on('submit',function(e){
                e.preventDefault();

                var formData = new FormData(this);

                var msg = '';

                $.ajax({
                    type:'POST',
                    url: "{{route('addstore')}}",
                    data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,

                    success: function(data){

                        if(data != 'null')
                        {
                            var data1 = JSON.parse(data);
                            var del = "";
                            
                            //$.each(data1,function(key,value){
                                
                                del = "<a href='/admin/delstore/"+data1.id+"' class='font-tags edit' onclick='if (! confirm('Are you sure you want to delete?')) { return false; }'><i class='fa fa-trash' aria-hidden='true'></i></a>"
                                table.row.add([data1.id,data1.username,data1.store_name,data1.address,data1.city_name,data1.state_name,data1.country_name,del]);
                                table.draw();
                            //});

                        }
                        else{
                            
                            //console.log("No Values Found in Database");
                        }
                        
                        $('#report-msg').removeClass('report-error');
                        $('#report-msg').addClass('report-success');
                        $('#report-msg').html('<i id="report-icon" class="fas fa-check"></i> Successfully Added New Store');
                        $('#report-msg').fadeIn('slow');
                    },
                    error: function(){
                        
                        $('#report-msg').removeClass('report-success');
                        $('#report-msg').addClass('report-error');
                        $('#report-msg').html('<i id="report-icon" class="fas fa-times"></i> Error  " All fields must be selected "');
                        $('#report-msg').fadeIn('slow');
                    }
                });

                $('#store_name').val('');
                //$('#store').val('Select Store');
                $('#address').val('');
                $('#city_id').val('Select City');
                $('#state_id').val('Select State');

                setTimeout(function() {
                    $('#report-msg').fadeOut('slow');
                }, 5000);

            });


            $('#camera_form').on('submit',function(){

                $.ajax({

                    type:"POST",
                    url:"{{route('addcamera')}}",
                    data:$('#camera_form').serialize(),
                    success:function(response)
                    {
                        console.log(response);
                        alert("New Camera Added Successfully");
                    },
                    error:function(error)
                    {
                        console.log(error);
                        alert("Error in adding camera");
                    },

                });

            });



        });    
    </script>
   
</body>
 
</html>