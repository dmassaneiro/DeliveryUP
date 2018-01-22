<?php
include_once './session.php';;
?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <head>
        <!-- Site Title-->
        <title>Home</title>
        <?php include './head.php'; ?>
    </head>
    <body>
        <!-- Page-->
        <div class="page text-center">
            <!-- Page Header-->
            <?php include './menu.php'; ?>
            <!-- Page Content-->
            <main class="page-content">

                <section class="section-50 section-sm-100">
                    <div class="shell text-center">
                        <div class="range range-md-center">
                            <div class="cell-md-10 cell-lg-7">
                                <h3>Ofertas da Semana</h3>
                                <!--<p>Food Delivery is the best way to find local restaurants that deliver to you or quickly order food online . Whether looking for breakfast, lunch, dinner or late night snack, we have it all.</p>-->
                            </div>
                        </div>
                    </div>
                    <div data-arrows="true" data-loop="true" data-dots="false" data-swipe="false" data-autoplay="false" data-items="1" data-lg-items="3" data-xl-items="3" data-center-mode="true" data-center-padding="0.0" class="slick-slider carousel-center-mode offset-top-30">
                        <div class="item">
                            <div class="slick-slide-inner"><a href="#" class="deals-block deals-block-variant-1"><img src="images/index-1-1008x585.jpg" alt="" width="1008" height="585" class="img-responsive"/>
                                    <div class="caption">
                                        <div class="title-wrap text-xs-left">
                                            <div class="unit unit-xs-horizontal unit-spacing-xxs unit-middle">
                                                <div class="unit-left">
                                                    <h1>2</h1>
                                                </div>
                                                <div class="unit-body">
                                                    <h4 class="text-italic"><span class="text-white">Burgers</span><span class="reveal-block">at the price of one</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-block"><span>$</span><span>17</span><span>99</span></div>
                                    </div></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slick-slide-inner"><a href="#" class="deals-block deals-block-variant-1"><img src="images/index-2-1008x585.jpg" alt="" width="1008" height="585" class="img-responsive"/>
                                    <div class="caption">
                                        <div class="title-wrap">
                                            <h2 class="text-italic">Mexican Day</h2>
                                            <div class="title-desc">
                                                <p class="big text-uppercase">Every Friday</p>
                                            </div>
                                        </div>
                                        <div class="price-block"><span>$</span><span>14</span><span>99</span></div>
                                    </div></a></div>
                        </div>
                        <div class="item">
                            <div class="slick-slide-inner"><a href="#" class="deals-block deals-block-variant-1"><img src="images/index-3-1008x585.jpg" alt="" width="1008" height="585" class="img-responsive"/>
                                    <div class="caption">
                                        <div class="title-wrap">
                                            <h2 class="text-italic">Fresh menu</h2>
                                            <div class="title-desc">
                                                <p class="big text-uppercase">Burger + Salad + Drink</p>
                                            </div>
                                        </div>
                                        <div class="price-block"><span>$</span><span>14</span><span>99</span></div>
                                    </div></a></div>
                        </div>
                        <div class="item">
                            <div class="slick-slide-inner"><a href="#" class="deals-block deals-block-variant-1"><img src="images/index-3-1008x585.jpg" alt="" width="1008" height="585" class="img-responsive"/>
                                    <div class="caption">
                                        <div class="title-wrap">
                                            <h2 class="text-italic">Fresh menu</h2>
                                            <div class="title-desc">
                                                <p class="big text-uppercase">Burger + Salad + Drink</p>
                                            </div>
                                        </div>
                                        <div class="price-block"><span>$</span><span>14</span><span>99</span></div>
                                    </div></a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="text-left section-50 section-sm-top-100 section-sm-bottom-100">
                    <div class="shell">
                        <form action="search-results.html" method="GET" class="form-search rd-search">
                            <div class="form-group">
                                <label for="blog-sidebar-2-form-search-widget" class="form-label form-search-label form-label-sm">Pesquisar Empresa</label>
                                <input id="blog-sidebar-2-form-search-widget" type="text" name="s" autocomplete="off" class="form-search-input form-control "/>
                            </div>
                            <button type="submit" class="form-search-submit"><span class="mdi mdi-magnify"></span></button>
                        </form>
                    </div>
                </section>
                <section class="section-50 section-sm-top-90 section-sm-bottom-100 bg-image-6">
                    <div class="shell text-center">
                        <h3>Mais Procurados</h3>
                        <div class="range range-xs-center">
                            <div class="cell-sm-6 cell-md-4">
                                <div class="menu-variant-1"><img src="images/sushi-7-310x260.png" alt="" width="310" height="260" class="img-responsive reveal-inline-block"/>
                                    <div class="caption">
                                        <h5 class="title"><a href="menu-single.html" class="link-white">Sushi</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
                                <div class="menu-variant-1"><img src="images/burger-7-310x260.png" alt="" width="310" height="260" class="img-responsive reveal-inline-block"/>
                                    <div class="caption">
                                        <h5 class="title"><a href="menu-single.html" class="link-white">Burgers</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">
                                <div class="menu-variant-1"><img src="images/pizza-7-310x260.png" alt="" width="310" height="260" class="img-responsive reveal-inline-block"/>
                                    <div class="caption">
                                        <h5 class="title"><a href="menu-single.html" class="link-white">Pizzas</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-sm-6 cell-md-4 offset-top-50">
                                <div class="menu-variant-1"><img src="images/barbecue-7-310x260.png" alt="" width="310" height="260" class="img-responsive reveal-inline-block"/>
                                    <div class="caption">
                                        <h5 class="title"><a href="menu-single.html" class="link-white">Barbecue</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-sm-6 cell-md-4 offset-top-50">
                                <div class="menu-variant-1"><img src="images/sandwich-7-310x260.png" alt="" width="310" height="260" class="img-responsive reveal-inline-block"/>
                                    <div class="caption">
                                        <h5 class="title"><a href="menu-single.html" class="link-white">Sandwiches</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-sm-6 cell-md-4 offset-top-50">
                                <div class="menu-variant-1"><img src="images/mexican-7-310x260.png" alt="" width="310" height="260" class="img-responsive reveal-inline-block"/>
                                    <div class="caption">
                                        <h5 class="title"><a href="menu-single.html" class="link-white">Tacos</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section-50 section-sm-100 bg-image-7">
                    <div class="shell text-center">
                        <div class="range range-xs-center range-sm-right range-condensed">
                            <div class="cell-sm-5">
                                <div class="offer-block text-left view-animate fadeInUpBigger delay-04">
                                    <h3 class="text-white">Best Offer</h3>
                                    <h5 class="text-secondary text-italic font-secondary">Greek Pizza</h5>
                                    <div class="price">
                                        <div class="group-sm"><span class="price-new text-primary">$29.00</span>
                                            <del class="price-old h6 text-gray-light">$60.00</del>
                                        </div>
                                    </div>
                                    <p>Enjoy the most popular pizza of Food Delivery.</p><a href="menu-classic.html" class="btn btn-md btn-primary btn-shape-circle offset-top-15">order online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section-50 section-sm-100">
                    <div class="shell">
                        <div class="range range-xs-center">
                            <div class="cell-sm-10 cell-md-8">
                                <div class="testimonials-wrap">
                                    <!-- Slick Carousel-->
                                    <div data-arrows="false" data-loop="true" data-dots="true" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel" class="slick-slider carousel-parent offset-top-40">
                                        <div class="item">
                                            <blockquote class="quote-classic">
                                                <h6>Quality Delivery</h6>
                                                <p class="text-base">
                                                    <q>I am very grateful to have this service in our city. You make dinner a no-brainer on those crazy/lazy nights. I also wanted you to know that everyone of the delivery people have been the nicest and most polite people.</q>
                                                </p>
                                                <p>
                                                    <cite class="text-bold">By Jane Lee</cite>
                                                </p>
                                                <div class="quote-rating">
                                                    <ul class="list-inline list-inline-xs">
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                    </ul>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="item">
                                            <blockquote class="quote-classic">
                                                <h6>The Best Food Delivery Service</h6>
                                                <p class="text-base">
                                                    <q>I’d like to acknowledge Food Delivery for their pleasant help today when I called to place a last minute order for a meeting. I struggled with what to order and your team helped with selection and made everything easy for me.</q>
                                                </p>
                                                <p>
                                                    <cite class="text-bold">By Emily Wilson</cite>
                                                </p>
                                                <div class="quote-rating">
                                                    <ul class="list-inline list-inline-xs">
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                    </ul>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="item">
                                            <blockquote class="quote-classic">
                                                <h6>Perfect and Tasty Desserts</h6>
                                                <p class="text-base">
                                                    <q>Thanks so much for the gorgeous strawberry cake and desserts on Saturday. We loved  that cake - so beautiful and yummy!</q>
                                                </p>
                                                <p>
                                                    <cite class="text-bold">By Jane Perez</cite>
                                                </p>
                                                <div class="quote-rating">
                                                    <ul class="list-inline list-inline-xs">
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                    </ul>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="item">
                                            <blockquote class="quote-classic">
                                                <h6>High Quality Service</h6>
                                                <p class="text-base">
                                                    <q>Your female employee on the phone was so kind yesterday! She took my order, got it exactly correct; and my food arrived. The delivery man was also very good. The level of service wa also outstanding, thank you!</q>
                                                </p>
                                                <p>
                                                    <cite class="text-bold">By John Smith</cite>
                                                </p>
                                                <div class="quote-rating">
                                                    <ul class="list-inline list-inline-xs">
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                        <li><span class="icon mdi mdi-star text-primary-lighter"></span></li>
                                                    </ul>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-items="1" data-xs-items="1" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-slide-to-scroll="1" data-center-mode="true" data-center-padding="0" class="slick-slider">
                                        <div class="item"><img src="images/index-testimonials-1-191x191.jpg" alt="" width="191" height="191"/>
                                        </div>
                                        <div class="item"><img src="images/index-testimonials-3-191x191.jpg" alt="" width="191" height="191"/>
                                        </div>
                                        <div class="item"><img src="images/index-testimonials-4-191x191.jpg" alt="" width="191" height="191"/>
                                        </div>
                                        <div class="item"><img src="images/index-testimonials-2-191x191.jpg" alt="" width="191" height="191"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <!-- RD Google Map-->
                    <div data-zoom="15" data-y="40.643180" data-x="-73.9874068" data-styles="" class="rd-google-map rd-google-map__model">
                        <ul class="map_locations">
                            <li data-y="40.643180" data-x="-73.9874068">
                                <p><span class="icon"><img src="images/gmap-24x34.png" alt="" width="24" height="34"/></span>267 Park Avenue New York, NY 90210</p>
                            </li>
                        </ul>
                    </div>
                </section>
            </main>
            <!-- Page Footer-->
            <?php include './footer.php'; ?>
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
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-7078796-5']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();</script>
    </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>