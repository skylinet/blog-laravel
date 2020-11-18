<header id="header" class="headroom navbar-style-three">
    <div class="startp-responsive-nav">
        <div class="container">
            <div class="startp-responsive-menu">

                <div class="logo">
                    <img src="{{ asset('public/assets/image/logo-asc.png') }}" style="width:100px;">
                </div>
            </div>
        </div>
    </div>


    <div class="startp-nav">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
          <a class="navbar-brand" href="index.html"><img src="{{ asset('public/assets/image/logo-asc.png') }}" style="width:55px;" alt="logo"></a>

          <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
            <ul class="navbar-nav nav ml-auto">

              <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>

              <li class="nav-item"><a href="#" class="nav-link">Services<i data-feather="chevron-down"></i></a>
                  <ul class="dropdown_menu">
                      <li class="nav-item"><a href="about-1.html" class="nav-link">Service 1</a></li>
                      <li class="nav-item"><a href="about-2.html" class="nav-link">Service 2</a></li>
                      <li class="nav-item"><a href="about-3.html" class="nav-link">Services 3</a></li>
                  </ul>
              </li>

              <li class="nav-item"><a href="contact.html" class="nav-link">Careers</a></li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
          </div>

          <div class="others-option">
            <a href="cart.html" class="cart-wrapper-btn"><i data-feather="shopping-cart"></i><span>0</span></a>
            <a href="#" class="btn btn-light">Send Resume</a>
          </div>
        </nav>
      </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            {{-- <div class="container">
                <div class="option-inner">
                    <div class="others-option">
                        <a href="#" class="btn btn-gradient">Contact Us</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</header>
