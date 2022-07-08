
<section id="packages" class="author-down-area cua-2 pt-50">
            <div class="container">
                <div class="row justify-content-center">
                        <div class="section-titles service-titles-heading service-titles-heading-2 mb-60 text-center">
                            <h1 class="blog-title-with-border">Our Packages</h1>
                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusLorem ipsumLorem
                                ipsum dolor sit amet, consectetur adipisicing elit,</p>
                        </div>
                        @foreach ($packages as $package)
                            <div class="subscription-plan  text-center position-relative">
                            @if($package->any_offer != "na" && $package->any_offer != "no" && !empty($package->any_offer))
                                <div class="offer-area">
                                    <div class="subs-offer">{{$package->any_offer}}</div>
                                </div>
                            @endif
                                <div class="subs-head">
                                    <h4 class="subs-title">{{$package->package_name}}</h4>
                                </div>
                                <div class="subs-body">
                                    <p class="subs-price"><sup>₹</sup>{{$package->price}}<span>/ {{$package->pack_validity}}</span></p>
                                    <ul class="subs-li">
                                        @foreach(json_decode($package->description)  as $feature)
                                            <li>{{$feature}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="subs-button">
                                <a href="{{route('user.subscribing',$package->id)}}"><button class="btn">Subscribe Now</button></a>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </section>
