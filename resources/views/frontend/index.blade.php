@extends('layouts.frontend.frontend',['activeClass' => 'index',])
@section('frontend_content')
<section id="home" class="slider-area slider-height-2 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
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
                    <div class="col-xl-4 offset-xl-1 col-lg-7 offst-lg-1">
                        <div class="slider-img-2 position-relative d-none d-lg-block">
                            <img class="wow fadeInUp" data-wow-delay=".6s"
                                src="{{asset('frontend/imgs/banner_img.png')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!--features-area  start -->
            <section id="about" class="sevrice-area sevrice-area-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                        <div class="section-titles mb-60 text-center">
                            <span>features</span>
                            <h2>Awesome, Clean,<br>
                                Poweful and Creative!
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service text-center mb-30">
                            <div class="servie-icon">
                                <img src="img/icon/wrok-icon-1.png" alt="">
                            </div>
                            <div class="service-text service-text-2">
                                <h3>Financial Planning</h3>
                                <p>Lorem ipsum dolor sit amet,t consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service text-center mb-30">
                            <div class="servie-icon">
                                <img src="img/icon/wrok-icon-2.png" alt="">
                            </div>
                            <div class="service-text service-text-2">
                                <h3>Layered Psd</h3>
                                <p>Lorem ipsum dolor sit amet,t consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service text-center mb-30">
                            <div class="servie-icon">
                                <img src="img/icon/wrok-icon-3.png" alt="">
                            </div>
                            <div class="service-text service-text-2">
                                <h3>Taxes Planning</h3>
                                <p>Lorem ipsum dolor sit amet,t consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore </p>
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
                        <span>our benefits</span>
                        <h2>The Most Creative <br>Ideas For Our Clients</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusLorem ipsum
                            dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempotr</p>
                        <div class="mt-40">
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="features-img mb-30">
                    <img src="{{asset('frontend/imgs/advert_bg1-min.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="features-img features-img-2 mb-30">
                    <img src="{{asset('frontend/imgs/advert_bg-min.png')}}" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="single-features-area mb-30">
                    <div class="section-titles mb-35">
                        <span>Explore and Creates</span>
                        <h2>Awesome,Clean,<br>Poweful and Creative!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.</p>
                    </div>
                    <div class="features-text">
                        <ul>
                            <li>PHP Programming</li>
                            <li>App Interface Design</li>
                            <li>Web Design</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services-area end -->

<!-- testimonail area start -->
<section id="review" class="dark-shape-area pt-120 pb-100">
      <div class="container">
          <div class="row">
              <div class="col-xl-6 col-lg-6">
                  <div class="section-titles service-titles-heading service-titles-heading-2 mb-60">
                      <span>Testimonial</span>
                      <h2>Our Custotmers Say</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusLorem ipsumLorem
                          ipsum dolor sit amet, consectetur adipisicing elit,</p>
                  </div>
              </div>
          </div>
          <div class="row  row-padding activ-testimonai test-arrow">
              <div class="col-xl-12">
                  <div class="testimonail-body">
                      <div class="testimonnial-titles mb-20">
                          <div class="testimoinal-img">
                              <img src="img/author/author.png" alt="">
                          </div>
                          <div class="autor-mata">
                              <h3><b>Smith Jhon</b></h3>
                              <span>HEART PATIENT</span>
                              <i class="fa fa-quote-right"></i>
                          </div>
                      </div>
                      <div class="testimoinal-text">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusLorem
                              ipsumLorem
                              ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                              incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                      </div>
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="testimonail-body">
                      <div class="testimonnial-titles mb-20">
                          <div class="testimoinal-img">
                              <img src="img/icon/authour1.png" alt="">
                          </div>
                          <div class="autor-mata">
                              <h3><b>Smith Jhon</b></h3>
                              <span>HEART PATIENT</span>
                              <i class="fa fa-quote-right"></i>
                          </div>
                      </div>
                      <div class="testimoinal-text">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusLorem
                              ipsumLorem
                              ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                              incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                      </div>
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="testimonail-body">
                      <div class="testimonnial-titles mb-20">
                          <div class="testimoinal-img">
                              <img src="img/icon/authour1.png" alt="">
                          </div>
                          <div class="autor-mata">
                              <h3><b>Smith Jhon</b></h3>
                              <span>HEART PATIENT</span>
                              <i class="fa fa-quote-right"></i>
                          </div>
                      </div>
                      <div class="testimoinal-text">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusLorem
                              ipsumLorem
                              ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                              incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                      </div>
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="testimonail-body">
                      <div class="testimonnial-titles mb-20">
                          <div class="testimoinal-img">
                              <img src="img/icon/authour1.png" alt="">
                          </div>
                          <div class="autor-mata">
                              <h3><b>Smith Jhon</b></h3>
                              <span>HEART PATIENT</span>
                              <i class="fa fa-quote-right"></i>
                          </div>
                      </div>
                      <div class="testimoinal-text">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusLorem
                              ipsumLorem
                              ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                              incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section id="app" class="author-down-area cua-2 pt-120 pb-85">
            <div class="container">
                <div class="row justify-content-center">
                    
                        <div class="subscription-plan  text-center">
                            <div class="subs-head">
                                <h4 class="subs-title">Plan name</h4>
                            </div>
                            <div class="subs-body">
                                <p class="subs-price"><sup>₹</sup>200<span>/ month</span></p>
                                <ul class="subs-li">
                                    <li>Feature 1</li>
                                    <li>Feature 2</li>
                                    <li>Feature 3</li>
                                    <li>Feature 4</li>
                                    <li>Feature 5</li>
                                    <li>Feature 6</li>
                                </ul>
                            </div>
                            <div class="subs-button">
                            <a href="{{route('subscribing',1)}}"><button class="btn">Subscribe Now</button></a>
                            </div>
                        </div>
                 
                        <div class="subscription-plan  text-center">
                            <div class="subs-head">
                                <h4 class="subs-title">Plan name</h4>
                            </div>
                            <div class="subs-body">
                                <p class="subs-price"><sup>₹</sup>350<span>/ month</span></p>
                                <ul class="subs-li">
                                    <li>Feature 1</li>
                                    <li>Feature 2</li>
                                    <li>Feature 3</li>
                                    <li>Feature 4</li>
                                    <li>Feature 5</li>
                                    <li>Feature 6</li>
                                </ul>
                            </div>
                            <div class="subs-button">
                                <a href="{{route('subscribing',2)}}"><button class="btn">Subscribe Now</button></a>
                            </div>
                        </div>
                   
                </div>
            </div>
        </section>
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