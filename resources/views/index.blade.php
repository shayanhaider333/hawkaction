@extends('layouts.master')
 
@yield('header')

<div class="center-section">
        <img class="img-fluid" src="./assets/img/background.jpg" width="100%" > <!--Homepage Banner-->
            <div class="container">
                <ul id="scene">
                    <li class="layer" data-depth="1">
                        <img src="./assets/img/planet1.png">
                    </li>
                    <li class="layer" data-depth="-1">
                        <img src="./assets/img/planet2.png">
                    </li>
                    <li class="layer" data-depth="0.5">
                        <img src="./assets/img/planet4.png">
                    </li>
                    <li class="layer" data-depth="-1.5">
                        <img src="./assets/img/planet5.png">
                    </li>
                    <li class="layer" data-depth="-0.5">
                        <img src="./assets/img/planet6.png">
                    </li>
                    <li class="layer" data-depth="1.5">
                        <img src="./assets/img/planet7.png">
                    </li>
                </ul>
                <div class="row center-section-row">
                    <div class="div col-md-7 pt-5 pr-0 flip-text-title">
                        <h2>get your logo in</h2>
                    </div>
                    <div class="col-md-5 pt-5 pl-0 center-col">
                        <div class="flip-text">
                            <span class="title1">24 hours</span>
                            <span class="title2">Logo Desing</span>
                            <span class="title3">Web Design</span>
                        </div>
                    </div> <!--Column 1-->
                    <div class="col-md-12 text-center center-col">
                        <h3>select your gig</h3>
                    </div> <!--Column 2-->                
                </div> <!---Row-->
            </div> <!--Container-->
    </div> <!--Second Section -->
    

<section class="inputs-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-3 search-bar dropdown-product">
                    <div class="nav-item pt-3 dropdown">
                        <button class="btn dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logo Design</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Logo Design 1</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Logo Design 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Logo Design 3</a>
                        </div>
                    </div>  
                    <div class="form-inline pt-3">
                        <form>
                            <input class="form-control form-control-sm w-100" type="text" placeholder="Search"
                            aria-label="Search">
                            <a href="#" type="submit"><i class="fas fa-search"></i></a>
                        </form>
                    </div>
                    <p>3,518 Services Available</p>                  
                </div>  <!--Column3-->
            </div>
        </div> 
    </section>

    <section class="gig-section">
            <div class="container">
                <div class="row ">
                    <div class="col-md-3 pt-3 gig-col wow fadeInUp"  id="gig-one">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-1.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 1 -->
                    <div class="col-md-3 pt-3 gig-col wow fadeInUp" data-wow-delay="0.10s" id="gig-two">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-2.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 2 -->
                    <div class="col-md-3 pt-3 gig-col wow fadeInUp" data-wow-delay="0.15s" id="gig-three">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-3.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 3 -->
                    <div class="col-md-3 pt-3 gig-col wow fadeInUp" data-wow-delay="0.20s" id="gig-four">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-4.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 4 -->         
                    <div class="col-md-3 pt-3 gig-col pt-4 wow fadeInUp" id="gig00">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-1.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 5 -->
                    <div class="col-md-3 pt-3 gig-col pt-4 wow fadeInUp" data-wow-delay="0.10s" id="gig01">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-2.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 6 -->
                    <div class="col-md-3 pt-3 gig-col pt-4 wow fadeInUp" data-wow-delay="0.15s" id="gig02">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-3.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 7 -->
                    <div class="col-md-3 pt-3 gig-col pt-4 wow fadeInUp" data-wow-delay="0.20s" id="gig03">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-4.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 8 --> 
                    <div class="col-md-3 pt-3 gig-col pt-4 wow fadeInUp" id="gigA">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-1.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 9 -->
                    <div class="col-md-3 pt-3 gig-col pt-4 wow fadeInUp" data-wow-delay="0.10s" id="gigB">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-2.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 10 -->
                    <div class="col-md-3 pt-3 gig-col pt-4 wow fadeInUp" data-wow-delay="0.15s" id="gigC">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-3.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 11 -->
                    <div class="col-md-3 pt-3 gig-col pt-4 wow fadeInUp" data-wow-delay="0.20s" id="gigD">
                        <div class="gig-img">
                            <a href="product.html"><img class="img-fluid" src="./assets/img/gig-img-4.png"></a>
                        </div>
                        <div class="gig-details">
                            <h2>Professional Logo</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            <div class="dropdown-divider m-0"></div>
                            <span class="gig-price">Price</span> 
                            <span class="gig-cost">$200</span>
                        </div>
                    </div> <!--Column 12 -->   
                    <div class="col-md-12 pt-5 view-more-col text-center">
                        <a class="btn" href="#">View More</a>
                    </div>                                                                   
                </div>
            </div>
    </section> <!-- GIG Section -->

    


@yield('footer')

