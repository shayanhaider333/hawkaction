

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/bootstrap/css/datatables.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/bootstrap/css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/bootstrap/css/bootstrap-select.css')}}">
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
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{url('/admin/new-report')}}"><img src="{{asset('public/images/logo.png')}}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> <img src="{{asset('public/images/hamburger.png')}}"> </span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('public/images/user.png')}}" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{Auth::user()->name}} </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item" style="">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-bars" style="margin-top: -3px;"></i>Menu Level</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/client/user-profile')}}"><i class="fas fa-fw fa-file-alt"></i>Profile</a> 
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/client/reporting')}}"><i class="fas fa-fw fa-file-alt"></i>Reports</a> 
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/client/user-video-request')}}"><i class="fas fa-fw fa-video"></i>Video Requests</a>
                                            
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/client/filter-report')}}"><i class="fas fa-fw fa-filter"></i>Filter Reports</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/client/store')}}"><i class="fas fa-fw fa-warehouse"></i>Store</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/client/printing')}}"><i class="fas fa-fw fa-print"></i>Bulk Printing</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <label class="filter-heading">FILTERS</label>
                            </li>
                            <li class="nav-item">
                                <form action="" enctype="multipart/form-data" id="filter_form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Date From</label>
                                        </div>
                                        <div class="col-6">
                                            <label >Date To</label>
                                        </div>   
                                    </div>
                                    <div class="row">
                                        <div class="col-6">                                     
                                            <input type="text" name="picker1" id="picker1" class="form-control dtpicker">    
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="picker2" id="picker2" class="form-control dtpicker">    
                                        </div>   
                                    </div>
                                    
                                    <div class="row">
                                        <label class="pl-3 pt-3">Store</label>
                                    </div>
                                    <div class="row">
                                        <select class="selectpicker pl-3 pt-1 mutlidrop" id="store" multiple data-live-search="true" name="store[]">
                                            @foreach($stores as $store)
                                            <option value="{{$store->id}}">{{$store->store_name}}</option>
                                            @endforeach
                                        </select>    
                                    </div>

                                    <div class="row">
                                        <label class="pl-3 pt-3">Camera</label>
                                    </div>
                                    <div class="row">
                                        <select class="selectpicker pl-3 pt-1 mutlidrop" id="camera" multiple data-live-search="true" name="camera[]">
                                          
                                        </select>    
                                    </div>

                                    <div class="row">
                                        <label class="pl-3 pt-3">Incident</label>
                                    </div>
                                    <div class="row">
                                        <select class="selectpicker pl-3 pt-1 mutlidrop" multiple data-live-search="true" name="incident[]">
                                          @foreach($incidents as $incident)
                                          <option value="{{$incident->id}}">{{$incident->incident_name}}</option>
                                          @endforeach
                                        </select>    
                                    </div>

                                    <div class="row">
                                        <label class="pl-3 pt-3">Priority</label>
                                    </div>
                                    <div class="row">
                                        <select class="selectpicker pl-3 pt-1 mutlidrop" multiple name="priority[]">
                                          @foreach($priorities as $priority)
                                          <option value="{{$priority->id}}">{{$priority->priority_level}}</option>
                                          @endforeach
                                        </select>    
                                    </div>
                                    <p class="text-right mt-4">
                                        <button type="submit" class="buttons-print btn-space btn-primary">Filter</button>
                                    </p>
                                </form>
                                
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
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
                                <h2 class="pageheader-title">Filter Report</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Filter Report</li>
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
                                    <h5 class="card-header">Reports</h5>
                                    <div class="card-body p-0"> 
                                        <div class="table-responsive">
                                            <table id="filter_table" class="table">
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
    <script src="{{asset('public/vendor/bootstrap/js/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/bootstrap-select.min.js')}}"></script>
    <!-- <script src="{{asset('vendor/bootstrap/js/moment.js')}}"></script> -->
    <!-- slimscroll js -->
    <script src="{{asset('public/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('public/js/main-js.js')}}"></script>
   
    
    
    
    
    <script type="text/javascript">
        $(document).ready(function(){

            var table = $('#filter_table').DataTable({
                dom: 'Bfrtip',
                "pageLength": 15,
                "order": [[ 0, "desc" ]],
                buttons: [
                    'print',
                ]
            } );

            $.ajax({
                type:"GET",
                url:"{{route('user-filter-report-show')}}",
                success:function(data){

                    if(data != 'null')
                        {
                            var status = "";
                            //console.log(data1);
                            $.each(data,function(key,value){

                                if(value.status == 0){ status = "<a href='' class='status-eye-0 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a> <a href='/client/details/"+value.id+"' class='font-tags detail'><i class='fa fa-file' target='_blank' aria-hidden='true'></i></a>"}
                                    else{ status = "<a href='' class='status-eye-1 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a> <a href='/client/details/"+value.id+"' class='font-tags detail'><i class='fa fa-file' target='_blank' aria-hidden='true'></i></a>"}

                                table.row.add([value.id,value.user.name,value.camera.camera_name,value.store.store_name,value.incident.incident_name,value.priority.priority_level,value.time,value.date,status]);
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


            // DATE TIME PICKER
            $('#picker1').datetimepicker({
                timepicker:false,
                datepicker:true,
                format:'Y-m-d',
            });
            $('#picker2').datetimepicker({
                timepicker:false,
                datepicker:true,
                format:'Y-m-d',
            });

            // AUTO FILL DROPDOWN

            $('#store').on('change',function(){

                var store = $(this).val();
                        
                $.ajax({
                    url:"../client/filter-getcamera/"+store,
                    type:"GET",
                    datatype:'json',
                    success:function(data)
                    {
                        var len = Object.keys(data).length;
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
                            $('.selectpicker').selectpicker('refresh');
                        }
                        
                    },
                    error:function()
                    {

                    }
                });

            });

            //FILTER FORM DATA SEND AND RESPONSE RECIEVE

            $('#filter_form').on('submit',function(e){
                e.preventDefault();
                

                $.ajax({
                    type:'POST',
                    url: "{{route('user-filter-records')}}",
                    data:$('#filter_form').serialize(),

                    success: function(data1){

                        //console.log(data);
                        
                        if(data != 'null')
                        {
                            var data = JSON.parse(data1);
                            var status = "";
                            table.clear();
                            //console.log(data1);
                            $.each(data,function(keys,value){
                                if(value.status == 0){ status = "<a href='' class='status-eye-0 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a> <a href='../client/details/"+value.id+"' class='font-tags detail'><i class='fa fa-file' target='_blank' aria-hidden='true'></i></a>"}
                                else{ status = "<a href='' class='status-eye-1 font-tags inactiveLink'><i class='fa fa-eye' aria-hidden='true'></i></a> <a href='../client/details/"+value.id+"' class='font-tags detail'><i class='fa fa-file' target='_blank' aria-hidden='true'></i></a>"}


                                table.row.add([value.id,value.username,value.camera_name,value.store_name,value.incident_name,value.priority_level,value.time,value.date,status]);
                                table.draw();
                            });
                           
                        }
                        else{
                            
                            
                         }
                        
                    },
                    error: function(){
                        
                        
                    }
                });

            });




        });    
    </script>

</body>
 
</html>