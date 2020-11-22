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
                                                    <label>Admin Role</label>
                                                    <select class="form-control" id="role_id" name="role_id">
                                                        <option>Select Admin Role</option>
                                                        <option value="4">Reporter</option>
                                                        <option value="1">Admin</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Admin Name</label>
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
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <p class="text-right m-2">
                                                    <button type="submit" class="btn btn-space btn-primary">Create Admin</button>
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
                                                        <th class="border-0">Admin ID</th>
                                                        <th class="border-0">Name</th>
                                                        <th class="border-0">Role</th>
                                                        <th class="border-0">Email</th>
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
    <script src="{{asset('public/vendor/bootstrap/js/buttons.print.min.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{asset('public/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('public/js/main-js.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function(){

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
                url:"{{route('showadmin')}}",
                success:function(data){

                    if(data != 'null')
                        {
                            var data1 = JSON.parse(data);
                          
                            
                            $.each(data1,function(key,value){
                               
                                table.row.add([value.id,value.adminname,value.role_name,value.email]);

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

                $.ajax({
                    type:'POST',
                    url: "{{route('addnewadmin')}}",
                    data:$("#userform").serialize(),

                    success: function(data){
                        
                        if(data != 'null')
                        {
                            var data1 = JSON.parse(data);
                            
                            table.row.add([data1.id,data1.adminname,data1.role_name,data1.email]);
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
                    error: function(error){
                        
                        $('#report-msg').removeClass('report-success');
                        $('#report-msg').addClass('report-error');
                        $('#report-msg').html('<i id="report-icon" class="fas fa-times"></i> Error' );
                        $('#report-msg').fadeIn('slow');
                    }
                });

                 $('#name').val('');
                 $('#email').val('');
                 $('#password').val('');
                 $('#role_id').val('Select Admin Role');

                setTimeout(function() {
                    $('#report-msg').fadeOut('slow');
                }, 5000);

            });



        });    
    </script>
   
</body>
 
</html>