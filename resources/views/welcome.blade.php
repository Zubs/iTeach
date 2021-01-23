<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>iTeach</title>
    <meta name="author" content="Zubair Idris Aweda">
    <meta name="description" content="iTeach is an online platform where parents can easily find affordable and intelligent home tutors for their wards">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('img/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom header-sticky">
                    <!-- Logo -->
                    <div class="logo d-none d-lg-block">
                        <a href="{{ route('landing') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                    </div>
                    <div class="container">
                        <div class="menu-wrapper">
                            <!-- Logo -->
                            <div class="logo logo2 d-block d-lg-none">
                                <a href="{{ route('landing') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                          
                                        <li><a href="{{ route('landing') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('tutors.index') }}">Tutors</a></li>
                                        <li><a href="{{ route('contact.create') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            <div class="header-search d-none d-lg-block">
                                <form action="#" class="form-box f-right ">
                                    <input type="text" name="Search" placeholder="Find Tutor">
                                    <div class="search-icon">
                                        <i class="fas fa-search special-tag"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-7 col-md-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">The Best Way To Find Tutors For Your Wards!</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="{{ route('tutors.index') }}" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Get A Tutor</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5">
                                <div class="hero-man d-none d-lg-block f-right" data-animation="jello" data-delay=".4s">
                                    <img src="{{ asset('img/hero/heroman.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-7 col-md-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">The New Way To Learn Properly!</h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="{{ route('tutors.index') }}" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Get A Tutor</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5">
                                <div class="hero-man d-none d-lg-block f-right" data-animation="jello" data-delay=".4s">
                                    <img src="{{ asset('img/hero/heroman.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Popular Online Courses</span>
                            <h2>Lets Browse All Categories</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-web-design"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a  href="#">Web Design</a></h5>
                                <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                                <a href="#" class="read-more1">Read More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-education"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a  href="#">App Development</a></h5>
                                <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                                <a  href="#" class="read-more1">Read More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-communications"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a  href="#">Video Editing</a></h5>
                                <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                                <a  href="#" class="read-more1">Read More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-computing"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a  href="#">Digital Marketing</a></h5>
                                <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                                <a  href="#" class="read-more1">Read More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-tools-and-utensils"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a  href="#">Seo Marketing</a></h5>
                                <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                                <a  href="#" class="read-more1">Read More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-business"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a  href="#">Content Writing</a></h5>
                                <p>Sorem hpsum folor sixdsft amhtget, consectetur adipiscing eliht, sed do eiusmod tempor incidi.</p>
                                <a  href="#" class="read-more1">Read More ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <a href="courses.html" class="btn">Find More Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Area End -->
        <!--? Count Down Start -->
        <div class="count-down-area pt-90 pb-60 section-bg" data-background="{{ asset('img/hero/section_bg01.png') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="count-down-wrapper" >
                            <div class="row justify-content-between">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72px" height="69px">
                                            <image  x="0px" y="0px" width="72px" height="69px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABFCAMAAADerVCrAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB11BMVEUXmnP///8XmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnP///8qvp8aAAAAm3RSTlMAAFDr4uMPOMDMwtJjMzzHMMguXAUTrvgdzuXda/4UIr+7NTa2pVX1F7iKibnzFUFEvYcv8j7xn9+ewYPkQvARLeoCLMOAc3KBRdaFhoRW+u5XA/wIOWTaeA4rk69LHJyLKdH2qeyiqgwYs6Cn3Foktw1MbwlYaZk0lNmCEkftSRDUGVsHJaiyuhoKd+jnrfQb4Uislgt118pnASfW+mcAAAABYktHRAH/Ai3eAAAAB3RJTUUH5AUFDBg2+oR40gAAAoxJREFUWMPtmOlfEkEYxycxAQVCFJUVSMpVCBBRFMmENMxCUFO7Lc3yyg47zG677/uu3z/bLtfu+pl9sQu86BO/F+wzv332y87D7MwOhGRUoYEqaSqIVJXqOMD2LSCgiqhQFVBKkFanVySdVgZUrbQ+1TKgGhiMCmRAjSzIpKQ+pjKoDCopaAfMSkBm1MqALHVKOITUWUo9jRQNVG9VRrHWy4AaGpuUcJoaG/6ZcVQGlUHFANnANCsQA5sMyO5QtvQ77HLTiHOnIjlLPB+1uFSoZStol9pXSGC3BNQKtk2VWLSKOVq0u9WUiBB3O7Sipgd71HEI8cInNEzwd9CSnIFOkQJOWk6HX/Q8BNFFy+kOScsaMtOyuhDMhT3opS5EYfSJ34b7EKFlWXvRkw33op/afQZGcdOIfdS0fugywQCiMVrCfgwOidtDgzhAy4tFMZAO4himftNBsFKDxQg18RDi/OEwkKDuEDRgpAYDDTUxAXRyoFH1T4egZPrnCyvZONAUTg+fFLykQHmR4j7HMD5RoMZxhANNRqYKrdBUZDJ9Z9OxAjVdaG0k2lYklUH/NwiIHJUMrGO13KA/fuKk2Dt1OsqZM2ckiW0+zqtMns2MRTIbB+aEs+fmcX4mfIHBQkAwRwAbu+gClpbz3ooHuLh66TJwhWS7dnUNvmvZ09eBGzf5YN2BW7lrNjB/mz+67+BubrfSPYF79/ngwQKS+RqN4uEmbz4aRii3cKw8xsYTPjDrhWXIADzlj8/sQO6vrOU1eJ5nQWQdaH6x+hJ49Tp/729YILjI6oG3QidN7/B+KfzhIxKiBWUOiM9mQORT6jNXOdeYpJpfvnKe/5tF7H3/8ZMzf/3+Iza1EeAvtr05pHWuTqcAAAAASUVORK5CYII=" />
                                       </svg>
                                        <span class="counter color-green">1050</span>
                                        <p class="color-green">+ Subjects</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72px" height="79px">
                                             <image  x="0px" y="0px" width="72px" height="79px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABPCAMAAAB/NnPNAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACo1BMVEX///8tMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJL///9r5VNNAAAA33RSTlMAACpgeYRyURmH3McEAnb16q6Shb3VOg23sT8DDGLb+2kKSQmYD6PjJGv+72dOLlDAfNdwXvxI4QaRsJ5/GzXxFwdcbfAeFflCdPIvuHum/ZUcZovQWLwllhYrq/qAFFaGmWX09zaX5KETzczuLZt6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" />
                                        </svg>
                                        <span class="counter color-blue">1050</span>
                                        <p class="color-blue">+ Tutors</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <!-- Counter Up -->
                                    <div class="single-counter text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72px" height="69px">
                                            <image  x="0px" y="0px" width="72px" height="69px"  xlink:href="data:img/png;base64,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" />
                                        </svg>
                                        <span class="counter color-red">1050</span>
                                        <p class="color-red">+ Happy Students</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Count Down End -->
        <!--? Team Ara Start -->
        <div class="team-area pt-160 pb-160 section-bg" data-background="{{ asset('img/hero/section_bg02.png') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-70">
                            <span>More About Our Faculty</span>
                            <h2>Our Best Teachers</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('img/tutors/team1.png') }}" alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="{{ route('tutors.index') }}">Alexa Janathon</a></h3>
                                <p>Faculty</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('img/tutors/team2.png') }}" alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="{{ route('tutors.index') }}">Janathon Smith</a></h3>
                                <p>Faculty</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('img/tutors/team3.png') }}" alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="{{ route('tutors.index') }}">Alexa MacCalum</a></h3>
                                <p>Faculty</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('img/tutors/team4.png') }}" alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="{{ route('tutors.index') }}">Alexa j Watson</a></h3>
                                <p>Faculty</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-70">
                            <a href="{{ route('tutors.index') }}" class="btn white-btn">View All Faculty</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
        <!--? About Law Start-->
        <div class="about-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>More About Our Company</span>
                                <h2>Want to know more</h2>
                            </div>
                            <p>There arge many variations ohf passages of sorem gpsum ilable, but the majority have suffered alteration in some form, by ected humour, or randomised words whi.</p>
                            <ul>
                                <li><span class="flaticon-business"></span> Creative ideas base</li>
                                <li><span class="flaticon-communications-1"></span> Assages of sorem gpsum ilable</li>
                                <li><span class="flaticon-graduated"></span> Have suffered alteration in so</li>
                                <li><span class="flaticon-tools-and-utensils"></span> Randomised words whi</li>
                            </ul>
                            <a href="about.html" class="btn">More About Us</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img d-none d-lg-block">
                                <img src="{{ asset('img/hero/about2.png') }}" alt="">
                            </div>
                            <div class="about-back-img ">
                                <img src="{{ asset('img/hero/about1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Law End-->
        <!--? Testimonial Start -->
        <div class="testimonial-area fix pt-180 pb-180 section-bg" data-background="{{ asset('img/hero/section_bg03.png') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="{{ asset('img/hero/testimonial.png') }}" class="ani-btn " alt="">
                                </div>
                                    <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>You can’t succeed if you just do what others do and 
                                        follow the well-worn path. You need to create a new and 
                                        original path for yourself.</p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="{{ asset('img/hero/testimonial.png') }}" class="ani-btn " alt="">
                                </div>
                                    <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>You can’t succeed if you just do what others do and 
                                        follow the well-worn path. You need to create a new and 
                                        original path for yourself. </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area footer-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- footer Heading -->
                    <div class="footer-heading">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-7 col-md-10">
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="footer-tittle2">
                                    <h4>Let’s Get Social</h4>
                                </div>
                                <!-- Footer Social -->
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a  href="#"><i class="fab fa-google"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <ul>
                                        <li><a href="#">Online Learning</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Press Center</a></li>
                                        <li><a href="#">Become an Instructor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Campus</h4>
                                    <ul>
                                        <li><a href="#">Our Plans</a></li>
                                        <li><a href="#">Free Trial</a></li>
                                        <li><a href="#">Academic Solutions</a></li>
                                        <li><a href="#">Business Solutions</a></li>
                                        <li><a href="#"> Government Solutions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Study</h4>
                                    <ul>
                                        <li><a href="#">Admissions Policy</a></li>
                                        <li><a href="#">Getting Started</a></li>
                                        <li><a href="#">Online Application</a></li>
                                        <li><a href="#">Visa Information</a></li>
                                        <li><a href="#">Tuition Calculator</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Spport</h4>
                                    <ul>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">System Requirements</a></li>
                                        <li><a href="#">Register Activation Key</a></li>
                                        <li><a href="#">Site feedback</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> and powered by <a href="https://laravel.com" target="_blank">Laravl</a> written with <i class="fa-heart"></i> by <a href="https://zubs.github.io" target="_blank">Zubair</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/animated.headline.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    
    <!-- counter , waypoint -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    
    <!-- contact js -->
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    
    <!-- Jquery Plugins, main Jquery -->    
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    
    </body>
</html>