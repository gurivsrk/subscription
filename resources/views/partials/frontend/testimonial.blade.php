<!-- testimonail area start -->
<section id="review" class="dark-shape-area pt-120 pb-100">
      <div class="container">
          <div class="row">
              <div class="col-xl-6 col-lg-6">
                  <div class="section-titles service-titles-heading service-titles-heading-2 mb-60">
                      <span>Testimonial</span>
                      <h2>{{$testimonials_data->page_title}}</h2>
                      {!! $testimonials_data->page_content !!}
                  </div>
              </div>
          </div>
          <div class="row  row-padding activ-testimonai test-arrow">
            @foreach($testimonials as $testimonial)
              <div class="col-xl-12">
                  <div class="testimonail-body">
                      <div class="testimonnial-titles mb-20">
                          <div class="testimoinal-img">
                              <img src="{{asset($testimonial->profileImg)}}" alt="" width="50px" height="50px">
                          </div>
                          <div class="autor-mata">
                              <h3><b>{{$testimonial->name}}</b></h3>
                              <span>{{$testimonial->designation}}</span>
                              <i class="fa fa-quote-right"></i>
                          </div>
                      </div>
                      <div class="testimoinal-text">
                          {!! $testimonial->descritption !!}
                      </div>
                  </div>
              </div>
            @endforeach
          </div>
      </div>
  </section>