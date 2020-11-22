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
    
    <link rel="stylesheet" href="{{asset('public/css/image-gallery.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/photoswipe-default-skin.css')}}">
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
        .row .trash.float-right:hover
        {
            color: #ff407b;
            cursor: pointer;
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
                                <h2 class="pageheader-title">Report Details</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Report Details</li>
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
                        <!-- =========================== Details ========================== -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h2 class="center">Report Details</h2>
                                                <div class="bar m-3 "></div>
                                                <div id="report" class="container">
                                                    <div class="row report-detail">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label>Report ID : {{ $result[0]->id }}</label>
                                                                         
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label>Camera Name : {{ $result[0]->camera_name }} </label>
                                                                    
                                                        </div>
                                                    </div>
                                                     <div class="row report-detail">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label>Reporter Name : {{ $result[0]->adminname }} </label>
                                                                   
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <label> Store Name : {{ $result[0]->store_name }}</label>
                                                                   
                                                        </div>
                                                    </div>
                                                    <div class="row report-detail">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" >
                                                          <label>Client Name : {{ $result[0]->username }} </label>          
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                         <label> Address :  {{ $result[0]->address}}, {{$result[0]->city_name}}, {{$result[0]->state_name}}, {{$result[0]->country_name}}. </label>           
                                                        </div>
                                                    </div>
                                                    <div class="row report-detail">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                         <label>Incident : {{ $result[0]->incident_name }} </label>           
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                         <label> Time : {{ $result[0]->time }}</label>          
                                                        </div> 
                                                    </div>
                                                    <div class="row report-detail">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                         <label>Priority Level : {{ $result[0]->priority_level }} </label>           
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                         <label> Date : {{ $result[0]->date }}</label>          
                                                        </div> 
                                                    </div>
                                                    <div class="row report-detail">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <h3> Description </h3>
                                                            <label class="justify"> {{ $result[0]->description }}</label>        
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="row float-right m-2">
                                                @if($req === 0)
                                                    <button type="button" id="btnReq" class="btn btn-space btn-primary">Video Request</button>
                                                @endif
                                                <button type="button" class="btn btn-space btn-primary" onclick="PrintElem()">Print Report</button>
                                                @if($result[0]->document !== NULL)
                                                <form method="get" action="{{asset('/document/'.$result[0]->document)}}">
                                                @csrf
                                                    <button type="submit" class="btn btn-space btn-primary">Transcript</button>
                                                </form>
                                                @endif
                                                 <form style="display: none" id="vidReq">
                                                 @csrf
                                                 <input type="text" name="reportt_id" value="{{$result[0]->id}}">   
                                                </form>    
                                            </div>

                                        </div>

                                        <label id="video-msg" class=""></label><br>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- ============================================================== -->
                        <!-- ========================= End Details ======================== -->
                        <!-- ============================================================== -->


                        <!-- ============================================================== -->
                        <!-- =================== Evidence Video Link ====================== -->
                        <!-- ============================================================== -->

                        @isset($result[0]->link)

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h2 class="center">Evidence Video Link</h2>
                                                <div class="bar m-3 "></div>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label>Video Link : </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <a href="{{$result[0]->link}}" target="_blank">{{$result[0]->link}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div> 

                        @endisset 

                        <!-- ============================================================== -->
                        <!-- ================End Evidence Video Link ====================== -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- =========================== Gallery ========================== -->
                        <!-- ============================================================== -->
                        @isset($images[0]->path)

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h2 class="center">Evidence Images</h2>
                                                <div class="bar m-3 "></div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div id="gallery" class="gallery" itemscope itemtype="">

                                                            <!---------------- LOOP CODE HERE ---------------->
                                                            @foreach($images as $img)
                                                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                                <a id="image_a" href="{{asset('public/report-image/'.$img->path)}}" 
                                                                    data-width="1200" data-height="675" itemprop="contentUrl">
                                                                   
                                                                    <img class="sizing" src="{{asset('public/report-image/'.$img->path)}}" itemprop="thumbnail"
                                                                        alt="Image description">
                                                                </a>
                                                            </figure>
                                                            @endforeach
                                                            <!----------------LOOP CODE END HERE ---------------->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="spacer"></div>
                                                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                                   
                                                    <div class="pswp__bg"></div>
                                                    <div class="pswp__scroll-wrap">
                                                        <div class="pswp__container">
                                                            <div class="pswp__item"></div>
                                                            <div class="pswp__item"></div>
                                                            <div class="pswp__item"></div>
                                                        </div>
                                                        <div class="pswp__ui pswp__ui--hidden">
                                                            <div class="pswp__top-bar">
                                                                <div class="pswp__counter"></div>
                                                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                                                <button class="pswp__button pswp__button--share" title="Share"></button>
                                                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                                                <div class="pswp__preloader">
                                                                    <div class="pswp__preloader__icn">
                                                                        <div class="pswp__preloader__cut">
                                                                            <div class="pswp__preloader__donut"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                                <div class="pswp__share-tooltip"></div>
                                                            </div>
                                                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                                            </button>
                                                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                                            </button>
                                                            <div class="pswp__caption">
                                                                <div class="pswp__caption__center"></div>
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
                        @endisset 
                        <!-- ============================================================== -->
                        <!-- ========================= End Gallery ======================== -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- ========================= Comment box ======================== -->
                        <!-- ============================================================== -->

                        @isset($comments)

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h2 class="center">Comments</h2>
                                                <div class="bar m-3 "></div>
                                                <div id="comment_section">
                                                    @foreach($comments as $comment)
                                                    <div id="comment_{{$comment->id}}" class="row">
                                                        <div class="col-sm-6">
                                                            <label style="color: #0e0c28;">{{$comment->user_name}}</label>

                                                        </div>
                                                        <div class="col-sm-6 ">
                                                           
                                                            <p class="float-right">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p>
                                                        </div>
                                                    </div>
                                                    <div id="comment_{{$comment->id}}" class="row">
                                                        <div class="col-sm-10">
                                                            <p>{{$comment->comment}}</p>
                                                        </div>
                                                        <div class="col-sm-2">
                                                             <a onclick="del('{{$comment->id}}')" class="trash float-right"><i class='fa fa-trash'></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="bar m-3"></div>
                                                    @endforeach
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form id="comment_form" action="" data-parsley-validate="" novalidate="" method="POST">
                                                            @csrf
                                                            <input style="display: none;" type="text" name="reporttt_id" value="{{$result[0]->id}}"> 
                                                            <input type="text" id="comment" name="comment" class="form-control" required="" placeholder="Write a comment here"> 
                                                            <button type="submit" class="btn btn-space btn-primary" style="margin-top: 10px; padding:5px 25px 5px 25px;">Send</button>
                                                        </form>    
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div> 
                    
                        @endisset
                        <!-- ============================================================== -->
                        <!-- ===================== End Comment box ======================== -->
                        <!-- ============================================================== -->


                    </div>
                </div>
            </div>
            
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
    <script src="{{asset('public/vendor/bootstrap/js/datatables.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/datatables_bootstrap.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('public/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('public/js/main-js.js')}}"></script>
    <script src="{{asset('public/js/photoswipe.min.js')}}"></script>
    <script src="{{asset('public/js/photoswipe-default.min.js')}}"></script>

    <script type="text/javascript">

        function PrintElem()
        {
            var mywindow = window.open('', 'PRINT', 'height=800,width=1200');

            mywindow.document.write('<html><head><title>'+""+ '</title>');
            mywindow.document.write('</head><body >');
            mywindow.document.write('<h3>'+ document.title +'</h3>');
            mywindow.document.write(document.getElementById('report').innerHTML);
            mywindow.document.write('</body></html>');

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/

            mywindow.print();
            //mywindow.close();

            return true;
        }

    </script>
    <script type="text/javascript">
        
        $(document).ready(function(){
 
            $('#btnReq').on('click',function(e){

                e.preventDefault();

                $.ajax({

                    type:'POST',
                    url:'{{route("request")}}', 
                    data:$('#vidReq').serialize(),
                    success: function(response){
                        console.log(response);
                        $('#video-msg').removeClass('report-error');
                        $('#video-msg').addClass('report-success');
                        $('#video-msg').html('<i id="report-icon" class="fas fa-check"></i> '+ response);
                        $('#video-msg').fadeIn('slow');
                    },
                    error: function(error){
                        
                        $('#video-msg').removeClass('report-success');
                        $('#video-msg').addClass('report-error');
                        $('#video-msg').html('<i id="report-icon" class="fas fa-times"></i> Error in requesting video');
                        $('#video-msg').fadeIn('slow');
                    }

                });

                setTimeout(function() {
                    $('#video-msg').fadeOut('slow');
                }, 5000);

            });



        $('#comment_form').on('submit',function(e){

            e.preventDefault();
            $.ajax({

                type:'POST',
                url:'{{route("user-comment")}}',
                data:$('#comment_form').serialize(),
                success:function(data)
                {   
                    var data1 = JSON.parse(data);

                    console.log(data);
                    $('#comment_section').append('<div id="comment_'+data1.id+'" class="row"><div class="col-sm-6"><label style="color: #0e0c28;">'+data1.user_name+'  </label></div><div class="col-sm-6 "><p class="float-right">'+data1.created_at+'</p></div></div><div id="comment_'+data1.id+'" class="row"><div class="col-sm-10"><p>'+data1.comment+'</p></div><div class="col-sm-2"><a onclick="del('+data1.id+')" class="trash float-right"><i class="fa fa-trash"></i></a></div></div><div class="bar m-3"></div>');
                    $('#comment').val('');
                },
                error:function()
                {
                    alert("Error: Check Internet Connection");
                }

            });

        });

        });

        //Comment Delete Function

        function del(id)
        {
                $.ajax({

                type:'GET',
                url:'{{route("delete-user-comment")}}',
                data:{'id':id},
                datatype:'json',
                success:function(data)
                {   
                    if(data == 1)
                    {
                        console.log(data);
                        $('#comment_'+id).remove();
                        $('#comment_'+id).remove();
                    }
                    else
                    {
                        alert("You can only delete your comment.");
                    }
                    
                },
                error:function(data)
                {
                    console.log("Error: Check Internet Connection");
                }

            });
        }

    </script>

    <!-- Image Gallery -->
    <script>
       'use strict';

        /* global jQuery, PhotoSwipe, PhotoSwipeUI_Default, console */

        (function ($) {

            // Init empty gallery array
            var container = [];

            // Loop over gallery items and push it to the array
            $('#gallery').find('figure').each(function () {
                var $link = $(this).find('a'),
                    item = {
                        src: $link.attr('href'),
                        w: $link.data('width'),
                        h: $link.data('height'),
                        title: $link.data('caption')
                    };
                container.push(item);
            });

            // Define click event on gallery item
            $('#image_a').click(function (event) {

                // Prevent location change
                event.preventDefault();

                // Define object and gallery options
                var $pswp = $('.pswp')[0],
                    options = {
                        index: $(this).parent('figure').index(),
                        bgOpacity: 0.85,
                        showHideOpacity: true
                    };

                // Initialize PhotoSwipe
                var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
                gallery.init();
            });

        }(jQuery));
    </script>
    
</body>
 
</html>