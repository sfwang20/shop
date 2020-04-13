<header class="l-header">
  <div class="l-navbar l-navbar_t-light l-navbar_expand js-navbar-sticky">
    <div class="container-fluid">
      <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

        <!--logo start-->
        <a href="index.html" class="logo-brand">
          <img class="retina" src="/assets/img/logo.png" alt="Massive">
        </a>
        <!--logo end-->

        <!--mega menu start-->
        <ul class="menuzord-menu menuzord-right c-nav_s-standard">
          <li class="@if(request()->is('/')) active @endif"><a href="/">Home</a></li>
          <li class="@if(request()->is('products')) active @endif"><a href="/products">Shop</a></li>

          <li class="nav-divider" aria-hidden="true"><a href="javascript:void(0)">|</a></li>

          <li class="cart-info">
            <a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i></a>
            <div class="megamenu megamenu-quarter-width ">
              <div class="megamenu-row">
                <div class="col12">

                  <!--cart-->
                  <table class="table cart-table-list table-responsive">

                    <tr>
                      <td></td>
                      <td></td>
                      <td>
                        <a onclick="" class="close">
                          <img src="/assets/img/product/close.png" alt="" />
                        </a>
                      </td>
                    </tr>

                  </table>

                  <div class="total-cart pull-right">
                    <ul>
                      <li><span>Total </span>  <span></span>
                      </li>
                    </ul>
                  </div>
                  <div class="s-cart-btn pull-right">
                    <a href="/carts" class="btn btn-small btn-theme-color"> View cart</a>
                    <a href="#" class="btn btn-small btn-dark-solid"> Checkout</a>
                  </div>
                  <!--cart-->

                </div>
              </div>
            </div>
          </li>

          <li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
          </li>
        </ul>
        <!--mega menu end-->

      </nav>
    </div>
  </div>

</header>
