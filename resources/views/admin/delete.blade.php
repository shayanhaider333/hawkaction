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
    <title>Logo Design Mart</title>
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
                                <h2 class="pageheader-title">Deletion</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Deletion</li>
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
                        <!-- ========================= Package And Product================= -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <!-- <div class="col-xl-1 col-lg-1 col-md-2 col-sm-1 col-0"></div> -->
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                <div class="card-body">
                                    <form action="#" id="delete-product" data-parsley-validate="" novalidate="">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                <label>Delete Product</label>
                                                    <select class="form-control" id="select-cat">
                                                        <option>Select Product Category</option>
                                                        <option>Logo</option>
                                                        <option>Flyer</option>
                                                        <option>Brochure</option>
                                                    </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-secondary">Delete </button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                <div class="card-body">
                                    <form action="#" id="delete-package" data-parsley-validate="" novalidate="">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                <label>Delete Package</label>
                                                    <select class="form-control" id="select-cat">
                                                        <option>Select Package</option>
                                                        <option>Basic</option>
                                                        <option>Standard</option>
                                                        <option>Premium</option>
                                                    </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-secondary">Delete </button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            <!-- <div class="col-xl-1 col-lg-1 col-md-2 col-sm-1 col-0"></div> -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- ========================= Includes And Extras================= -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <!-- <div class="col-xl-1 col-lg-1 col-md-2 col-sm-1 col-0"></div> -->
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                <div class="card-body">
                                    <form action="" id="delete-Extra" data-parsley-validate="" novalidate="">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                <label>Delete Extra</label>
                                                    <select class="form-control" id="select-cat">
                                                        <option>Select Extra ID</option>
                                                        <option>0001</option>
                                                        <option>0002</option>
                                                        <option>0003</option>
                                                    </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-secondary">Delete </button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                <div class="card-body">
                                    <form action="#" id="delete-include" data-parsley-validate="" novalidate="">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                <label>Delete Include</label>
                                                    <select class="form-control" id="select-cat">
                                                        <option>Select Include ID</option>
                                                        <option>0001</option>
                                                        <option>0002</option>
                                                        <option>0003</option>
                                                    </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-secondary">Delete </button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            <!-- <div class="col-xl-1 col-lg-1 col-md-2 col-sm-1 col-0"></div> -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- =================== Category And Sub Category================= -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <!-- <div class="col-xl-1 col-lg-1 col-md-2 col-sm-1 col-0"></div> -->
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                <div class="card-body">
                                    <form action="" id="delete-category" data-parsley-validate="" novalidate="">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                <label>Delete Category</label>
                                                    <select class="form-control" id="select-cat">
                                                        <option>Select Category Name</option>
                                                        <option>Logo</option>
                                                        <option>Flyer</option>
                                                        <option>Brochure</option>
                                                    </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-secondary">Delete </button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                <div class="card-body">
                                    <form action="#" id="delete-include" data-parsley-validate="" novalidate="">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                <label>Delete Sub Category</label>
                                                    <select class="form-control" id="select-cat">
                                                        <option>Select Sub Category</option>
                                                        <option>Wordmark</option>
                                                        <option>Minimal</option>
                                                        <option>Signature</option>
                                                    </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-secondary">Delete</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            <!-- <div class="col-xl-1 col-lg-1 col-md-2 col-sm-1 col-0"></div> -->
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
    <!-- slimscroll js -->
    <script src="{{asset('public/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('public/js/main-js.js')}}"></script>
   
</body>
 
</html>