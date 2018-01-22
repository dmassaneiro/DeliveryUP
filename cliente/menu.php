<?php ?>
<header class="page-head">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap rd-navbar-default">
        <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="100px" data-lg-stick-up-offset="150px" class="rd-navbar">
            <div class="shell shell-fluid">
                <div class="rd-navbar-inner">
                    <div class="rd-navbar-nav-wrap-outer">
                        <div class="rd-navbar-aside">
                            <div class="rd-navbar-aside-content">
                                <!-- RD Navbar Panel-->
                                <div class="rd-navbar-panel rd-navbar-aside-left">
                                    <!-- RD Navbar Toggle-->
                                    <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                                    <!-- RD Navbar Brand--><a href="index.php" class="rd-navbar-brand brand">
                                        <div class="brand-logo"><img src="images/brand-232x49.png" alt="" width="232" height="49"/>
                                        </div></a>
                                </div>
                                <div class="rd-navbar-aside-right">
                                    <!-- RD Navbar Aside-->
                                    <ul class="list-links list-inline text-left">
                                        <li>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs fa-user"></span></div>
                                                <div class="unit-body">
                                                    <address class="contact-info"><a href="#" class="link-default link-xs">Usuário: <br class="visible-md visible-lg"> <?= $user_nome ?></a></address>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs  fa-envelope"></span></div>
                                                <div class="unit-body">
                                                    <address class="contact-info"><a href="callto:#" class="link-default link-xs">Email:</a><span class="reveal-block text-base link-xs"><?= $user_email ?></span></address>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <ul class="list-inline list-inline-sm">
                                                <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-instagram"></span></a></li>
                                                <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-facebook"></span></a></li>
                                                <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-twitter"></span></a></li>
                                                <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-google-plus"></span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Shop-->
                        <div class="rd-navbar-shop"><a href="shop-cart.html" class="link link-shop link-default"><span class="big text-gray-light">Meus Pedidos</span><span class="icon icon-sm mdi mdi-cart-outline" style="color:white"></span><span class="label-inline big text-white">2</span></a></div>
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <!--<li><a href="index.html">Home</a>-->
                            <li><a href="index.html">Meus Pedidos</a>
                            </li>
                            <li><a href="search-results.php">Pequisar Empresa</a>
                            </li>
                            <li><a href="#">Ofertas da Semana</a>
                                <!-- RD Navbar Dropdown-->
                                <ul class="rd-navbar-dropdown menu-img-wrap">
                                    <li class="menu-img"><a href="menu-single.html"><img src="images/menu-food-01.png" alt="" width="88" height="60"><span>Sushi</span></a></li>
                                    <li class="menu-img"><a href="menu-single.html"><img src="images/menu-food-02.png" alt="" width="88" height="60"><span>Burgers</span></a></li>
                                    <li class="menu-img"><a href="menu-single.html"><img src="images/menu-food-03.png" alt="" width="88" height="60"><span>Pizza</span></a></li>
                                    <li class="menu-img"><a href="menu-single.html"><img src="images/menu-food-04.png" alt="" width="88" height="60"><span>Barbecue</span></a></li>
                                    <li class="menu-img"><a href="menu-single.html"><img src="images/menu-food-05.png" alt="" width="88" height="60"><span>Sandwiches</span></a></li>
                                    <li class="menu-img"><a href="menu-single.html"><img src="images/menu-food-06.png" alt="" width="88" height="60"><span>Mexican</span></a></li>
                                </ul>
                            </li>

                            <!--<li><a href="#">Gallery</a>-->
                            <!-- RD Navbar Dropdown-->
                            <!--                                <ul class="rd-navbar-dropdown">
                                                                <li><a href="gallery-grid.html">Grid Gallery</a>
                                                                </li>
                                                                <li><a href="gallery-cobbles.html">Cobbles Gallery</a>
                                                                </li>
                                                                <li><a href="gallery-masonry.html">Masonry Gallery</a>
                                                                </li>
                                                                <li><a href="gallery-condensed.html">Grid without Padding</a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            <li><a href="enderecos.php">Meus Endereços</a>
                            </li>
                            <li><a href="#">Perfil</a>
                                <!-- RD Navbar Dropdown-->
                                <ul class="rd-navbar-dropdown">
                                    <li><a href="perfil.php">Dados da Conta</a>
                                    </li>
                                    <li><a href="blog-grid.html">Histórico</a>
                                    </li>
                                    <!--                                    <li><a href="blog-masonry.html">Masonry Blog</a>
                                                                        </li>
                                                                        <li><a href="blog-modern.html">Modern Blog</a>
                                                                        </li>-->
                                    <li><a href="../site/">Deslogar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="rd-navbar-aside-right">
                            <ul class="list-links list-inline text-left">
                                <li>
                                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                        <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs fa-user"></span></div>
                                        <div class="unit-body">
                                            <address class="contact-info"><a href="#" class="link-default link-xs">Usuário: <br class="visible-md visible-lg"><?= $user_nome ?></a></address>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                        <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs fa-envelope"></span></div>
                                        <div class="unit-body">
                                            <address class="contact-info"><a href="callto:#" class="link-default link-xs">Email: </a><span class="reveal-block text-base link-xs"><?= $user_email ?></span></address>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <ul class="list-inline list-inline-sm">
                                        <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-instagram"></span></a></li>
                                        <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-facebook"></span></a></li>
                                        <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-twitter"></span></a></li>
                                        <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-google-plus"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>