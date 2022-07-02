@extends('layouts.frontend.frontend',['activeClass' => 'index',])
@section('frontend_content')

<section id="main-blog-section" class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <div id="breadcrumbs" style="padding:5px 0">
                    <span><a href="/">Home</a></span>
                    <span><a href="/packages">Dashboard</a></span>
                    <span>Welcome {{auth()->user()->name}}</span>
                </div>
            </div>
            <div Class="col-lg-1">
                @auth()
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
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
                            <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JKoNpD0RtKPM5l" async> </script> </form>
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
                            <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JKoNpD0RtKPM5l" async> </script> </form>
                            </div>
                        </div>
                   
                </div>
            </div>
        </section>


@endsection
@push('js')

@endpush

