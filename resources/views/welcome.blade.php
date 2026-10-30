@extends('layouts.frontend.app')

@section('title', 'A Best Online Learning Platform')

@push('css')

@endpush

@section('content')

    <!--Video Section-->

<div class="home2-slider">
        <div class="container-fluid p0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-banner-wrapper">
                        <div class="banner-style-one owl-theme owl-carousel">
                            @foreach($sliders as $key=>$slider)
                            <div class="slide slide-one sh2" style="background: url({{ asset('uploads/slider/'.$slider->image) }});">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <h3 class="banner-title">{{ $slider->title }}</h3>
                                            <p>{{ $slider->sub_title }}</p>
                                            <div class="btn-block">
                                                <a href="#" class="banner-btn">Ready to get Started?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="carousel-btn-block banner-carousel-btn">
                            <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i> <span class="left">PR <br> EV</span></span>
                            <span class="carousel-btn right-btn"><span class="right">NE <br> XT</span> <i class="flaticon-right-arrow-1 right"></i></span>
                        </div><!-- /.carousel-btn-block banner-carousel-btn -->
                    </div><!-- /.main-banner-wrapper -->
                </div>
            </div>
        </div>
    </div>
    <!-- Top Courses -->
    <section id="top-courses" class="top_cours">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">Browse Our Top Courses</h3>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="options" class="alpha-pag full">
                        <div class="option-isotop">
                            <ul id="filter" class="option-set" data-option-key="filter">
                                <li class="list-inline-item"><a href="#all" data-option-value="*" class="selected">Developer</a></li>
                                <li class="list-inline-item"><a href="#business" data-option-value=".business">Business</a></li>
                                <li class="list-inline-item"><a href="#design" data-option-value=".design">Design</a></li>
                                <li class="list-inline-item"><a href="#web" data-option-value=".web">Web</a></li>
                                <li class="list-inline-item"><a href="#marketing" data-option-value=".marketing">Marketing</a></li>
                            </ul>
                        </div>
                    </div><!-- FILTER BUTTONS -->
                    <div class="emply-text-sec">
                        <div class="row" id="masonry_abc">
                            <div class="col-md-6 col-lg-4 col-xl-3 business design">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/courses/t1.jpg" alt="t1.jpg">
                                        <div class="overlay">
                                            <div class="tag">Best Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Ali TUFAN</p>
                                            <h5>Introduction Web Design with HTML</h5>
                                            <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                            <div class="tc_price float-right">$69.95</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 business marketing">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/courses/t2.jpg" alt="t2.jpg">
                                        <div class="overlay">
                                            <div class="tag">Top Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Ali TUFAN</p>
                                            <h5>Designing a Responsive Mobile Website with Muse</h5>
                                            <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                            <div class="tc_price float-right">$69.95</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 web design">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/courses/t3.jpg" alt="t3.jpg">
                                        <div class="overlay">
                                            <div class="tag">Top Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Ali TUFAN</p>
                                            <h5>Adobe XD: Prototyping Tips and Tricks</h5>
                                            <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                            <div class="tc_price float-right">$69.95</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 business Web">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/courses/t4.jpg" alt="t4.jpg">
                                        <div class="overlay">
                                            <div class="tag">Best Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Ali TUFAN</p>
                                            <h5>Sketch: Creating Responsive SVG</h5>
                                            <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                            <div class="tc_price float-right">$69.95</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 marketing">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/courses/t5.jpg" alt="t5.jpg">
                                        <div class="overlay">
                                            <div class="tag">Best Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Ali TUFAN</p>
                                            <h5>Design Instruments for Communication</h5>
                                            <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                            <div class="tc_price float-right">$69.95</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 business marketing">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/courses/t6.jpg" alt="t6.jpg">
                                        <div class="overlay">
                                            <div class="tag">Top Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Ali TUFAN</p>
                                            <h5>How to be a DJ? Make Electronic Music</h5>
                                            <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                            <div class="tc_price float-right">$69.95</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 design Web">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/courses/t7.jpg" alt="t7.jpg">
                                        <div class="overlay">
                                            <div class="tag">Top Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Ali TUFAN</p>
                                            <h5>How to Make Beautiful Landscape Photos?</h5>
                                            <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                            <div class="tc_price float-right">$69.95</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3 business">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="images/courses/t8.jpg" alt="t8.jpg">
                                        <div class="overlay">
                                            <div class="tag">Best Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Ali TUFAN</p>
                                            <h5>Fashion Photography From Professional</h5>
                                            <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                            <div class="tc_price float-right">$69.95</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about_home3_shape_container">
                        <div class="about_home4_shape4"><img src="images/about/shape4.png" alt="shape4.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about4 home4 -->
    <section class="home4_about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="about_home3">
                        <h3>What We Do</h3>
                        <h5>Striving to make the web a more beautiful place every single day</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, nostrum nam similique a veniam cum? Mollitia facilis labore, sit cumque quae. Odio quos quae explicabo provident cumque maiores, placeat deserunt!</p>
                        <a href="#" class="btn about_btn_home3">View More</a>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="home3_about_icon_box five">
                                <div class="icon"><span class="flaticon-account"></span></div>
                                <div class="details">
                                    <h4>Create Account</h4>
                                    <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="home3_about_icon_box two">
                                <div class="icon"><span class="flaticon-online"></span></div>
                                <div class="details">
                                    <h4>Create Online Course</h4>
                                    <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="home3_about_icon_box six">
                                <div class="icon"><span class="flaticon-student-1"></span></div>
                                <div class="details">
                                    <h4>Interact with Students</h4>
                                    <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="home3_about_icon_box seven">
                                <div class="icon"><span class="flaticon-employee"></span></div>
                                <div class="details">
                                    <h4>Achieve Your Goals</h4>
                                    <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about_home3_shape_container">
                        <div class="about_home3_shape"><img src="images/about/shape1.png" alt="shape1.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- School Category Courses -->
    <section id="our-courses" class="our-courses bgc-f9">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">Via School Categories Courses</h3>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-sm-6 col-lg-3">
                        <div class="img_hvr_box" style="background-image: url({{ asset('uploads/category/'.$category->image) }});">
                            <div class="overlay">
                                <div class="details">
                                    <h5>{{ $category->name }}</h5>
                                    {{-- <p>Over 800 Courses</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-6 offset-lg-3">
                    <div class="courses_all_btn text-center">
                        <a class="btn btn-transparent" href="#">View All Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Blog -->
   {{--  <section class="our-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">Latest News And Events</h3>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="blog_slider_home1 owl-carousel owl-theme owl-loaded">
                        
                        
                        
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1935px, 0px, 0px); transition: all 2s ease 0s; width: 4515px;"><div class="owl-item cloned" style="width: 630px; margin-right: 15px;"><div class="item">
                            <div class="blog_post one">
                                <div class="thumb">
                                    <div class="post_title">Events</div>
                                    <img class="img-fluid w100" src="images/blog/1a.jpg" alt="1a.jpg">
                                    <a class="post_date" href="#"><span>28 <br> March</span></a>
                                </div>
                                <div class="details">
                                    <div class="post_meta">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                        </ul>
                                    </div>
                                    <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 630px; margin-right: 15px;"><div class="item">
                            <div class="blog_post one">
                                <div class="thumb">
                                    <div class="post_title">Events</div>
                                    <img class="img-fluid w100" src="images/blog/1b.jpg" alt="1b.jpg">
                                    <a class="post_date" href="#"><span>28 <br> March</span></a>
                                </div>
                                <div class="details">
                                    <div class="post_meta">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                        </ul>
                                    </div>
                                    <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 630px; margin-right: 15px;"><div class="item">
                            <div class="blog_post one">
                                <div class="thumb">
                                    <div class="post_title">Events</div>
                                    <img class="img-fluid w100" src="images/blog/1.jpg" alt="1.jpg">
                                    <a class="post_date" href="#"><span>28 <br> March</span></a>
                                </div>
                                <div class="details">
                                    <div class="post_meta">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                        </ul>
                                    </div>
                                    <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                                </div>
                            </div>
                        </div></div><div class="owl-item active" style="width: 630px; margin-right: 15px;"><div class="item">
                            <div class="blog_post one">
                                <div class="thumb">
                                    <div class="post_title">Events</div>
                                    <img class="img-fluid w100" src="images/blog/1a.jpg" alt="1a.jpg">
                                    <a class="post_date" href="#"><span>28 <br> March</span></a>
                                </div>
                                <div class="details">
                                    <div class="post_meta">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                        </ul>
                                    </div>
                                    <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 630px; margin-right: 15px;"><div class="item">
                            <div class="blog_post one">
                                <div class="thumb">
                                    <div class="post_title">Events</div>
                                    <img class="img-fluid w100" src="images/blog/1b.jpg" alt="1b.jpg">
                                    <a class="post_date" href="#"><span>28 <br> March</span></a>
                                </div>
                                <div class="details">
                                    <div class="post_meta">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                        </ul>
                                    </div>
                                    <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 630px; margin-right: 15px;"><div class="item">
                            <div class="blog_post one">
                                <div class="thumb">
                                    <div class="post_title">Events</div>
                                    <img class="img-fluid w100" src="images/blog/1.jpg" alt="1.jpg">
                                    <a class="post_date" href="#"><span>28 <br> March</span></a>
                                </div>
                                <div class="details">
                                    <div class="post_meta">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                        </ul>
                                    </div>
                                    <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                                </div>
                            </div>
                        </div></div><div class="owl-item cloned" style="width: 630px; margin-right: 15px;"><div class="item">
                            <div class="blog_post one">
                                <div class="thumb">
                                    <div class="post_title">Events</div>
                                    <img class="img-fluid w100" src="images/blog/1a.jpg" alt="1a.jpg">
                                    <a class="post_date" href="#"><span>28 <br> March</span></a>
                                </div>
                                <div class="details">
                                    <div class="post_meta">
                                        <ul>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                        </ul>
                                    </div>
                                    <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                                </div>
                            </div>
                        </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="flaticon-left-arrow"></i></div><div class="owl-next" style=""><i class="flaticon-right-arrow-1"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3">
                    <div class="blog_post">
                        <div class="thumb">
                            <img class="img-fluid w100" src="images/blog/2.jpg" alt="2.jpg">
                            <a class="post_date" href="#">July 21, 2019</a>
                        </div>
                        <div class="details">
                            <h5>Marketing</h5>
                            <h4>A Solution Built for Teachers</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3">
                    <div class="blog_post">
                        <div class="thumb">
                            <img class="img-fluid w100" src="images/blog/3.jpg" alt="3.jpg">
                            <a class="post_date" href="#">July 21, 2019</a>
                        </div>
                        <div class="details">
                            <h5>Business</h5>
                            <h4>An Overworked Newspaper Editor</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt50">
                <div class="col-lg-12">
                    <div class="read_more_home text-center">
                        <h4>Like what you see? <a href="#">See more posts<span class="flaticon-right-arrow pl10"></span></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
 --}}
    <!-- about3 home3 -->
   {{--  <section class="home3_about2 pb10 pt30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">Top Rating Instructors</h3>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instructor_slider_home3">
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/1.png" alt="1.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Kathelen Monero</h4>
                                    <p>Professional skaters association</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/2.png" alt="2.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Anna Richard</h4>
                                    <p>Travel Bloger</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/3.png" alt="3.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Ali Tufan</h4>
                                    <p>UX/UI Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/4.png" alt="4.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Jack Wilson</h4>
                                    <p>Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/5.png" alt="5.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Jessie Handerson</h4>
                                    <p>Personal Life Coach Fitness Trainer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/1.png" alt="1.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Kathelen Monero</h4>
                                    <p>Professional skaters association</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/2.png" alt="2.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Anna Richard</h4>
                                    <p>Travel Bloger</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/3.png" alt="3.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Ali Tufan</h4>
                                    <p>UX/UI Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/4.png" alt="4.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Jack Wilson</h4>
                                    <p>Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/5.png" alt="5.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Jessie Handerson</h4>
                                    <p>Personal Life Coach Fitness Trainer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/1.png" alt="1.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Kathelen Monero</h4>
                                    <p>Professional skaters association</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/2.png" alt="2.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Anna Richard</h4>
                                    <p>Travel Bloger</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/3.png" alt="3.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Ali Tufan</h4>
                                    <p>UX/UI Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/4.png" alt="4.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Jack Wilson</h4>
                                    <p>Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="instructor_col">
                                <div class="thumb">
                                    <img class="img-fluid img-rounded-circle" src="images/team/5.png" alt="5.png">
                                </div>
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(5)</a></li>
                                    </ul>
                                    <h4>Jessie Handerson</h4>
                                    <p>Personal Life Coach Fitness Trainer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    

    <!-- Divider -->
    {{-- <section class="divider2 parallax bgc-thm2" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="divider-two">
                        <p class="color-white">Get 100 Online Courses for Free</p>
                        <h1 class="color-white text-uppercase">REGISTER TO GET IT</h1>
                        <div id="countdown"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="divider-two">
                        <p class="color-white">CREATE FREE ACCOUNT TO GET</p>
                        <h3 class="color-white text-uppercase">The Complete Web Developer Course</h3>
                    </div>
                    <div class="divider-two-form">
                        <div id="mc_embed_signup">
                            <form method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group">
                                        <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Your Name">
                                    </div>
                                    <div class="mc-field-group">
                                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
                                    </div>
                                    <a href="#" class="btn btn-lg mailchimp_btn">Get It Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="our-newslatters" class="our-newslatters">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mt0">Get Newsletter</h3>
                        <p>Your download should start automatically, if not Click here. Should I give up, huh?.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="footer_apps_widget_home1">
                        <form class="form-inline mailchimp_form">
                            <input type="email" class="form-control" placeholder="Email address">
                            <button type="submit" class="btn btn-lg btn-thm dbxshad">Get it now <span class="flaticon-right-arrow-1"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Footer -->

@endsection

@push('script')

@endpush