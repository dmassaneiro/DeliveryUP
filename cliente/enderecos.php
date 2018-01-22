<?php
include_once './session.php';
include_once './AutoLoad.php';

$userdao = new UsuarioDAO();
$dados = $userdao->BuscarDados($user_id);
?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <head>
        <!-- Site Title-->
        <title>Endereços</title>
        <?php include './head.php'; ?>
<!--        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/cep.js"></script>
        <script type="text/javascript" src="js/jquery.maskedinput.js"></script>-->
        <!--<script type="text/javascript" src="js/cep.js"></script>-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

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
                                <p class="h3 text-white">Meus Endereços</p>
                               
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-center text-sm-left section-50 section-sm-top-100 section-sm-bottom-100">
                    <div class="shell">
                        <div class="range range-xs-center">
                            <div class="cell-md-8">
                                <h4 class="font-default text-center">Adicionar Endereço</h4>

                                <form data-form-output="form-output-global" data-form-type="contact" method="post" action="../app/controll/endereco.php" class="rd-mailform form-contact-line text-left offset-top-35">
                                    <div class="form-inline-flex">
                                        <div class="form-group">
                                            <label for="contact-name" class="form-label form-label-outside">CEP</label>
                                            <input id="cep" type="text" placeholder="Digite seu Cep" name="cep"  class="form-control" tabindex="1"  >
                                        </div>
                                        <div class="form-group">
                                            <label for="contact-name" class="form-label form-label-outside">Cidade</label>
                                            <input id="cidade" type="text" placeholder="Digite sua Cidade" name="cidade"  class="form-control" readonly="">
                                        </div>
                                        <div class="form-group">
                                            <label for="contact-name" class="form-label form-label-outside">Estado UF</label>
                                            <input id="uf" type="text" placeholder="Digite seu Estado"  name="uf" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-inline-flex offset-top-15">
                                        <div class="form-group">
                                            <label class="form-label form-label-outside">Endereço</label>
                                            <input id="rua" type="text" placeholder="Digite o Endereço ex:rua, avenida etc." name="endereco"  class="form-control" readonly="">
                                        </div>

                                        <div class="form-group">
                                            <label for="contact-phone" class="form-label form-label-outside">Bairro</label>
                                            <input id="bairro" type="text" placeholder="Digite o Bairro" name="bairro" value="" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-inline-flex offset-top-15">
                                        <div class="form-group">
                                            <label for="contact-phone" class="form-label form-label-outside">Número</label>
                                            <input id="contact-phone" type="number" placeholder="Numero " name="numero" value=""class="form-control" tabindex="2">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label form-label-outside">Complemento</label>
                                            <input type="text" placeholder="Complemento"  name="complemento" value=""  class="form-control" tabindex="3">
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
                                <section class="section-50 section-sm-100">
                                    <div class="shell">
                                        <div class="range">
                                            <div class="cell-xs-12">
                                                <?php
                                                $enddao = new EnderecoDAO();
                                                $contador = $enddao->ContaEndereco($user_id);
                                                ?>
                                                <h4 class="text-left font-default">Você Possui <?= $contador->getId() ?> Endereço(s)</h4>
                                                <div class="table-responsive offset-top-10">
                                                    <table class="table table-shopping-cart">
                                                        <tbody>
                                                            <?php
//                                                            $enddao = new EnderecoDAO();
                                                            foreach ($enddao->BuscarTodos($user_id) as $e) {
                                                                ?>
                                                                <tr>

                                                                    <td style="width: 1px">
                                                                        <div class="inset-left-20">
                                                                            <div class="product-image"><img src="images/loc.png" width="60" height="50" alt=""></div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="min-width: 340px;">
                                                                        <div class="inset-left-30 text-left"><span class="product-brand text-italic">Cep: <?= $e->getCep() ?> &nbsp; Cidade: <?= $e->getCidade() ?>&nbsp; Estado: <?= $e->getEstado() ?></span>
                                                                            <div class="h5 text-sbold offset-top-0"><a href="shop-single.html" class="link-default">Endereço: <?= $e->getRua() ?></a></div>
                                                                            <div class="h5 text-sbold offset-top-0"><a href="shop-single.html" class="link-default">Bairro: <?= $e->getBairro() ?></a></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="inset-left-20"><span class="h5 text-sbold">N°<?= $e->getNumero() ?></span></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="inset-left-20"><a href="#" class="icon icon-sm mdi mdi-window-close link-gray-lightest"></a></div>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>
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
        <!-- Java script-->
        <script src="js/core.min.js"></script>
        <script type="text/javascript" >

            $(document).ready(function () {

                function limpa_formulário_cep() {
                    // Limpa valores do formulário de cep.
                    $("#rua").val("");
                    $("#bairro").val("");
                    $("#cidade").val("");
                    $("#uf").val("");
                    $("#ibge").val("");
                }

                //Quando o campo cep perde o foco.
                $("#cep").blur(function () {

                    //Nova variável "cep" somente com dígitos.
                    var cep = $(this).val().replace(/\D/g, '');

                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if (validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.
                            $("#rua").val("...");
                            $("#bairro").val("...");
                            $("#cidade").val("...");
                            $("#uf").val("...");
                            $("#ibge").val("...");

                            //Consulta o webservice viacep.com.br/
                            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                                if (!("erro" in dados)) {
                                    //Atualiza os campos com os valores da consulta.
                                    $("#rua").val(dados.logradouro);
                                    $("#bairro").val(dados.bairro);
                                    $("#cidade").val(dados.localidade);
                                    $("#uf").val(dados.uf);
                                    $("#ibge").val(dados.ibge);
                                } //end if.
                                else {
                                    //CEP pesquisado não foi encontrado.
                                    limpa_formulário_cep();
                                    alert("CEP não encontrado.");
                                }
                            });
                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulário_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulário_cep();
                    }
                });
            });

        </script>
        <script>

        </script>
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