<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>{{@$gd->website_title}}</title>
    <link rel="icon" href="{{asset(@$gd->favicon)}}" type="image/png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/helper.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}">
  </head>
  <body id="body">
   
    <!-- navbar -->
    <nav id="navbar-main" class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('frontend.index')}}"><img src="{{asset(@$gd->website_logo)}}" class="img-fluid" alt="{{@$gd->website_title}} logo" width="250px" height="70px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav  mb-2 mb-lg-0 "> 
          @if(!empty($menus))
            @foreach($menus as $menu) 
              @if(@$menu->name == 'primary_menu'  && !empty($menu->data))
                @foreach(json_decode($menu->data) as $key => $link)
                  <li class="nav-item {{ (!empty($link->children)?'dropdown':'') }}">
                    <a class="nav-link {{ (!empty($link->children)?'dropdown-toggle':'') }}" id="{{ (!empty($link->children)?'navbarDropdown-'.++$key:'') }}" href="{{!empty($link->children)?'#':($link->href == '/'? $link->href : route('frontend.'.$link->href)) }}" {{ (!empty($link->children)?'role=button data-bs-toggle=dropdown aria-expanded=false':'') }}>{{$link->text}}</a>
                    @if(!empty($link->children))
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown-{{$key}}">
                      @foreach($link->children as $key => $clink)
                        <li><a class="dropdown-item" href="{{($clink->href == '/'? $clink->href : route('frontend.'.$clink->href))}}">{{$clink->text}}</a></li>
                      @endforeach
                    </ul>
                    @endif
                  </li>
                @endforeach
              @endif
            @endforeach 
          @endif
          </ul>
        </div>
      </div>
    </nav>
        @yield('frontend_content')


        <!-- footer -->
    <footer class="footer-area-2">
        <div class="cta-areas">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="news-latter-area">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="cta-area-title mb-30">
                                        <h2>Subscribe now to get company news.</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="cta-form cta-form-2">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-8">
                                            <input type="email" placeholder="Enter your email">
                                        </div>
                                        <div class="col-xl-2 col-lg-3">
                                            <button type="submit" class="btn btn-form btn-form-2">Subscribe</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-6 col-sm-4">
                    <div class="footer-widget footer-widget-2">
                        <h3>Sitemap</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Works</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-6 col-sm-4">
                    <div class="footer-widget footer-widget-2">
                          <ul id="footer-menu-1" class="footer-menu">
                          @if(!empty($menus))
                            @foreach($menus as $menu) 
                              @if(@$menu->name == 'footer_1' && !empty($menu->data))
                                @foreach(json_decode($menu->data) as $key => $link)
                                  <li ><a  href="{{!empty($link->children)?'#':($link->href == '/'? $link->href : route('frontend.'.$link->href)) }}">{{$link->text}}</a> </li>
                                @endforeach
                              @endif
                            @endforeach  
                          @endif
                      </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-6 col-sm-4 d-none d-md-block">
                    <div class="footer-widget footer-widget-2">
                        <h3>Social</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Works</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="footer-widget footer-top-b footer-widget-2 footer-w-2">
                        <h3>Get in touch</h3>
                        <address>Ansectetur adipisicing elit, sed do eiusmod tempor incididunt.</address>
                        <ul class="footer-address">
                            <li>Email: <a href="mailto:{{@$gd->website_email_primary}}">{{@$gd->website_email_primary}}</a></li>
                            <li>Contact No.: <a href="tel:{{@$gd->website_phone_primary}}">{{@$gd->website_phone_primary}}</a></li>
                            <li>Address: {{@$gd->office_location}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <div id="social-section" class="col-lg-8 display-grid align-items-center ">
                <ul id="social-link" class="link-with-title"  data-content="Follow Us">
                @if((@$gd->facebook_link != 'null' && @$gd->facebook_link != null))
                  <li><a href="{{@$gd->facebook_link}}" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
                @endif
                @if(@$gd->twitter_link != 'null' && @$gd->twitter_link != null)
                  <li><a href="{{@$gd->twitter_link}}" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                @endif
                @if(@$gd->instagram_link != 'null' && @$gd->instagram_link != null)
                  <li><a href="{{@$gd->instagram_link}}" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
                @endif
                @if(@$gd->linkedin_link != 'null' && @$gd->linkedin_link != null)
                  <li><a href="{{@$gd->linkedin_link}}" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
                @endif
                @if(@$gd->youtube_link != 'null' && @$gd->youtube_link != null)
                  <li><a href="{{@$gd->youtube_link}}" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </a></li>
                @endif
                @if(@$gd->pinterest_link != 'null' && @$gd->pinterest_link != null)
                  <li><a href="{{@$gd->pinterest_link}}" target="_blank"> <i class="fa fa-pinterest-p" aria-hidden="true"></i> </a></li>
                @endif
                </ul>
              </div>
                    <div class="copyright text-center mt-120">
                    <p>All rights reserves to <a class="" href="#" target="_blank">VSRK CAPITAL</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--JAVA-SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}" ></script>
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    @stack('js')
  </body>
</html>