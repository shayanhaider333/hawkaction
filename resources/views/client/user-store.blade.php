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
                                <h2 class="pageheader-title">Stores</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Stores</li>
                                        </ol>
                                    </nav>
                                    <!-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                                      Add New Camera
                                    </button> -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <!-- ============================================================== -->                          <!-- Store List Table   -->
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
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($stores as $store)
                                                    <tr>
                                                        <td>{{$store->id}}</td>
                                                        <td>{{$store->user['name']}}</td>
                                                        <td>{{$store->store_name}}</td>
                                                        <td>{{$store->address}}</td>
                                                        <td>{{$store->city['city_name']}}</td>
                                                        <td>{{$store->state['state_name']}}</td>
                                                        <td>{{$store->country['country_name']}}</td>
                                                    </tr>
                                                @endforeach
                                                    
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
            <!-- ======================== Add Camera Modal =============================== -->
            <!-- ============================================================== -->

            <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            </div> -->
            
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

            // $.ajax({
            //     type:"GET",
            //     url:"{{route('usershowstore')}}",
            //     success:function(data){

            //         if(data != 'null')
            //             {
            //                 var data1 = JSON.parse(data);
            //                 var del = "";
                            
            //                 $.each(data1,function(key,value){
                                
                                
            //                     table.row.add([value.id,value.username,value.store_name,value.address,value.city_name,value.state_name,value.country_name]);
            //                     table.draw();
            //                 });

            //             }
            //             else{
                            
            //                 console.log("No Values Found in Database");
            //             }
            //     },
            //     error:function(){
            //         alert("Error in fetching reports from database (Please check your Internet Connection)");
            //     }
            // });


            //APPEND NEW SINGLE ROW TO TABLE WHEN FORM CLICK

            


            // $('#camera_form').on('submit',function(){

            //     $.ajax({

            //         type:"POST",
            //         url:"{{route('addcamera')}}",
            //         data:$('#camera_form').serialize(),
            //         success:function(response)
            //         {
            //             console.log(response);
            //             alert("New Camera Added Successfully");
            //         },
            //         error:function(error)
            //         {
            //             console.log(error);
            //             alert("Error in adding camera");
            //         },

            //     });

            // });



        });    
    </script>
   
</body>
 
</html>