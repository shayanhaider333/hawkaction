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
                                <h2 class="pageheader-title">Report Incident</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Report Incident</li>
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
                            <!-- <div class="col-xl-1 col-lg-1 col-md-2 col-sm-1 col-0"></div> -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                <h5 class="card-header">Report A New Incident</h5>
                                <div class="card-body">
                                    <form action="" id="reportform" enctype="multipart/form-data" data-parsley-validate="" novalidate="" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                <label>Client</label>
                                                <select class="form-control" id="user" name="user" required="">
                                                    <option>Select Client</option>
                                                    @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                <label>Store</label>
                                                <select class="form-control" id="store" name="store" required="">
                                                    <option>Select Store</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                <label>Camera</label>
                                                <select class="form-control" id="camera" name="camera" required="">
                                                    <option>Select Camera</option>
                                                    
                                                    
                                                </select>
                                            </div>
                                            
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <label>Priority</label>
                                                <select class="form-control" id="priority" name="priority" required="">
                                                    <option>Set Priority</option>
                                                    @foreach($priorities as $priority)
                                                    <option value="{{$priority->id}}">{{$priority->priority_level}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <label>Incident</label>
                                                <select class="form-control" id="incident" name="incident" required="">
                                                    <option>Select Incident</option>
                                                    @foreach($incidents as $incident)
                                                    <option value="{{$incident->id}}">{{$incident->incident_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Evidence Image</label>
                                            <input id="p_image1" name="image[]" type="file" multiple="true" class="form-control" accept="image/x-png,image/jpeg">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                <img src="{{asset('public/images/loader.gif')}}" class="loader" id="load">
                                            </div>
                                            <div class="col-sm-6 pl-0">

                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Send Report</button>
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
                            <!-- <div class="col-xl-1 col-lg-1 col-md-2 col-sm-1 col-0"></div> -->
                        </div>
                        <!-- ============================================================== -->                          
                        <!-- Report List Table   -->
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
                                    <h5 class="card-header">Reports <button type="button" id="refresh" class=" float-right btn btn-space btn-primary">Refresh</button></h5>
                                    <div class="card-body p-0"> 
                                        <div class="table-responsive">
                                            <table id="product_table" class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Report ID</th>
                                                        <th class="border-0">Client</th>
                                                        <th class="border-0">Camera</th>
                                                        <th class="border-0">Store</th>
                                                        <th class="border-0">Incident</th>
                                                        <th class="border-0">Priority</th>
                                                        <th class="border-0">Time</th>
                                                        <th class="border-0">Date</th>
                                                        <th class="border-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    
                                                </tbody>
                                            </table>    
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Report List Table   -->
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

            var table = $('#product_table').DataTable({
                dom: 'Bfrtip',
                "pageLength": 15,
                "order": [[ 0, "desc" ]],
                buttons: [
                    'print',
                ]
            } );

            $.ajax({
                type:"GET",
                url:"{{route('getrecords')}}",
                success:function(data){

                    if(data != 'null')
                        {
                            var status = "";
                            //console.log(data1);
                            $.each(data,function(key,value){
                                 
                                //console.log(value.store.store_name);
                                if(value.status == 0){ status = "<a href='' class='status-eye-0 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a> <a href='../admin/details/"+value.id+"' class='font-tags detail'><i class='fa fa-file' target='_blank' aria-hidden='true'></i></a> <a href='../admin/delete/"+value.id+"' class='font-tags edit' onclick='if (! confirm('Are you sure you want to delete?')) { return false; }'><i class='fa fa-trash' aria-hidden='true'></i></a>"}
                                    else{ status = "<a href='' class='status-eye-1 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a> <a href='../admin/details/"+value.id+"' class='font-tags detail'><i class='fa fa-file' target='_blank' aria-hidden='true'></i></a><a href='../admin/delete/"+value.id+"' class='font-tags edit' onclick='if (! confirm('Are you sure you want to delete?')) { return false; }'><i class='fa fa-trash' aria-hidden='true'></i></a>"}

                                //console.log(status);
                                table.row.add([value.id,value.user.name,value.camera.camera_name,value.store.store_name,value.incident.incident_name,value.priority.priority_level,value.time,value.date,status]);
                                table.draw();
                            });

                        }
                        else{
                            
                            //console.log("No Values Found in Database");
                        }
                },
                error:function(){
                    console.log("Error in fetching reports from database (Please check your Internet Connection)");
                }
            });


            //APPEND NEW ROW TO TABLE WHEN FORM CLICK

            $('#reportform').on('submit',function(e){
                e.preventDefault();

                var formData = new FormData(this);

                var msg = '';

                $.ajax({
                    type:'POST',
                    url: "{{route('report')}}",
                    data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    beforeSend:function(){
                        $('#load').show();
                    },
                    success: function(data){

                        //console.log(data.id);

                        if(data != 'null')
                        {
                            var data1 = JSON.parse(data);
                            var status = "";
                            //console.log(data1);
                                 
                            if(data1.status == 0){ status = "<a href='' class='status-eye-0 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a> <a href='../admin/details/"+data1.id+"' class='font-tags detail'><i class='fa fa-file' target='_blank' aria-hidden='true'></i></a> <a href='../admin/delete/"+data1.id+"' class='font-tags edit' onclick='if (! confirm('Are you sure you want to delete?')) { return false; }'><i class='fa fa-trash' aria-hidden='true'></i></a>"}
                            else{ status = "<a href='' class='status-eye-1 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a> <a href='../admin/details/"+data1.id+"' class='font-tags detail'><i class='fa fa-file' target='_blank' aria-hidden='true'></i></a><a href='../admin/delete/"+data1.id+"' class='font-tags edit' onclick='if (! confirm('Are you sure you want to delete?')) { return false; }'><i class='fa fa-trash' aria-hidden='true'></i></a>"}

                            table.row.add([data1.id,data1.user.name,data1.camera.camera_name,data1.store.store_name,data1.incident.incident_name,data1.priority.priority_level,data1.time,data1.date,status]);
                            table.draw();
                        }
                        else{
                            
                            //console.log("No Values Found in Database");
                           
                         }
                        
                        $('#report-msg').removeClass('report-error');
                        $('#report-msg').addClass('report-success');
                        $('#report-msg').html('<i id="report-icon" class="fas fa-check"></i> Successfully Reported');
                        $('#report-msg').fadeIn('slow');
                       

                    },
                    error: function(){
                        
                        $('#report-msg').removeClass('report-success');
                        $('#report-msg').addClass('report-error');
                        $('#report-msg').html('<i id="report-icon" class="fas fa-times"></i> Reporting Error  " All fields must be selected "');
                        $('#report-msg').fadeIn('slow');
                        
                    }
                });

                $('#camera').val('');
                $('#user').val('Select Client');
                $('#priority').val('Set Priority');
                $('#incident').val('');
                $('#description').val('');
                $('#p_image1').val('');
                $('#load').hide();
                setTimeout(function() {
                    $('#report-msg').fadeOut('slow');
                }, 5000);

            });


            $('#user').on('change',function(){

                var user = $(this).val();

                $.ajax({
                    url:"../admin/getstore/"+user,
                    type:"GET",
                    datatype:'json',
                    success:function(data)
                    {   
                        var len = Object.keys(data).length;
                        var data1 = JSON.parse(data);
                        // console.log(data);
                        if(len == 1)
                        {
                            $('#store').empty();
                            $('#store').append("<option>Select Store</option>");
                            $('#store').append("<option value='"+data.id+"'>"+data.store_name+"</option>");
                               
                        }
                        else{
                            $('#store').empty();
                            $('#store').append("<option>Select Store</option>");
                            $.each(data1,function(key,value){
                                $('#store').append("<option value='"+value.id+"'>"+value.store_name+"</option>");
                            });
                        }
                        
                    },
                    error:function()
                    {

                    }
                });

            });

            $('#store').on('change',function(){

                var store = $(this).val();
                //console.log(store);

                $.ajax({
                    url:"../admin/getcamera/"+store,
                    type:"GET",
                    datatype:'json',
                    success:function(data)
                    {
                        var len = console.log(Object.keys(data).length);
                        var data1 = JSON.parse(data);
                        if(len == 1)
                        {   
                            $('#camera').empty();
                            $('#camera').append("<option value='"+data1.id+"'>"+data1.camera_name+"</option>");
                        }
                        else{
                            $('#camera').empty();
                            $.each(data1,function(key,value){
                                $('#camera').append("<option value='"+value.id+"'>"+value.camera_name+"</option>");
                            });
                        }
                        
                    },
                    error:function()
                    {

                    }
                });

            });
            
            $('#refresh').on('click',function(){

                table.clear();

                $.ajax({
                    type:"GET",
                    url:"{{route('getrecords')}}",
                    success:function(data){

                        if(data != 'null')
                            {
                                var status = "";
                                //console.log(data1);
                                $.each(data,function(key,value){
                                     
                                    //console.log(value.store.store_name);
                                    if(value.status == 0){ status = "<a href='' class='status-eye-0 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a> <a href='../admin/details/"+value.id+"' class='font-tags detail'><i class='fa fa-file' target='_blank' aria-hidden='true'></i></a> <a href='../admin/delete/"+value.id+"' class='font-tags edit' onclick='if (! confirm('Are you sure you want to delete?')) { return false; }'><i class='fa fa-trash' aria-hidden='true'></i></a>"}
                                        else{ status = "<a href='' class='status-eye-1 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a> <a href='../admin/details/"+value.id+"' class='font-tags detail'><i class='fa fa-file' target='_blank' aria-hidden='true'></i></a><a href='../admin/delete/"+value.id+"' class='font-tags edit' onclick='if (! confirm('Are you sure you want to delete?')) { return false; }'><i class='fa fa-trash' aria-hidden='true'></i></a>"}

                                    //console.log(status);
                                    table.row.add([value.id,value.user.name,value.camera.camera_name,value.store.store_name,value.incident.incident_name,value.priority.priority_level,value.time,value.date,status]);
                                    table.draw();
                                });

                            }
                            else{
                                
                                //console.log("No Values Found in Database");
                            }
                    },
                    error:function(){
                        console.log("Error in fetching reports from database (Please check your Internet Connection)");
                    }
                });

            });



        });    
    </script>

</body>
 
</html>