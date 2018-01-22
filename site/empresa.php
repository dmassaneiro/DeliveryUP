
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <head>
        <!-- Site Title-->
        <title>Empresas</title>
        <?php include './head.php'; ?>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
        <script>
            jQuery(function ($) {

                $("#cnpj").mask("99.999.999/9999-99");
                $("#celular").mask("(99) 99999-9999");
                $("#celular2").mask("(99) 99999-9999");
                $("#telefone").mask("(99) 9999-9999");

            });
        </script>

    </head>
    <body>
        <!-- Page-->
        <div class="page text-center">
            <!-- Page Header-->
            <header class="page-head">
                <!-- RD Navbar-->
                <?php include_once './menu.php'; ?>
            </header>
            <!-- Page Content-->
            <main class="page-content">
                <!-- Breadcrumbs & Page title-->
                <section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
                    <div class="shell shell-fluid">
                        <div class="range range-condensed">
                            <div class="cell-xs-12 cell-xl-preffix-1 cell-xl-11">
                                <p class="h3 text-white">Empresas</p>
                                <p class="h3 text-white"></p>
                                <div class="form-group">
                                    <a href="empresa-login.php"><button class="btn btn-primary btn-sm">Já sou Cadastrado</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-center text-sm-left section-50 section-sm-top-100 section-sm-bottom-100">
                    <div class="shell">
                        <div class="range range-xs-center">
                            <div class="cell-md-8">
                                <h4 class="font-default text-center">Venha ser Nosso Parceiro</h4>
                                <p class="text-center">Voçê empresario ainda não faz parte do time DeliveryUp, faça seu cadastro e começe a vender através dos pedidos :D</p>
                                <!-- RD Mailform-->
                                <form data-form-output="form-output-global"  method="post" action="../app/controll/empresa.php" class="rd-mailform form-contact-line text-left offset-top-35">
                                    <div class="form-inline-flex">
                                        <div class="form-group">
                                            <label for="contact-name" class="form-label form-label-outside">Nome da Empresa</label>
                                            <input id="contact-name" type="text" placeholder="Digite o nome da empresa" name="nome"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="contact-phone" class="form-label form-label-outside">Telefone</label>
                                            <input id="telefone" type="text" placeholder="Telefone para contato" name="telefone1"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="offset-top-15">
                                        <div class="form-inline-flex">
                                            <div class="form-group">
                                                <label class="form-label form-label-outside">Cnpj</label>
                                                <input id="cnpj" type="text" placeholder="Seu Cnpj se possuir" name="cnpj"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label form-label-outside">E-mail</label>
                                                <input type="email" placeholder="E-mail para contato" name="email"  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-top-15">
                                        <div class="form-inline-flex">
                                            <div class="form-group">
                                                <label class="form-label form-label-outside">Anos no Mercado</label>
                                                <input type="number" placeholder="Anos no mercado" name="anos" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label form-label-outside">Senha</label>
                                                <input type="password" placeholder="Sua Senha" name="senha"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label form-label-outside">Confirme a Senha</label>
                                                <input type="password" placeholder="Confirme" name="senha2"  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-top-15">
                                        <div class="form-inline-flex">

                                            <div class="form-group">
                                                <button type="submit" name="enviar" class="btn btn-primary btn-fullwidth">Enviar Dados</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="cell-md-4 offset-top-50 offset-md-top-0 text-left">
                                <aside class="inset-lg-left-70">
                                    <div class="range">
                                        <div class="cell-xs-6 cell-md-12">
                                            <div class="h6 text-uppercase">Follow us</div>
                                            <div class="text-subline offset-top-15"></div>
                                            <div class="offset-top-25">
                                                <ul class="list-inline">
                                                    <li><a href="#" class="icon icon-xs link-gray-light fa-facebook"></a></li>
                                                    <li><a href="#" class="icon icon-xs link-gray-light fa-twitter"></a></li>
                                                    <li><a href="#" class="icon icon-xs link-gray-light fa-google-plus"></a></li>
                                                    <li><a href="#" class="icon icon-xs link-gray-light fa-instagram"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cell-xs-6 cell-md-12 offset-top-50 offset-xs-top-0 offset-md-top-50">
                                            <div class="h6 text-uppercase">Phone</div>
                                            <div class="text-subline offset-top-15"></div>
                                            <div class="offset-top-25">
                                                <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                    <div class="unit-left"><span class="icon icon-xs icon-primary text-middle mdi mdi-phone"></span></div>
                                                    <div class="unit-body"><a href="callto:#" class="link-default">1-800-1234-567</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cell-xs-6 cell-md-12 offset-top-50">
                                            <div class="h6 text-uppercase">Address</div>
                                            <div class="text-subline offset-top-15"></div>
                                            <div class="offset-top-25 unit unit-horizontal unit-spacing-xs">
                                                <div class="unit-left"><span class="icon icon-xs icon-primary text-middle mdi mdi-map-marker"></span></div>
                                                <div class="unit-body"><a href="#" class="link-default">267 Park Avenue New York, NY 90210</a></div>
                                            </div>
                                        </div>
                                        <div class="cell-xs-6 cell-md-12 offset-top-50">
                                            <div class="h6 text-uppercase">Opening Hours</div>
                                            <div class="text-subline offset-top-15"></div>
                                            <div class="offset-top-25 unit unit-horizontal unit-spacing-xs">
                                                <div class="unit-left"><span class="icon icon-xs icon-primary mdi mdi-clock text-middle"></span></div>
                                                <div class="unit-body"><span class="text-dark inset-left-5">9:00am-23:00pm</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
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

    </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>