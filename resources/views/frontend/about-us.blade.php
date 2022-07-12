@extends('layouts.frontend.frontend', ['activeClass' => 'all_blog','pageType'=>'all_blog'])
@section('frontend_content')
<section id="main-blog-section"  class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="breadcrumbs">
                    <span><a href="/">Home</a></span>
                    <span>About Us</span>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section-titles service-titles-heading service-titles-heading-2 mb-2 mt-3 text-center py-4">
    <h1 class="blog-title-with-border">About Us</h1>
</div>
<section id="About-us">
    <div class="container">
        <div  class="row row-padding row-padding-2 align-items-center justify-content-around">
            <div class="col-md-12">
                <p class="text-justify mt-3"><strong>VSRK Capital Private Limited</strong> was incorporated on 8th November 2013 with the name of VSRK Wealth Creator Pvt. Ltd. has been performing its services of enhancing the wealth of its huge client base with its expertise personnel and knowledge of both traditional and modern Financial Products under Investment Services to ensure a smooth and amazing satisfaction. Under the guidance of Lt.
                         Shri R.K. Agrawal, who served as the President with utmost responsibility. He boosted the strength & potential of the company by many folds by amalgamating the clients and AUM of M/S Agrawal Investments Consultants. Mr. Agrawal took an initiative to consolidate all his businesses under VSRK Wealth Creator Private Limited in Feb 2018 and as per SEBI guidelines, the company name changed to VSRK Capital Private Limited on 15 Nov 2021. 
                        Mr. Agrawal’s vision to build-up a team of exuberant, enterprising and dynamic professionals, certified by the AMFI, NISM and IRDA, working collectively towards a common goal of offering the best for its clients.</p>
            </div>
        </div>
            <div class="row row-padding row-padding-2 align-items-center justify-content-around">
                <div class="col-xl-7 col-lg-7">
                    <div class="single-features-area-down">
                        <div class="section-titles mb-35">
                        <p class="text-justify">We are a boutique company of independent financial advisers, that offers financial planning and portfolio investment management advice to a variety of clients whether HNIs, Corporate houses or other consulting firms under one umbrella. We stand a class apart known for our dynamic work commitments. We have placed ourselves as the creator and multiplier of proactive investment solutions that adds opulence to the investor’s portfolios. Our aim is to assist in achieving individual and family financial goals. We make use of all updated technology to provide the market information before time to take right decision at right time to suit investment needs</p>
                        <p class="text-justify">We specialize in the whole gamut of financial products such as Mutual Funds, Equities, Insurance, Investments etc. We are a team of experienced finance professionals who provide the best research services with best of our knowledge. Our experts provide sound financial advice assisting clients in managing their funds in a professional way to achieve their financial goals. We are SEBI registered Research Analyst responsible for providing in depth research on Indian listed companies to our valuable clients.</p>
                    </div>
                </div>
            </div>
        <div class="col-xl-5 col-lg-5">
                <div class="features-img mb-30">
                    <img src="{{asset('frontend/imgs/about.svg')}}" class="img-fluid" style="filter: hue-rotate(-25deg);" alt="about-us">
                </div>
            </div>
        </div>
        <div class="row row-padding row-padding-2 align-items-center justify-content-around">
            <div class="col-xl-5 col-lg-5">
                <div class="features-img mb-30 text-center">
                    <img src="{{asset('frontend/imgs/what-we-do.svg')}}" width="350px" class="img-fluid" style="filter: hue-rotate(-25deg);" alt="about-us">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="single-features-area-down">
                    <div class="section-titles mb-35 mt-70">
                        <div class="section-titles service-titles-heading service-titles-heading-2">
                            <h2 class="blog-title-with-border">What we do</h2>
                         </div>
                        <p class="text-justify mt-2">VSRK provides investment ideas through exhaustive research on stocks, mutual funds and other investments for its subscribers which help them to take better investment decision to achieve their financial goals. Our commitment to serve the clients with best of our services let us aim towards consistent achievement of goals. We keep a regular track of economic activities, corporate actions and any such events which is directly or indirectly related to our research on various companies. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-padding row-padding-2 align-items-center justify-content-around">
            <div class="col-xl-7 col-lg-7">
                <div class="single-features-area-down">
                    <div class="section-titles mt-70">
                        <div class="section-titles service-titles-heading service-titles-heading-2">
                            <h2 class="blog-title-with-border">How we do</h2>
                        </div>
                        <p class="text-justify mt-2">We shortlist an investment idea based on bottom-up approach. We believe individual company performance matters a lot when it comes to stock selection. On the basis of company’s historical financial performance, management updates, growth forecasts, key ratios and many other factors, we accumulate all such data to reach a final decision on whether the company has potential to generate lucrative returns for the clients in future or not. Our investment philosophy suggests that along with money, time investment is also important for the investments to prosper over a period of time. We are well equipped with technology and software to automate financial research tasks for a timely delivery.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="features-img text-center">
                    <img src="{{asset('frontend/imgs/how-we-do.svg')}}"  width="350px" class="img-fluid" style="filter: hue-rotate(-25deg);" alt="about-us">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


