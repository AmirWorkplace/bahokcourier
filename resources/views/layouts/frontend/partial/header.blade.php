
<header>
  <div class="header-area header-transparent">
      <div class="main-header">
          <div class="header-bottom header-sticky">
              <div class="container-fluid">
                  <div class="row align-items-center">
                      <!-- Logo -->
                      <div class="col-xl-1 col-lg-1">
                          <div class="logo">
                              <a href="{{ route('frontend.home') }}">
                                <img
                                  style="
                                    height: 80px;
                                    width: auto;
                                    padding: 5px;
                                    background: #fff;
                                    border-radius: 50%;
                                  "
                                    src="{{ App\Helper\AdditionalResources::appInfo('logo') }}" 
                                    alt="{{ App\Helper\AdditionalResources::appInfo('title') }}" 
                                    />
                                </a>
                          </div>
                      </div>
                      <div class="col-xl-11 col-lg-11">
                          <div class="menu-wrapper d-flex align-items-center justify-content-end">
                              <!-- Main-menu -->
                              <div class="main-menu d-none d-lg-block">
                                  <nav class="">
                                      <ul id="navigation">
                                          <li class="active">
                                              <a href="{{ route('frontend.home') }}"><button class="btn-4">
                                                      <span>Home</span>
                                                  </button></a>
                                          </li>
                                          <li>
                                              <a href="{{ route('frontend.about') }}"><button class="btn-4">
                                                      <span>About</span>
                                                  </button></a>
                                          </li>
                                          <!--<li><a href="blog.php"><button class="btn-4"><span>Blog</span></button></a></li>-->
                                          <li>
                                              <a href="{{ route('frontend.faq') }}"><button class="btn-4">
                                                      <span>FAQ</span>
                                                  </button></a>
                                          </li>
                                          <li>
                                              <a href="{{ route('frontend.contact') }}"><button class="btn-4">
                                                      <span>Contact</span>
                                                  </button></a>
                                          </li>
                                          <li>
                                              <a href="#serviceSection"><button class="btn-4">
                                                      <span>Services</span>
                                                  </button></a>
                                          </li>
                                          <li class="button-header">
                                              <a href="#/login" class="btn">LOG IN</a>
                                          </li>
                                          <li class="button-header">
                                              <a href="{{ route('frontend.merchant_register') }}" class="btn">Become a Merchant</a>
                                          </li>
                                      </ul>
                                  </nav>
                              </div>
                          </div>
                      </div>
                      <!-- Mobile Menu -->
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</header>