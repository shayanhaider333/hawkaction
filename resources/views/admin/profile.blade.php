@extends('admin.master.admin-master')
<!doctype html>
<html lang="en">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('public/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    
    <link rel="stylesheet" href="{{asset('public/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <title>Hawk Action Reporting Portal</title>
 
<style>
    .pswp__caption__center {
            text-align: center;
        }

        figure {
            display: inline-block;
            width: 100%;
            float: left;
        }

        .sizing {
            width: 90%;
        }

        .spacer {
            height: 5em;
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
                                <h2 class="pageheader-title">Profile</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                        <!-- =========================== Profile Details ========================== -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h2 class="center">Profile Details</h2>
                                                <div class="bar m-3 "></div>
                                                <div id="report" class="container">
                                                    <div class="row report-detail">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <div class="row"><label>Admin ID : {{$info->id}}</label></div>
                                                            <div class="row"><label>Name : {{$info->name}} </label></div>
                                                            <div class="row"><label>Email : {{ $info->email }} </label></div>
                                                            <div class="row"><label> Role : {{ $info->role['role_name'] }}</label></div>                 
                                                        </div>
                                                    </div>
                                                    <div class="row report-detail">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >
                                                            
                                                            <div class="row float-right m-2">
                                                                <button type="button" class="btn btn-space btn-primary" data-toggle="modal" data-target="#edit_modal">
                                                                  Edit Profile
                                                                </button>
                                                                <button type="button" class="btn btn-space btn-primary" data-toggle="modal" data-target="#password_modal">
                                                                  Reset Password
                                                                </button> 
                                                            </div>     
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>            
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- ============================================================== -->
                        <!-- ===================== Profile Details ======================== -->
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
                        

                        <!-- ============================================================== -->
                        <!-- =================== Card Profile Details ===================== -->
                        <!-- ============================================================== -->

                        <div class="row sales-card">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Reports</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{$reports}}</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class=" icon-box-xs text-success bg-success-light"><i class=""></i></span><span class="ml-1">{{$rep_perc}}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Handled Reports</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">{{$requests}}</h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class=" icon-box-xs text-success bg-success-light"><i class=""></i></span><span class="ml-1">{{$req_perc}}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            
                        <!-- ============================================================== -->
                        <!-- ================ End Card Profile Details ==================== -->
                        <!-- ============================================================== -->
            
                    </div>
                </div>
            </div>

            

            <!-- ============================================================== -->
            <!-- ========================= EDIT USER INFO ===================== -->
            <!-- ============================================================== -->
            <!-- Modal -->
            <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="info_form" method="post" action="{{route('profile-edit')}}">
                    @csrf
                      <div class="modal-body">
                        
                        <div class="form-group">
                            <label>User Name</label>
                            <input id="name" type="text" name="name" data-parsley-trigger="change" value="{{$info->name}}" required="" placeholder="" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" type="email" name="email" data-parsley-trigger="change" value="{{$info->email}}" required="" placeholder="" autocomplete="off" class="form-control">
                            </div>  
                        </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- ===================== END EDIT USER INFO ===================== -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- ======================= EDIT PASSWORD RESET ================== -->
            <!-- ============================================================== -->
            <!-- Modal -->
            <div class="modal fade" id="password_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Reset Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="password_form" method="post" action="{{route('reset-admin-pass')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Old Password</label>
                            <input id="old_pass" type="password" name="old_pass" data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input id="new_pass" type="password" name="new_pass" data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input id="confirm_pass" type="password" name="confirm_pass" data-parsley-trigger="change" required="" placeholder="" autocomplete="off" class="form-control">
                        </div>
                    </div> 
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="pass_btn" type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- =================== END EDIT PASSWORD RESET ================== -->
            <!-- ============================================================== -->

            
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer footer-down">
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
    <!-- slimscroll js -->
    <script src="{{asset('public/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('public/js/main-js.js')}}"></script>
  

    <!-- PASSWORD RESET -->
    <script>

        $(document).ready(function(){

           $('#new_pass').on('keyup',function(){
                $('#pass_btn').prop('disabled', true);
           });

           $('#confirm_pass').on('keyup',function(){

                if($('#new_pass').val() === $('#confirm_pass').val())
                {
                    $('#pass_btn').prop('disabled', false);
                }
                else
                {
                    $('#pass_btn').prop('disabled', true);
                }
                
           });
                
        });
        

    </script>
    
</body>
 
</html>