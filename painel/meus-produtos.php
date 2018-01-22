<?php
include_once './session.php';
include_once './AutoLoad.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <?php include './estrutura/head.php' ?>
        <script src="select2/jquery.js"></script>
        <link href="select2/select2.min.css" rel="stylesheet" />
        <script src="select2/select2.min.js"></script>

        <script>
            // retira caracteres invalidos da string
            function LimpaValor(valor, validos, tammax) {
                var result = "";
                var aux;
                for (var i = 0; i < valor.length; i++) {
                    aux = validos.indexOf(valor.substring(i, i + 1));
                    if (aux >= 0) {
                        if (result.length < tammax - 1) {
                            result += aux;
                        }
                    }
                }
                return result;
            }


            function FormataValor(campo, tammax, teclapres, decimal, ptmilhar, ptdecimal) {
                var tecla = teclapres.keyCode;
                vr = LimpaValor(campo.value, "0123456789", tammax);
                tam = vr.length;
                dec = decimal;
                if (tam < tammax && tecla != 8) {
                    tam = vr.length + 1;
                }
                if (tecla === 8) {
                    tam = tam - 1;
                }
                if (tecla === 8 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105) {
                    if (tam <= dec) {
                        campo.value = vr;
                    } else if ((tam > dec) && (tam <= dec + 3)) {
                        //alert(tam);
                        campo.value = vr.substr(0, tam - dec) + ptdecimal + vr.substr(tam - dec, tam);
                    } else if ((tam >= dec + 4) && (tam <= dec + 6)) {
                        campo.value = vr.substr(0, tam - 3 - dec) + ptmilhar + vr.substr(tam - 3 - dec, 3) + ptdecimal + vr.substr(tam - dec, 12);
                    } else if ((tam >= dec + 7) && (tam <= dec + 9)) {
                        campo.value = vr.substr(0, tam - 6 - dec) + ptmilhar + vr.substr(tam - 6 - dec, 3) + ptmilhar + vr.substr(tam - 3 - dec, 3) + ptdecimal + vr.substr(tam - dec, 12);
                    } else if ((tam >= dec + 10) && (tam <= dec + 12)) {
                        campo.value = vr.substr(0, tam - 9 - dec) + ptmilhar + vr.substr(tam - 9 - dec, 3) + ptmilhar + vr.substr(tam - 6 - dec, 3) + ptmilhar + vr.substr(tam - 3 - dec, 3) + ptdecimal + vr.substr(tam - dec, 12);
                    } else if ((tam >= dec + 13) && (tam <= dec + 15)) {
                        campo.value = vr.substr(0, tam - 12 - dec) + ptmilhar + vr.substr(tam - 12 - dec, 3) + ptmilhar + vr.substr(tam - 9 - dec, 3) + ptmilhar + vr.substr(tam - 6 - dec, 3) + ptmilhar + vr.substr(tam - 3 - dec, 3) + ptdecimal + vr.substr(tam - dec, 12);
                    } else if ((tam >= dec + 16) && (tam <= dec + 18)) {
                        campo.value = vr.substr(0, tam - 15 - dec) + ptmilhar + vr.substr(tam - 15 - dec, 3) + ptmilhar + vr.substr(tam - 12 - dec, 3) + ptmilhar + vr.substr(tam - 9 - dec, 3) + ptmilhar + vr.substr(tam - 6 - dec, 3) + ptmilhar + vr.substr(tam - 3 - dec, 3) + ptdecimal + vr.substr(tam - dec, 12);
                    } else if ((tam >= dec + 19) && (tam <= dec + 21)) {
                        campo.value = vr.substr(0, tam - 18 - dec) + ptmilhar + vr.substr(tam - 18 - dec, 3) + ptmilhar + vr.substr(tam - 15 - dec, 3) + ptmilhar + vr.substr(tam - 12 - dec, 3) + ptmilhar + vr.substr(tam - 9 - dec, 3) + ptmilhar + vr.substr(tam - 6 - dec, 3) + ptmilhar + vr.substr(tam - 3 - dec, 3) + ptdecimal + vr.substr(tam - dec, 12);
                    } else if ((tam >= dec + 22) && (tam <= dec + 24)) {
                        campo.value = vr.substr(0, tam - 21 - dec) + ptmilhar + vr.substr(tam - 21 - dec, 3) + ptmilhar + vr.substr(tam - 18 - dec, 3) + ptmilhar + vr.substr(tam - 15 - dec, 3) + ptmilhar + vr.substr(tam - 12 - dec, 3) + ptmilhar + vr.substr(tam - 9 - dec, 3) + ptmilhar + vr.substr(tam - 6 - dec, 3) + ptmilhar + vr.substr(tam - 3 - dec, 3) + ptdecimal + vr.substr(tam - dec, 12);
                    } else {
                        campo.value = vr.substr(0, tam - 24 - dec) + ptmilhar + vr.substr(tam - 24 - dec, 3) + ptmilhar + vr.substr(tam - 21 - dec, 3) + ptmilhar + vr.substr(tam - 18 - dec, 3) + ptmilhar + vr.substr(tam - 15 - dec, 3) + ptmilhar + vr.substr(tam - 12 - dec, 3) + ptmilhar + vr.substr(tam - 9 - dec, 3) + ptmilhar + vr.substr(tam - 6 - dec, 3) + ptmilhar + vr.substr(tam - 3 - dec, 3) + ptdecimal + vr.substr(tam - dec, 12);
                    }
                }
            }
            jQuery(function ($) {
                $(document).on('keypress', 'input.somente-numero', function (e) {
                    var square = document.getElementById("sonumero");
                    var key = (window.event) ? event.keyCode : e.which;
                    if ((key > 47 && key < 58)) {
//                        sonumero.style.backgroundColor = "#ffffff";
                        return true;

                    } else {
//                        sonumero.style.backgroundColor = "#ff0000";
                        return (key == 8 || key == 0) ? true : false;

                    }
                });
            });
        </script>
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- MENU HORIZONTAL -->
        <?php include './estrutura/menu-horizontal.php'; ?>
        <!-- FIM MENU HORIZONTAL --> 
        <div class="clearfix"> </div>
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- MENU -->
                    <?php include './estrutura/menu.php'; ?>
                    <!-- FIM MENU -->
                </div>
            </div>
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <h1 class="page-title"> DeliveryUp. Painel Empresa
                        <!--<small>statistics, charts, recent events and reports</small>-->
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index-2.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Dashboard</span>
                            </li>
                        </ul>

                    </div>
                    <!-- END PAGE HEADER-->

                    <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12">
                            <div class="portlet light ">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class=" icon-social-twitter font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Meus Produtos</span>
                                    </div>

                                </div>

                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_actions_pending">
                                            <?php
                                            $prodao = new ProdutoDAO();
                                            $imgdao = new ImagemProdutoDAO();
                                            $tpdao = new TipoProdutoDAO();

                                            foreach ($prodao->BuscarTodos($emp_id) as $p) {
//                                                $i = $imgdao->PegaImagemPrincipal($p->getId());
//                                                $caminho = '..' . $i->getCaminho();
                                                $nm = $tpdao->PegaNome($p->getTipoproduto());
                                                ?>
                                                <!-- BEGIN: Actions -->
                                                <div class="mt-actions">
                                                    <div class="mt-action">
                                                        <div class="mt-action-img">
                                                            <img src="../<?= $p->getImagem() ?>" width="60" height="60" alt="" /> </div>
                                                        <div class="mt-action-body">
                                                            <div class="mt-action-row">
                                                                <div class="mt-action-info ">
                                                                    <div class="mt-action-icon ">

                                                                    </div>
                                                                    <div class="mt-action-details ">
                                                                        <span class="mt-action-author"><?= $p->getNome() ?></span>
                                                                        <p class="mt-action-desc">Categoria: <?= $nm->getDescricao() ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-action-datetime ">
                                                                    <span class="mt-action-date"></span>
                                                                    <strong><span class="mt=action-time">R$ <?= str_replace(".", ",", $p->getValor()) ?></span></strong>
                                                                </div>
                                                                <div class="mt-action-datetime ">
                                                                    <span class="mt-action-date">Situação</span>
                                                                    <?php
                                                                    if ($p->getSituacao() == 'A') {
                                                                        ?>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">Ativo</span>
                                                                    <?php } ?>
                                                                    <?php
                                                                    if ($p->getSituacao() == 'I') {
                                                                        ?>
                                                                        <span class="mt-action-dot bg-red"></span>
                                                                        <span class="mt=action-time">Inativo</span>
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="mt-action-buttons ">
                                                                    <a href="edit-produto?produto=<?= $p->getId() ?>"><button type="button" class="btn btn-outline green btn-sm" >Editar</button></a>
                                                                    <button type="button" class="btn btn-outline red btn-sm" data-toggle="modal" data-target="#del<?= $p->getId() ?>">Excluir</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <hr>
                                                <!-- Modal -->

                                                <div class="modal fade" id="del<?= $p->getId() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h3 class="modal-title" id="exampleModalLabel">Exclusão</h3>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label>Deseja Excluir o Produto?</label><br>
                                                                <strong><?= $p->getNome() ?></strong>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                                                    <a href="../app/controll/produto?del=<?= $p->getId() ?>"><button type="button" name="edit" class="btn btn-primary">Sim</button></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <!-- END: Actions -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- BEGIN FOOTER -->
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        });
    </script>
    <?php include './estrutura/footer.php'; ?>    
</body>
</html>