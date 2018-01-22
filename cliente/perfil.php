<?php
include_once './session.php';
include_once './AutoLoad.php';

$userdao = new UsuarioDAO();
$enddao = new EnderecoDAO();
$dados = $userdao->BuscarDados($user_id);
?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <head>
        <!-- Site Title-->
        <title>Perfil</title>
        <?php include './head.php'; ?>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
        <script>
            jQuery(function ($) {

                $("#cpf").mask("999.999.999-99");
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
                <?php include './menu.php'; ?>
            </header>
            <!-- Page Content-->
            <main class="page-content">
                <!-- Breadcrumbs & Page title-->
                <section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
                    <div class="shell shell-fluid">
                        <div class="range range-condensed">
                            <div class="cell-xs-12 cell-xl-preffix-1 cell-xl-11">
                                <p class="h3 text-white">Meus Dados</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-center text-sm-left section-50 section-sm-top-100 section-sm-bottom-100">
                    <div class="shell">
                        <div class="range range-xs-center">
                            <div class="cell-md-8">
                                <h4 class="font-default text-center">Editar Dados</h4>
                                <!--<p class="text-center">We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services that we offer on a regular basis. We would be pleased to answer your questions.</p>-->
                                <!-- RD Mailform-->
                                <form data-form-output="form-output-global" data-form-type="contact" method="post" action="../app/controll/Usuario.php" class="rd-mailform form-contact-line text-left offset-top-35">
                                    <div class="form-inline-flex">
                                        <div class="form-group">
                                            <label for="contact-name" class="form-label form-label-outside">Nome Completo</label>
                                            <input id="contact-name" type="text" placeholder="Digite seu nome completo" value="<?= $dados->getNome() ?>" name="nome" data-constraints="@Required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-inline-flex offset-top-15">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside">Celular 1</label>
                                            <input id="celular" type="text" placeholder="contato" name="telefone1" value="<?= $dados->getTelefone1() ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label form-label-outside">Celular 2</label>
                                            <input id="celular2" type="text" placeholder="contato" name="telefone2" value="<?= $dados->getTelefone2() ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="contact-phone" class="form-label form-label-outside">Telefone</label>
                                            <input id="telefone" type="text" placeholder="contato" name="telefone3" value="<?= $dados->getTelefone3() ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-inline-flex offset-top-15">
                                        <div class="form-group">
                                            <label for="contact-phone" class="form-label form-label-outside">Data de Nascimento</label>
                                            <input id="contact-phone" type="date" placeholder="contato" name="nascimento" value="<?= $dados->getDataNascimento() ?>" data-constraints="@Numeric @Required" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label form-label-outside">CPF</label>
                                            <input type="text" placeholder="cpf" id="cpf" name="cpf" value="<?= $dados->getCpf() ?>"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="offset-top-15">
                                        <div class="form-inline-flex">
                                            <div class="form-group">
                                                <label for="contact-email-2" class="form-label form-label-outside">E-mail</label>
                                                <input id="contact-email-2" type="email" placeholder="Digite um email valido" name="email" value="<?= $dados->getEmail() ?>" data-constraints="@Email @Required" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact-email-2" class="form-label form-label-outside">Senha</label>
                                                <input id="contact-email-2" type="password" placeholder="Digite sua senha" name="senha" value="<?= $dados->getSenha() ?>" data-constraints="@Email @Required" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-top-15">
                                        <div class="form-inline-flex">
                                            <div class="form-group">
                                                <button type="submit" name="enviar" class="btn btn-primary btn-fullwidth">Gravar Dados</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="cell-md-4 offset-top-50 offset-md-top-0 text-left">
                                <aside class="inset-lg-left-70">
                                    <div class="range">
                                        <div class="cell-xs-6 cell-md-12">
                                            <div class="h6 text-uppercase">Meus Dados</div>
                                            <div class="text-subline offset-top-15"></div>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
<!--                                                <div class="unit-left"><span class="icon icon-xs icon-primary fa-user"></span></div>-->
                                                <div class="unit-body"><a class="link-default"><b>Nome :</b> <?= $dados->getNome() ?></a></div>
                                            </div>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
<!--                                                <div class="unit-left"><span class="icon icon-xs icon-primary text-middle  fa-user"></span></div>-->
                                                <div class="unit-body"><a class="link-default"><b>E-mail :</b> <?= $dados->getEmail() ?></a></div>
                                            </div>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
<!--                                                <div class="unit-left"><span class="icon icon-xs icon-primary text-middle fa-user"></span></div>-->
                                                <div class="unit-body"><a  class="link-default"><b>CPF :</b> <?= $dados->getCpf() ?></a></div>
                                            </div>
                                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                <div class="unit-left"><span class="icon icon-xs icon-primary  fa-star"></span></div>
                                                <div class="unit-body"><a  class="link-default"><b>Cliente desde :</b> <?= date("d/m/Y", strtotime($dados->getDataCadastro())) ?></a></div>
                                            </div>
                                        </div>
                                        <div class="cell-xs-6 cell-md-12 offset-top-50 offset-xs-top-0 offset-md-top-50">
                                            <div class="h6 text-uppercase">Telefones</div>
                                            <div class="text-subline offset-top-15"></div>
                                            <div class="offset-top-25">
                                                <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                    <div class="unit-left"><span class="icon icon-xs icon-primary  fa-phone"></span></div>
                                                    <div class="unit-body"><a class="link-default"><?= $dados->getTelefone1() ?></a></div>
                                                </div>
                                                <?php if ($dados->getTelefone2() != null) { ?>
                                                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                        <div class="unit-left"><span class="icon icon-xs icon-primary  fa-phone"></span></div>
                                                        <div class="unit-body"><a class="link-default"><?= $dados->getTelefone2() ?></a></div>
                                                    </div>
                                                <?php } ?>
                                                <?php if ($dados->getTelefone3() != null) { ?>
                                                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                        <div class="unit-left"><span class="icon icon-xs icon-primary  fa-phone"></span></div>
                                                        <div class="unit-body"><a class="link-default"><?= $dados->getTelefone3() ?></a></div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="cell-xs-6 cell-md-12 offset-top-50">
                                            <div class="h6 text-uppercase">Endereços</div>
                                            <div class="text-subline offset-top-15"></div>
                                            <?php
                                            foreach ($enddao->BuscarTodos($user_id) as $e) {
                                                ?>

                                                <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                                                    <div class="unit-left"><span class="icon icon-xs icon-primary fa-map-marker"></span></div>
                                                    <div class="unit-body"><a class="link-default"><?= $e->getRua() ?>, <?= $e->getNumero() ?> - <?= $e->getBairro() ?> / <?= $e->getCidade() ?> - <?= $e->getEstado() ?></a></div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="cell-xs-6 cell-md-12 offset-top-50">
                                            <div class="h6 text-uppercase">Ultimos Pedidos</div>
                                            <div class="text-subline offset-top-15"></div>
                                            <div class="offset-top-25 unit unit-horizontal unit-spacing-xs">
                                                <div class="unit-left"><span class="icon icon-xs icon-primary  fa-check"></span></div>
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
                                <p><span class="icon"><img src="images/loc.png" alt="" width="24" height="34"/></span>267 Park Avenue New York, NY 90210</p>
                            </li>
                        </ul>
                    </div>
                </section>
            </main>
            <!-- Page Footer-->
            <?php include './footer.php'; ?>
        </div>
        <script>
            $(document).ready(function () {
                var $seuCampoCpf = $("#cpf");
                $seuCampoCpf.mask('000.000.000-00', {reverse: true});
            });
        </script>
    </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>