<footer class="new_footer_area bg_color shadowBox">
  <div class="parentBottom">
      <div class="wave"></div>
  </div>
  <div class="new_footer_top">
      <div class="container" style="margin-bottom: 85px">
          <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s"
                      style="
                          visibility: visible;
                          animation-delay: 0.2s;
                          animation-name: fadeInLeft;
                        ">
                      <h3 class="f-title f_600 t_color f_size_18">Bahok Courier</h3>
                      <div class="footer-logo mb-25">
                          <a href="index.html"><img class="" src="{{ App\Helper\AdditionalResources::appInfo('logo') }}" alt=""
                                  style="width: 100px; height: auto" /></a>
                          <br />
                          <br />
                          <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s"
                              style="
                                  visibility: visible;
                                  animation-delay: 0.4s;
                                  animation-name: fadeInLeft;
                                ">
                              <ul class="list-unstyled f_list">
                                  <li><a href="#">Newsletter</a></li>
                              </ul>
                              <div>
                                  <form>
                                      <div class="col-sm-12 mr-2 mb-2" style="padding-left: 0px; padding-right: 0px">
                                          <input
                                              style="
                                                padding: 10px;
                                                border-radius: 4px;
                                                height: 44px;
                                                width: 100%;
                                              "
                                              class="effect-8" type="text" placeholder="Enter Your Email" />
                                          <span class="focus-border">
                                              <i></i>
                                          </span>
                                      </div>
                                      <button type="button" class="btn btn-primary">
                                          Submit
                                      </button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s"
                      style="
                        visibility: visible;
                        animation-delay: 0.4s;
                        animation-name: fadeInLeft;
                      ">
                      <h3 class="f-title f_600 t_color f_size_18">Services</h3>
                      <ul class="list-unstyled f_list">
                        
                            @foreach (App\Models\AboutFaq::select('id', 'title')->where("status", true)->orderBy("serial", "asc")->get() as $faq)
                                <li><a href="{{ route('frontend.about') }}">{{ $faq->title }}</a></li>
                            @endforeach
                            
                      </ul>
                  </div>
              </div>
                <div class="col-lg-3 col-md-6">
                  <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s"
                      style="
                        visibility: visible;
                        animation-delay: 0.4s;
                        animation-name: fadeInLeft;
                      ">
                      <h3 class="f-title f_600 t_color f_size_18">Services</h3>
                      <ul class="list-unstyled f_list">
                          
                        @foreach (App\Models\ServicesTag::where("status", true)->orderBy("serial", "asc")->get() as $tag)
                            <li><a href="#">{{ $tag->title }}</a></li>
                        @endforeach
                        
                      </ul>
                  </div>
              </div> 
              <div class="col-lg-2 col-md-6">
                  <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s"
                      style="
                        visibility: visible;
                        animation-delay: 0.6s;
                        animation-name: fadeInLeft;
                      ">
                      <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                      <ul class="list-unstyled f_list">
                          <li><a href="{{ route('frontend.faq') }}">FAQ</a></li>
                          <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                          <li><a href="{{ route('frontend.privacy') }}">Privacy Policy</a></li>
                          <li><a href="{{ route('frontend.terms_and_conditions') }}">Terms & Condition</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer_bg">
          <div class="footer_bg_one"></div>
          <div class="footer_bg_two"></div>
      </div>
  </div>
</footer>