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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <title>Hawk Action Reporting Portal</title>
    
    <style>
        .select2-container .select2-selection--single
        {
            height:34px !important;
        }
        .select2-container--default .select2-selection--single
        {
            border: 1px solid #d6d6ff !important; 
            border-radius: 0px !important; 
        }
        .select2-container--default .select2-selection--single:focus
        {
            box-shadow: 0 0 0 0.2rem #d6d6ff;
        }
        
    </style>
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
                                <h2 class="pageheader-title">Add New User</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Create User</li>
                                        </ol>
                                    </nav>
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
                                    <form action="" method="POST" id="userform" data-parsley-validate="" novalidate="">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>User Name</label>
                                                    <input id="name" type="text" name="name" data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input id="email" type="email" name="email" data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input id="password" type="password" name="password" data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input id="phone" type="text" name="phone" data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input id="address" type="text" name="address" data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <select class="form-control  pl-3 pt-1 select2" id="city_id" name="city_id">
                                                      <option>Select City</option>
                                                      @foreach($cities as $city)
                                                      <option value="{{$city->id}}">{{$city->city_name}}</option>
                                                      @endforeach
                                                    </select>    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <select class="form-control  pl-3 pt-1 select2" id="state_id" name="state_id">
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
                                                    <button type="submit" class="btn btn-space btn-primary">Add User</button>
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
                                            <table id="user_table" class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Client ID</th>
                                                        <th class="border-0">Client Name</th>
                                                        <th class="border-0">Phone</th>
                                                        <th class="border-0">Address</th>
                                                        <th class="border-0">City</th>
                                                        <th class="border-0">State</th>
                                                        <th class="border-0">Country</th>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{asset('public/vendor/bootstrap/js/buttons.print.min.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{asset('public/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('public/js/main-js.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            
            $('.select2').select2();

            var table = $('#user_table').DataTable({
                dom: 'Bfrtip',
                "pageLength": 15,
                "order": [[ 0, "desc" ]],
                buttons: [
                    'print',
                ]
            } );

            $.ajax({
                type:"GET",
                url:"{{route('showuser')}}",
                success:function(data){

                    if(data != 'null')
                        {
                            var data1 = JSON.parse(data);
                            //var del = "";
                            
                            $.each(data1,function(key,value){
                                
                                // var edit = "<a href='/admin/edit-user/"+value.id+"' class='font-tags edit'><i class='fa fa-file' aria-hidden='true'></i></a>"
                                table.row.add([value.id,value.username,value.phone,value.address,value.city_name,value.state_name,value.country_name]);

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

            $('#userform').on('submit',function(e){
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    type:'POST',
                    url: "{{route('addnewuser')}}",
                    data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,

                    success: function(data){

                        if(data != 'null')
                        {
                            var data1 = JSON.parse(data);
                            
                                
                                // var edit = "<a href='/admin/edit-user/"+data1.id+"' class='font-tags edit'><i class='icon-edit' aria-hidden='true'></i></a>"
                                table.row.add([data1.id,data1.username,data1.phone,data1.address,data1.city_name,data1.state_name,data1.country_name]);
                                table.draw();
                            

                        }
                        else{
                            
                            console.log("No Values Found in Database");
                        }
                        
                        $('#report-msg').removeClass('report-error');
                        $('#report-msg').addClass('report-success');
                        $('#report-msg').html('<i id="report-icon" class="fas fa-check"></i> Successfully Added New User');
                        $('#report-msg').fadeIn('slow');
                    },
                    error: function(){
                        
                        $('#report-msg').removeClass('report-success');
                        $('#report-msg').addClass('report-error');
                        $('#report-msg').html('<i id="report-icon" class="fas fa-times"></i> Error  " All fields must be selected "');
                        $('#report-msg').fadeIn('slow');
                    }
                });

                $('#name').val('');
                $('#email').val('');
                $('#password').val('');
                $('#phone').val('');
                $('#address').val('');
                $('#city_id').val('Select City');
                $('#state_id').val('Select State');

                setTimeout(function() {
                    $('#report-msg').fadeOut('slow');
                }, 5000);

            });



        });    
    </script>
   
</body>
 
</html>