@extends('layouts.frontend.frontend',['activeClass' => 'index',])
@section('frontend_content')
<main id="homepage">
<section id="home" class="slider-area slider-height-2 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="slider-text slider-text-2 slider-content-space-2">
                            <span class="text-white">Great experience</span>
                            <h2 class="wow fadeInLeft text-white" data-wow-delay=".3s">Meet our
                                adviser</h2>
                            <p class="text-white">Dnsectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna
                                aliqua. </p>
                            <a class="btn btn-white" href="#">Our Services</a>
                            <a class="btn btn-white slider-btn" href="#">Get Started</a>
                        </div>
                    </div>
                    <div class="col-xl-4  col-lg-6 ">
                        <div class="slider-img-2 position-relative">
                            <img class="wow fadeInUp" data-wow-delay=".6s" width="666" height="396" 
                                src="{{asset('frontend/imgs/banner_img.png')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!--features-area  start -->
            <section id="about" class="sevrice-area sevrice-area-2 pt-40 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="single-service text-center mb-30">
                            <div class="servie-icon">
                               <img src="{{asset('frontend/imgs/well-researched.png')}}" width="100" height="100"  class="img-fluid" alt="well-researched" > 
                            </div>
                            <div id="service-text-D1" class="service-text service-text-2 ">
                                <h4>Well Researched stocks</h4>
                                <p>We provide investment ideas based on thorough research to create wealth in the long term.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="single-service text-center mb-30">
                        <div class="servie-icon">
                               <img src="{{asset('frontend/imgs/regular-checkup.png')}}" width="100" height="100"  class="img-fluid" alt="regular-checkup"> 
                            </div>
                            <div id="service-text-D2" class="service-text service-text-2">
                                <h4>Portfolio Health Check Up</h4>
                                <p>We provide services related to your existing portfolio health check up for optimum returns on your portfolio</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="single-service text-center mb-30">
                        <div class="servie-icon">
                               <img src="{{asset('frontend/imgs/trading-call.png')}}" width="100" height="100"  class="img-fluid" alt="trading-call"> 
                            </div>
                            <div id="service-text-D3" class="service-text service-text-2">
                                <h4>Trading Calls</h4>
                                <p>We provide technical analysis or event-based calls for short term gains </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--features-area end -->

    <!-- experience-area start -->
    <section id="fea" class="features-area pt-40 pb-120">
    <div class="container">
        <div class="row pt-100 pb-100 row-padding row-padding-2">
            <div class="col-xl-6 col-lg-6">
                <div class="single-features-area-down">
                    <div class="section-titles mb-35 mt-70">
                        <h2>Equities</h2>
                        <p><strong>Fundamental Research Reports</strong>  We make sure to offer well researched reports to our clients with important quantitative and qualitative data. It’s a great product for clients looking to invest in equities to generate long-term wealth.</p>
                        <div class="features-text">
                            <ul>
                                <li><strong>Technical Short Term Calls</strong> We provide short-term calls based on various technical indicators to generate quick returns. </li>
                                <li><strong>Technical Medium Term Calls</strong> We provide medium-term calls based on technical analysis to generate returns within a year.  </li>
                            </ul>
                        </div>
                        <div class="mt-40">
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="features-img mb-30">
                    <img src="{{asset('frontend/imgs/equity.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="features-img features-img-2 mb-30">
                <img src="{{asset('frontend/imgs/feature-2.svg')}}" style="filter: hue-rotate(-32deg);" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="single-features-area mb-30">
                    <div class="section-titles mb-35">
                        <h2>Portfolio Health Check-Up </h2>
                    </div>
                    <div class="features-text">
                        <ul>
                        <li><strong>Portfolio Advisory</strong> We understand client requirements and accordingly offer personalized advisory services on their portfolio for better performance.</li>
                            <li><strong>Portfolio Re-shuffling </strong> Underperforming Portfolios need to be reshuffled to get better returns. We work along with clients to offer such specialized services.</li>
                        </ul>
                    </div>
                    <div class="mt-40">
                            <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services-area end -->

@include('partials.frontend.testimonial', compact('testimonials'))
  </main>
  @include('partials.frontend.package',compact('packages'))
  
    <!-- <section id="app" class="author-down-area cua-2 pt-120 pb-85">
            <div class="container">
                <div class="row padding-0">
                    <div class="col-xl-5 col-lg-5">
                        <div class="authour-down-img mb-30">
                            <img src="{{asset('frontend/imgs/app_banner.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="single-features-area single-service-right single-features-area-2">
                            <div class="section-titles mb-35">
                                <span>Get app now</span>
                                <h2>Available For Your<br>Smartphone</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusLorem ipsumLorem
                                    ipsum dolor sit amet, </p>
                                <div class="get-app">
                                    <a href="#">
                                        <i class="fa fa-apple"></i>
                                        <p>Get in
                                            <br>
                                            <span>Apple Store</span>
                                        </p>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-android"></i>
                                        <p>Get in
                                            <br>
                                            <span>Play Store</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- product area start -->

@endsection
@push('js')

@endpush