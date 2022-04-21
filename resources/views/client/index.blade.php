@extends('layouts.frontend.frontend',['activeClass' => 'index',])
@section('frontend_content')
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      @auth()
      <p>Welcome {{auth()->user()->name}}</p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
        @endauth
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

