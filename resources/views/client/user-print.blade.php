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
    <link rel="stylesheet" href="{{asset('public/vendor/bootstrap/css/bootstrap-select.css')}}">

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
                                <h2 class="pageheader-title">Bulk Printing</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Bulk Printing</li>
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
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="form-group">
                                                        <select class="selectpicker pl-3 pt-1 mutlidrop" id="reports" multiple data-live-search="true" name="reports[]">
                                                            <option>R.ID        Client</option>
                                                        @foreach($reports as $report)
                                                            <option value="{{$report->id}}">{{$report->id}}            {{$report->user['name']}}</option>
                                                        @endforeach
                                                        </select>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <p class="text-center">
                                                        <button id="fetchReportBtn" type="submit" class="btn btn-space btn-primary">Fetch Reports</button>
                                                        <button id="printReportBtn" type="button" onclick="PrintElem()" class="btn btn-space btn-primary">Print Reports</button>
                                                    </p>   
                                                </div>
                                            </div>                                        
                                        <div class="row">
                                             <label id="report-msg" class=""></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-0 col-0"></div>
                        </div>
                        <!-- ============================================================== -->                          <!-- Printing List div   -->
                        <!-- ============================================================== -->


                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Printing Reports</h5>
                                <div id="print_div" class="card-body p-0"> 
                                    <!-- Reports Show Here -->

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
    <script src="{{asset('public/vendor/bootstrap/js/bootstrap-select.min.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{asset('public/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('public/js/main-js.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            //APPEND NEW SINGLE ROW TO TABLE WHEN FORM CLICK

            var list = [];

            $('#fetchReportBtn').on('click',function(e){
                
                e.preventDefault();

                 var val = $('#reports').val();

                $.ajax({
                    type:'GET',
                    url: "../client/fetchprints/"+val,
                    datatype:'json',
                    success: function(data){

                        $('#print_div').empty();
                        var data1 = JSON.parse(data);
                        var len = Object.keys(data1).length;
                        
                        
                        if(len == 1)
                        {   
                            
                            var div = '<div id="report" class="container" style="page-break-after: always;"><div class="row report-detail"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label>Report ID :'+data1[0].id+'</label></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label>Camera Name : '+data1[0].camera_name+' </label></div></div><div class="row report-detail"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label>Reporter Name : '+data1[0].adminname+' </label></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label> Store Name : '+data1[0].store_name+'</label></div></div><div class="row report-detail"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" ><label>Client Name : '+data1[0].username+' </label></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label> Address : '+data1[0].address+', ' +data1[0].city_name+', '+data1[0].state_name+', '+data1[0].country_name+'. </label></div></div><div class="row report-detail"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label>Incident : '+data1[0].incident_name+' </label></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label> Time+ : '+data1[0].time+'</label></div></div><div class="row report-detail"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label>Priority Level : '+data1[0].priority_level+' </label></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label> Date : '+data1[0].date+'</label></div></div><div class="row report-detail"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><h3> Description </h3><label class="justify"> '+data1[0].description+'</label></div></div></div>';
                            $('#print_div').append(div);
                        }
                        else{


                            $.each(data1,function(key,value){

                                var div = '<div id="report" class="container" style="page-break-after: always;"><div class="row report-detail"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label>Report ID :'+value.id+'</label></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label>Camera Name : '+value.camera_name+' </label></div></div><div class="row report-detail"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label>Reporter Name : '+value.adminname+' </label></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label> Store Name : '+value.store_name+'</label></div></div><div class="row report-detail"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" ><label>Client Name : '+value.username+' </label></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label> Address : '+value.address+',' +value.city_name+', '+value.state_name+', '+value.country_name+'. </label></div></div><div class="row report-detail"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label>Incident : '+value.incident_name+' </label></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label> Time+ : '+value.time+'</label></div></div><div class="row report-detail"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label>Priority Level : '+value.priority_level+' </label></div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"><label> Date : '+value.date+'</label></div></div><div class="row report-detail"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"><h3> Description </h3><label class="justify"> '+value.description+'</label></div></div></div><div class="bar"></div>';
                            $('#print_div').append(div);
                                
                            });
                            $('.selectpicker').selectpicker('refresh');
                        }
                        
                        $('#report-msg').removeClass('report-error');
                        $('#report-msg').addClass('report-success');
                        $('#report-msg').html('<i id="report-icon" class="fas fa-check"></i> Successfully added new report');
                        $('#report-msg').fadeIn('slow');
                    },
                    error: function(){
                        
                        $('#report-msg').removeClass('report-success');
                        $('#report-msg').addClass('report-error');
                        $('#report-msg').html('<i id="report-icon" class="fas fa-times"></i> No report selected ');
                        $('#report-msg').fadeIn('slow');
                    }
                });
                
                $('#reports').val();

                setTimeout(function() {
                    $('#report-msg').fadeOut('slow');
                }, 5000);

            });
        });

        function PrintElem()
            {
                var mywindow = window.open('', 'PRINT', 'height=800,width=1200');

                mywindow.document.write('<html><head><title> Hawk Action Reporting Portal </title>');
                mywindow.document.write('</head><body >');
                mywindow.document.write('<h3></h3>');
                mywindow.document.write(document.getElementById('print_div').innerHTML);
                mywindow.document.write('</body></html>');

                mywindow.document.close(); // necessary for IE >= 10
                mywindow.focus(); // necessary for IE >= 10*/

                mywindow.print();
                //mywindow.close();

                return true;
            }    
    </script>
   
</body>
 
</html>