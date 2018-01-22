
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <head>
    <!-- Site Title-->
    <title>Deals</title>
   <?php include './head.php';?>
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar-->
        <?php include './menu.php';?>
      </header>
      <main class="page-content">
        <!-- Breadcrumbs & Page title-->
        <section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
          <div class="shell shell-fluid">
            <div class="range range-condensed">
              <div class="cell-xs-12 cell-xl-preffix-1 cell-xl-11">
                <p class="h3 text-white">Deals</p>
                <ul class="breadcrumbs-custom offset-top-10">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="#">Pages</a></li>
                  <li class="active">Deals</li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="text-center text-sm-left section-50 section-sm-top-100 section-sm-bottom-100 bg-image-1">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-md-7"><a href="#" class="deals-block"><img src="images/deals-01-669x484.jpg" alt="" width="669" height="484" class="img-responsive"/>
                  <div class="caption">
                    <div class="title-wrap">
                      <h4 class="text-italic">Pizza Day</h4>
                      <p>Enjoy your favorite pizza at QuickFood every Friday!</p>
                    </div>
                    <div class="price-block"><span>$</span><span>16</span><span>99</span></div>
                  </div></a>
              </div>
              <div class="cell-md-5">
                <div class="range">
                  <div class="cell-sm-12">
                    <div class="deals-block deals-block-discount deals-block-without-price">
                      <div class="caption">
                        <div class="title-wrap">
                          <h4 class="text-italic">Discount Coupon</h4>
                          <p>Enter your e-mail in the form below to receive a coupon code.</p>
                        </div>
                        <div class="discount-block"><span>-20</span></div>
                        <div class="offset-top-15">
                          <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform form-subscribe form-inline-flex-xs">
                            <div class="form-group">
                              <input placeholder="Your Email" type="email" name="email" data-constraints="@Required @Email" class="form-control"/>
                            </div>
                            <button type="submit" class="btn btn-primary btn-shape-circle">get a coupon</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cell-sm-12 offset-sm-top-30"><a href="#" class="deals-block deals-block-without-price"><img src="images/deals-05-470x227.jpg" alt="" width="470" height="227" class="img-responsive"/>
                      <div class="caption">
                        <div class="title-wrap">
                          <h4 class="text-italic">Order Online</h4>
                          <p>You can always order any of our dishes online.</p>
                        </div>
                        <div class="price-block"><span>$</span><span></span><span></span></div>
                      </div></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="range range-xs-center offset-top-30">
              <div class="cell-sm-6 cell-md-4"><a href="#" class="deals-block deals-block-small"><img src="images/deals-02-369x294.jpg" alt="" width="369" height="294" class="img-responsive"/>
                  <div class="caption">
                    <div class="title-wrap">
                      <h4 class="text-italic">Burger Menu</h4>
                      <p>Top 5 QuickFood Burgers</p>
                    </div>
                    <div class="price-block"><span>$</span><span>27</span><span>99</span></div>
                  </div></a>
              </div>
              <div class="cell-sm-6 cell-md-4"><a href="#" class="deals-block deals-block-small"><img src="images/deals-03-369x294.jpg" alt="" width="369" height="294" class="img-responsive"/>
                  <div class="caption">
                    <div class="title-wrap">
                      <h4 class="text-italic">For Vegans</h4>
                      <p>Classic Vegan Burger + Tea</p>
                    </div>
                    <div class="price-block"><span>$</span><span>14</span><span>99</span></div>
                  </div></a>
              </div>
              <div class="cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0"><a href="#" class="deals-block deals-block-small"><img src="images/deals-04-369x294.jpg" alt="" width="369" height="294" class="img-responsive"/>
                  <div class="caption">
                    <div class="title-wrap">
                      <h4 class="text-italic">Cake Specials</h4>
                      <p>Blueberry Cake + Apple Pie</p>
                    </div>
                    <div class="price-block"><span>$</span><span>1</span><span>99</span></div>
                  </div></a>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <?php include './footer.php';?>
    </div>
    <!-- Global Mailform Output-->
    <div id="form-output-global" class="snackbars"></div>
    <!-- PhotoSwipe Gallery-->
    <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
            <button title="Share" class="pswp__button pswp__button--share"></button>
            <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
            <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
          <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>