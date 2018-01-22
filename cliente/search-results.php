<?php
include_once './session.php';
?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <head>
        <!-- Site Title-->
        <title>Search results</title>
        <?php include './head.php'; ?>
    </head>
    <body>
        <!-- Page-->
        <div class="page text-center">
            <!-- Page Header-->
            <?php include './menu.php'; ?>
            <!-- Page Content-->
            <main class="page-content">
                <!-- Breadcrumbs & Page title-->
                <section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
                    <div class="shell shell-fluid">
                        <div class="range range-condensed">
                            <div class="cell-xs-12 cell-xl-preffix-1 cell-xl-11">
                                <p class="h3 text-white">Pesquisar Empresas</p>
                                <ul class="breadcrumbs-custom offset-top-10">
                                    <li><a href="index.html">Home</a></li>
                                    <!--<li><a href="#">Pages</a></li>-->
                                    <li class="active">Pesquisar Empresas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-left section-50 section-sm-top-100 section-sm-bottom-100">
                    <div class="shell">
                        <!-- RD Search-->
                        <!-- RD Search Form-->
                        <form action="search-results.html" method="GET" class="form-search rd-search">
                            <div class="form-group">
                                <label for="blog-sidebar-2-form-search-widget" class="form-label form-search-label form-label-sm">Digite o Nome da Empresa que voce Procura</label>
                                <input id="blog-sidebar-2-form-search-widget" type="text" name="s" autocomplete="off" class="form-search-input form-control "/>
                            </div>
                            <button type="submit" class="form-search-submit"><span class="mdi mdi-magnify"></span></button>
                        </form>
                        <div class="toolbar-search bg-gray-lighter offset-top-40">
                            <div class="toolbar-search-item">
                                <div class="toolbar-search-inside"><span>Sort by:</span></div>
                                <div>
                                    <div class="form-group toolbar-search-name-select">
                                        <select data-placeholder="Select an option" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                            <option>Name</option>
                                            <option>Name 2</option>
                                            <option>Name 3</option>
                                            <option>Name 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="toolbar-search-inside toolbar-search-icon toolbar-search-mod"><a href="#"><span class="icon-sm text-primary mdi mdi-sort-ascending"></span></a></div>
                                <div class="toolbar-search-inside toolbar-search-icon border"><a href="#"><span class="icon-sm text-dark mdi mdi-sort-descending"></span></a></div>
                            </div>
                            <div class="toolbar-search-item">
                                <div class="toolbar-search-inside"><span class="text-primary">1-4 of 15</span></div>
                                <div class="toolbar-search-inside toolbar-search-mod">
                                    <div class="form-group text-dark toolbar-search-pager-select">
                                        <label>Show:</label>
                                        <select data-placeholder="Select an option" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                                            <option>4</option>
                                            <option>12</option>
                                            <option>18</option>
                                            <option>24</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rd-search-results offset-top-40 offset-sm-top-60"></div>
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
                <br>
                <br>

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
    </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>