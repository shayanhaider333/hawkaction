@extends('client.master.client-master')
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
                                <h2 class="pageheader-title">Video Requests</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Video Requests</li>
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
                            <!-- Video Request List Table   -->
                            <!-- ============================================================== -->
                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Reports</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table id="request_table" class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Request ID</th>
                                                        <th class="border-0">Report ID</th>
                                                        <th class="border-0">Made By</th>
                                                        <th class="border-0">Handled By</th>
                                                        <th class="border-0">Store</th>
                                                        <th class="border-0">Time</th>
                                                        <th class="border-0">Date</th>
                                                        <th class="border-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                         
                                                </tbody>
                                            </table>    
                                        </div>
                                        <input type="hidden" id="cell" class="cell" value="">
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- End Video Request List Table   -->
                            <!-- ============================================================== -->
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

        var table = $('#request_table').DataTable({
                dom: 'Bfrtip',
                // "ordering": false,
                "pageLength": 15,
                "order": [[ 0, "desc" ]],
                buttons: [
                    'print',
                ]
            } );

    // Starting data function
    var cell=0;

    $(document).ready(function(){

                $.ajax({
                    type:'GET',
                    data: {'cell':cell},
                    url: "{{route('usercheckdata')}}",
                    success:function(data){

                        var data1 = JSON.parse(data);

                        if(data1 != null)
                        {
                            
                            cell = data1[1].id;    
                            
                            
                            var status = "";


                            $.each(data1[0],function(key,value){

                                if(value.status == 0){ status = "<a href='' class='status-eye-0 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a>"}
                                    else{ status = "<a href='' class='status-eye-1 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a>" }

                                table.row.add([value.id,value.report_id,value.username,value.adminname,value.store_name,value.time,value.date,status]);
                                table.draw();
                            });

                        }
                        else{
                            //console.log('else part');
                        }

                    },
                    error:function(){
                        console.log("Error in fetching data from database (Please check your Internet Connection)");
                    }
                });


        });
            
    
    // Refreshing Data Ajax 
        
        
        $(document).ready(function(){

            setInterval(function() {

                $.ajax({
                    type:'GET',
                    data: {'cell':cell},
                    url: "{{route('usercheckdata')}}",
                    success:function(data){

                        var data1 = JSON.parse(data);

                        if(data1 != null)
                        {
                            
                            cell = data1[1].id;    
                            
                            
                            var status = "";


                            $.each(data1[0],function(key,value){

                                if(value.status == 0){ status = "<a href='' class='status-eye-0 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a>"}
                                    else{ status = "<a href='' class='status-eye-1 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a>" }

                                table.row.add([value.id,value.report_id,value.username,value.adminname,value.store_name,value.time,value.date,status]);
                                table.draw();
                            });

                        }
                        else{
                            //console.log('else part');
                        }

                    },
                    error:function(){
                        console.log("Error in fetching data from database (Please check your Internet Connection)");
                    }
                });
        
            }, 3000);


        });

    </script>
</body>
 
</html>