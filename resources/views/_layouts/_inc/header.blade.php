    {{-- Off-Canvas Category Menu --}}
    <div class="offcanvas-container" id="shop-categories">
      <a class="account-link" href="/member">
        <div class="user-ava"><img src="/img/account/user-ava-md.jpg" alt="Happy Golucky">
        </div>
        <div class="user-info">
          <h6 class="user-name">Happy Golucky</h6><span class="text-sm text-white opacity-60">290 Reward points</span>
        </div>
      </a>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="active"><span><a href="/"><span>Home</span></a></span></li>
          <li class="has-children"><span><a href="#"><span>Destinations</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="/parks/yellowstone">Glacier</a></li>
              <li><a href="/parks/yellowstone">Grand Canyon</a></li>
              <li><a href="/parks/yellowstone">Smoky Mountain</a></li>
              <li><a href="/parks/yellowstone">Yellowstone</a></li>
              <li><a href="/parks/yellowstone">Yosemite</a></li>
              <li><a href="/parks/yellowstone">Zion</a></li>
            </ul>
          </li>
          <li><span><a href="/how">How does it Work?</a></span></li>
          <li><span><a href="/foundation">100% for Kids</a></span></li>
          <li><span><a href="/faqs">FAQs</a></span></li>
        </ul>
      </nav>
    </div>
    {{-- Off-Canvas Mobile Menu --}}
    <div class="offcanvas-container" id="mobile-menu">
      <a class="account-link" href="/member">
        <div class="user-ava"><img src="/img/account/user-ava-md.jpg" alt="Happy Golucky">
        </div>
        <div class="user-info">
          <h6 class="user-name">Happy Golucky</h6><span class="text-sm text-white opacity-60">290 Reward points</span>
        </div>
      </a>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="active"><span><a href="/"><span>Home</span></a></span></li>
          <li class="has-children"><span><a href="#"><span>Destinations</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="/parks/yellowstone">Glacier</a></li>
              <li><a href="/parks/yellowstone">Grand Canyon</a></li>
              <li><a href="/parks/yellowstone">Smoky Mountain</a></li>
              <li><a href="/parks/yellowstone">Yellowstone</a></li>
              <li><a href="/parks/yellowstone">Yosemite</a></li>
              <li><a href="/parks/yellowstone">Zion</a></li>
            </ul>
          </li>
          <li><span><a href="/how">How does it Work?</a></span></li>
          <li><span><a href="/foundation">100% for Kids</a></span></li>
          <li><span><a href="/faqs">FAQs</a></span></li>
        </ul>
      </nav>
    </div>
    {{-- Topbar --}}
    <div class="topbar">
      <div class="topbar-column">
        <a class="hidden-md-down" href="mailto:info@dimplepass.com"><i class="icon-mail"></i>&nbsp; info@dimplepass.com</a>
        <a class="hidden-md-down" href="tel:8005551212"><i class="icon-bell"></i>&nbsp; (800) 555-1212</a>
        <a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a>
        <a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a>
        <a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a>
      </div>
      <div class="topbar-column">
        <a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile app</a>
        <div class="lang-currency-switcher-wrap">
          <div class="lang-currency-switcher dropdown-toggle"><span class="language"><img alt="English" src="/img/flags/GB.png"></span><span class="currency">$ USD</span></div>
          <div class="dropdown-menu">
            <div class="currency-select">
              <select class="form-control form-control-rounded form-control-sm">
                <option value="usd">$ USD</option>
                <option value="usd">€ EUR</option>
                <option value="usd">£ UKP</option>
                <option value="usd">¥ JPY</option>
              </select>
            </div><a class="dropdown-item" href="#"><img src="/img/flags/FR.png" alt="Français">Français</a><a class="dropdown-item" href="#"><img src="/img/flags/DE.png" alt="Deutsch">Deutsch</a><a class="dropdown-item" href="#"><img src="/img/flags/IT.png" alt="Italiano">Italiano</a>
          </div>
        </div>
      </div>
    </div>
    {{-- Navbar --}}
    {{-- Remove "navbar-sticky" class to make navigation bar scrollable with the page. --}}
    <header class="navbar navbar-sticky">
      {{-- Search --}}
      <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
      </form>
      <div class="site-branding">
        <div class="inner">
          {{-- Off-Canvas Toggle (#shop-categories) --}}<a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
          {{-- Off-Canvas Toggle (#mobile-menu) --}}<a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
          {{-- Site Logo --}}<a class="site-logo" href="/"><img src="/img/logo/logo-dimple.png" alt="Dimple Pass"></a>
        </div>
      </div>
      {{-- Main Navigation --}}
      <nav class="site-menu">
        <ul>
          <li class="active"><a href="/"><span>Home</span></a></li>
          <li class="has-megamenu"><a href="/parks"><span>Destinations</span></a>
            <ul class="mega-menu">
              <li>
                <section class="promo-box" style="background-image: url(/img/destinations/yosemite-300x300.jpg);">
                  {{-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute. --}}<span class="overlay-dark" style="opacity: .45;"></span>
                  <div class="promo-box-content text-center padding-top-3x padding-bottom-3x">
                    <h4 class="text-light text-thin text-shadow">save up to $346</h4>
                    <a class="btn btn-sm btn-primary" href="/parks/yellowstone">
                      <h3 class="text-bold text-light text-shadow">Yosemite</h3>
                    </a>
                  </div>
                </section>
              </li>
              <li><span class="mega-menu-title">Top National Parks</span>
                <ul class="sub-menu">
                  <li><a href="/parks/yellowstone">Glacier</a></li>
                  <li><a href="/parks/yellowstone">Grand Teton</a></li>
                  <li><a href="/parks/yellowstone">Great Smoky Mountains</a></li>
                  <li><a href="/parks/yellowstone">Yellowstone</a></li>
                  <li><a href="/parks/yellowstone">Yosemite</a></li>
                  <li><a href="/parks"><span class="dp-primary"><strong>VIEW ALL</strong> <i class="icon-arrow-right"></i></span></a></li>
                </ul>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(/img/destinations/yellowstone-300x300.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                  <div class="promo-box-content text-center padding-top-3x padding-bottom-3x">
                    <h4 class="text-light text-thin text-shadow">save up to $289</h4>
                    <a class="btn btn-sm btn-primary" href="/parks/yellowstone">
                      <h3 class="text-bold text-light text-shadow">Yellowstone</h3>
                    </a>
                  </div>
                </section>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(/img/destinations/yosemite-300x300.jpg);">
                  {{-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute. --}}<span class="overlay-dark" style="opacity: .45;"></span>
                  <div class="promo-box-content text-center padding-top-3x padding-bottom-3x">
                    <h4 class="text-light text-thin text-shadow">save up to $346</h4>
                    <a class="btn btn-sm btn-primary" href="/parks/yellowstone">
                      <h3 class="text-bold text-light text-shadow">Yosemite</h3>
                    </a>
                  </div>
                </section>
              </li>
            </ul>
          </li>
          <li><a href="/how"><span>How does it work?</span></a></li>
          <li><a href="/foundation"><span>100% For Kids</span></a></li>
        </ul>
      </nav>
      {{-- Toolbar --}}
      <div class="toolbar">
        <div class="inner">
          <div class="tools">
            <div class="search"><i class="icon-search"></i></div>
            <div class="account"><a href="/member"></a><i class="icon-head"></i>
              <ul class="toolbar-dropdown">
                <li class="sub-menu-user">
                  <div class="user-ava"><img src="/img/account/user-ava-sm.jpg" alt="Happy Golucky">
                  </div>
                  <div class="user-info">
                    <h6 class="user-name">Happy Golucky</h6><span class="text-xs text-muted">290 Reward points</span>
                  </div>
                </li>
                  <li><a href="/member/edit">My Profile</a></li>
                  <li><a href="/member">My Passes</a></li>
                <li class="sub-menu-separator"></li>
                <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
              </ul>
            </div>
            <div class="cart">
              <a href="/checkout"></a>
              <i class="icon-bag"></i>
              <span class="count">2</span>
              <span class="subtotal">$52</span>
              <div class="toolbar-dropdown">
                <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="/checkout"><img src="/img/destinations/yellowstone-300x300.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="/checkout">Yellowstone</a><span class="dropdown-product-details">1 x $26</span></div>
                </div>
                <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="/checkout"><img src="/img/destinations/yosemite-300x300.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="/checkout">Yosemite</a><span class="dropdown-product-details">1 x $26</span></div>
                </div>
                <div class="toolbar-dropdown-group">
                  <div class="column"><span class="text-lg">Total:</span></div>
                  <div class="column text-right"><span class="text-lg text-medium">$52</span></div>
                </div>
                <div class="toolbar-dropdown-group">
                  {{-- <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="/checkout">View Cart</a></div> --}}
                  <div class="column"><a class="btn btn-sm btn-block btn-primary" href="/checkout">Checkout</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>