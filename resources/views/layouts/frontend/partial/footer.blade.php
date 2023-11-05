<style>
    .social-networking {
        margin-top: 12px;
    }

    .social-networking a i {
        transition: 0.5s;
        font-size: 26px;
        color: #000;
        margin-right: 10px;
    }

    .social-networking a i:hover {
        color: #ce150f;
    }
</style>

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
                      <h3 class="f-title f_600 t_color f_size_18">{{ App\Helper\AdditionalResources::appInfo('title') }} Courier</h3>
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
                                  <li><a >Social Networking</a></li>
                              </ul>
                              <div class="social-networking"> 
                                <a href="{{ App\Helper\AdditionalResources::appInfo('facebook') }}">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="{{ App\Helper\AdditionalResources::appInfo('youtube') }}">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="{{ App\Helper\AdditionalResources::appInfo('twitter') }}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="{{ App\Helper\AdditionalResources::appInfo('linkedin') }}">
                                    <i class="fab fa-linkedin"></i>
                                </a>
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

                        <li><a href="{{ route('frontend.marketing_agent_register') }}">Marketing Agent</a></li>
                        <li><a href="{{ route('frontend.delivery_man_register') }}">Become a Delivery Man</a></li>
                        <li><a href="{{ route('frontend.delivery_agent_register') }}">Become a Delivery Agent</a></li>
                        <li><a href="{{ route('frontend.merchant_register') }}">Become a Merchant</a></li>
                        <li><a href="#coverageArea">Coverage Area</a></li>
                        
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
                          <li><a target="_blank" href="{{ route('frontend.faq') }}">FAQ</a></li>
                          <li><a target="_blank" href="{{ route('frontend.about') }}">About Us</a></li>
                          <li><a target="_blank" href="{{ route('frontend.privacy') }}">Privacy Policy</a></li>
                          <li><a target="_blank" href="{{ route('frontend.terms_and_conditions') }}">Terms & Condition</a></li>
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