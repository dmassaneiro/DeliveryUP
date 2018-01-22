<?php
include_once './session.php';
include_once './AutoLoad.php';

if (isset($_GET['erro'])) {
    $msg = $_GET['erro'];
}
$tpdao = new TipoProdutoDAO();
$pro = new ProdutoDAO();

$id = filter_input(INPUT_GET, 'produto');

$d = $pro->BuscarDados($id, $emp_id);
$nm = $tpdao->PegaNome($d->getTipoproduto());
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>   
        <title>Cadastro de Produto</title>
        <?php include './estrutura/head.php'; ?> 
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
                if (tecla == 8) {
                    tam = tam - 1;
                }
                if (tecla == 8 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105) {
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
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <?php include './estrutura/menu-horizontal.php'; ?>

        <div class="clearfix"> </div>
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <?php include './estrutura/menu.php'; ?>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="page-content">

                    <!-- END THEME PANEL -->
                    <h1 class="page-title"> DeliveryUP.
                        <small>Aqui você poderá Editar seu produto</small>
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Editar produto</span>
                            </li>
                        </ul>

                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class="portlet light portlet-fit portlet-form ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Editar Produto</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form action="../app/controll/produto.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <?php if (isset($_GET['erro']) != null) { ?>
                                                <div class="alert alert-danger" role="alert"><em class="fa fa-minus-circle mr-2"></em>
                                                    <strong>Erro!</strong> <?php echo $_SESSION['msg'] ?>
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                </div>

                                            <?php } ?>

                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> Você tem alguns erros de formulário. Por favor, verifique abaixo. 
                                            </div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Cadastro Realizado com Sucesso! </div>
                                            <div class="form-group  margin-top-15">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <label class="">Nome do Produto
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="nome" value="<?= $d->getNome() ?>"/> 
                                                                <input type="hidden"  name="produto" value="<?= $d->getId() ?>"/> </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Valor R$
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" id="sonumero" class="form-control somente-numero" name="valor" onkeydown="FormataValor(this, 6, event, 2, '.', ',');"
                                                                       value="<?= $d->getValor() ?>"/> 
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Categoria
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <select class="myselect form-control" name="categoria">
                                                                    <option value="<?= $d->getTipoproduto() ?>"><?= $nm->getDescricao() ?></option>
                                                                    <?php foreach ($tpdao->BuscarTodosMenos($d->getTipoproduto()) as $tp) { ?>
                                                                        <option value="<?= $tp->getId() ?>"><?= $tp->getDescricao() ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <script type="text/javascript">
                                                                    $(".myselect").select2();
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label >Descrição
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <textarea class="form-control" name="descricao" rows="3"><?= $d->getDescricao() ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h4><b>Imagem</b></h4>
                                                            <img src="../<?= $d->getImagem() ?>" class="img-rounded"  width="304" height="236"> 
                                                        </div>
                                                        <br>
                                                        <div class="col-md-5">
                                                            <label><b>Trocar Imagem</b>
                                                                <span class="required"> * </span></label>
                                                            <input type="file" name="principal" class="form-control" id="exampleFormControlFile1">
                                                        </div>
                                                    </div>  
                                                    <br>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <button type="submit" name="edit" class="btn green">Editar</button>
                                                            <button type="button" class="btn default">Cancelar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                        <!-- END VALIDATION STATES-->
                                </div>
                            </div>

                        </div>
                        <!-- END CONTENT BODY -->
                    </div>
                    <!-- END CONTENT -->
                    <!-- BEGIN QUICK SIDEBAR -->

                </div>
                <!-- END CONTAINER -->
                <!-- BEGIN FOOTER -->
                <?php include './footerCad.php'; ?>    
                </body>


                </html>