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
<!--about_us  start -->
<section id="feature" class="sevrice-area sevrice-area-2">
<div class="container">
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="single-service text-center mb-30">
                <div class="servie-icon">
                    <img src="{{asset('frontend/imgs/well-researched.png')}}" width="100" height="100"  class="img-fluid" alt="well-researched" > 
                </div>
                <div id="service-text-D1" class="service-text service-text-2 ">
                    <h4>Well Researched stocks</h4>
                    <p>Investment ideas based on thorough research to create wealth in the long term.</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="single-service text-center mb-30">
            <div class="servie-icon">
                    <img src="{{asset('frontend/imgs/portifolio-checkup.png')}}" width="100" height="100"  class="img-fluid" alt="portifolio-checkup"> 
                </div>
                <div id="service-text-D2" class="service-text service-text-2">
                    <h4>Portfolio Health Check Up</h4>
                    <p>Services related to your existing portfolio health check up for optimum returns on your portfolio</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="single-service text-center mb-30">
            <div class="servie-icon">
                    <img src="{{asset('frontend/imgs/technical-call.png')}}" width="100" height="100"  class="img-fluid" alt="trading-call"> 
                </div>
                <div id="service-text-D3" class="service-text service-text-2">
                    <h4>Technical Calls for Trading</h4>
                    <p>Technical analysis or event-based calls for short term trade </p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
        <!--features-area end -->
<section id="who-we-are" class="features-area pt-50">
    <div class="container">
        <div class="row row-padding row-padding-2 align-items-center justify-content-around">
            <div class="col-xl-6 col-lg-5">
                <div class="features-img mb-30">
                    <img src="{{asset('frontend/imgs/about.svg')}}" class="img-fluid" style="filter: hue-rotate(-25deg);" alt="about-us">
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="single-features-area-down">
                    <div class="section-titles mb-35 mt-70">
                        <div class="section-titles service-titles-heading service-titles-heading-2">
                            <h1 class="blog-title-with-border">Who we are</h1>
                         </div>
                        <p class="text-justify mt-4"><strong>VSRK Capital Private Limited</strong> was incorporated on 8th November 2013 with the name of VSRK Wealth Creator Pvt. Ltd. has been performing its services of enhancing the wealth of its huge client base with its expertise personnel and knowledge of both traditional and modern Financial Products under Investment Services to ensure a smooth and amazing satisfaction. Under the guidance of Lt.
                         Shri R.K. Agrawal, who served as the President with utmost responsibility. He boosted the strength & potential of the company by many folds by amalgamating the clients and AUM of M/S Agrawal Investments Consultants. Mr. Agrawal took an initiative to consolidate all his businesses under VSRK Wealth Creator Private Limited in Feb 2018 and as per SEBI guidelines, the company name changed to VSRK Capital Private Limited on 15 Nov 2021. 
                        Mr. Agrawal’s vision to build-up a team of exuberant, enterprising and dynamic professionals, certified by the AMFI, NISM and IRDA, working collectively towards a common goal of offering the best for its clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- experience-area start -->
    <section id="what-we-do" class="features-area pt-50 pb-50">
    <div class="container">
        <div class="row row-padding row-padding-2 align-items-center justify-content-around pb-50">
            <div class="section-titles service-titles-heading service-titles-heading-2 text-center">
                <h1 class="blog-title-with-border">What we do</h1>
                <p class="mt-3">VSRK provides investment ideas through exhaustive research on stocks, mutual funds and other investments for its subscribers which help them to take better investment decision to achieve their financial goals. Our commitment to serve the clients with best of our services let us aim towards consistent achievement of goals. We keep a regular track of economic activities, corporate actions and any such events which is directly or indirectly related to our research on various companies.</p>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="single-features-area-down">
                    <div class="section-titles mb-35 mt-70">
                        <h2>Equities</h2>
                        <p class="text-justify"><strong>Fundamental Research Reports</strong>  We make sure to offer well researched reports to our clients with important quantitative and qualitative data. It’s a great product for clients looking to invest in equities to generate long-term wealth. We adopt bottom-up approach as we believe a company can outperform the markets if it has been showcasing improved financials over a period of time irrespective of economic conditions.  </p>
                        <div class="features-text">
                            <ul>
                                <li><strong>Mid-Cap Stocks</strong> Research on companies whose market capitalization is above Rs 5,000 cr. but less than Rs 20,000 cr. </li>
                                <li><strong>Small-Cap Stocks</strong> Research on companies whose market capitalization is less than Rs 5,000 cr. </li>
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
                    <img src="{{asset('frontend/imgs/equity.svg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-around pb-50">
            <div class="col-xl-5 col-lg-5">
                <div class="features-img features-img-2 mb-30">
                <img src="{{asset('frontend/imgs/technical_calls.svg')}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="single-features-area mb-30">
                    <div class="section-titles mb-35">
                        <h2>Technical Calls</h2>
                        <p class="text-justify">Based on Technical Analysis to identify trading opportunities by analysing statistical trends. Trading calls identify changes in price, volume, trend, momentum and other such indicators to evaluate investments. Technical Calls require more discipline while trading as compared with fundamental calls. Clients who are keen to trade for a very short period of time may opt for these services.</p>
                    </div>
                    <div class="features-text">
                        <ul>
                        <li><strong>Short Term Calls</strong> Short-term calls based on various technical indicators for short-term trades.</li>
                        <li><strong>Medium Term Calls</strong> Medium-term calls based on technical analysis for medium-term trades. </li>
                        </ul>
                    </div>
                    <div class="mt-40">
                            <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="col-xl-7 col-lg-7">
                <div class="single-features-area mb-30">
                    <div class="section-titles mb-35">
                        <h2>Portfolio Health Check-Up </h2>
                        <p class="text-justify">Its always recommended to review a long-term portfolio once in a while to take an appropriate action timely. Portfolio health check also let an investor to restructure its portfolio in such a way to generate better return on investments.</p>
                    </div>
                    <div class="features-text">
                        <ul>
                        <li><strong>Portfolio Advisory</strong> We understand client requirements and accordingly offer personalized advisory services on their portfolio for better performance.</li>
                            <li><strong>Portfolio Restructuring</strong> Underperforming Portfolios need to be restructured to get better returns on investments. We work along with clients to offer such specialized services.</li>
                        </ul>
                    </div>
                    <div class="mt-40">
                            <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="features-img features-img-2 mb-30">
                <img src="{{asset('frontend/imgs/feature-2.svg')}}" class="img-fluid" style="filter: hue-rotate(-32deg);" alt="">
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