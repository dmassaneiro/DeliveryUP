<?php
include_once './session.php';
include_once './AutoLoad.php';


$empdao = new EmpresaDAO();

$d = $empdao->BuscarDadosEmpresa($emp_id);

$msg = $_GET['msg'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />  
        <?php include './estrutura/head.php' ?>
        <title>Meus Dados</title>
        <script type="text/javascript" src="../site/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../site/js/jquery.maskedinput.js"></script>
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
                                <a href="index.php">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Meus Dados</span>
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
                                        <span class="caption-subject font-dark bold uppercase">Meus Dados</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <?php if($msg == '200'){ ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php }else {} ?>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_actions_pending">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- BEGIN PROFILE SIDEBAR -->
                                                    <div class="profile-sidebar">
                                                        <!-- PORTLET MAIN -->
                                                        <div class="portlet light profile-sidebar-portlet ">
                                                            <!-- SIDEBAR USERPIC -->
                                                            <?php if ($d->getLogo() != null) { ?>
                                                                <div class="">
                                                                    <center><img src="../<?= $d->getLogo() ?>" class="img-rounded" height="150" width="150" > </center>
                                                                </div>
                                                            <?php } ?>
                                                            <?php if ($d->getLogo() == null) { ?>
                                                                <div class="profile">
                                                                    <center><img src="../logos/logo.jpg" class="img-rounded"  height="150" width="150" alt=""> </center>
                                                                </div>
                                                            <?php } ?>

                                                            <!-- END SIDEBAR USERPIC -->
                                                            <!-- SIDEBAR USER TITLE -->
                                                            <div class="profile-usertitle">
                                                                <div class="profile-usertitle-name"><?= $d->getNome() ?></div>
                                                                <div class="profile-usertitle-job"> Developer </div>
                                                            </div>
                                                            <!-- END SIDEBAR USER TITLE -->
                                                            <!-- SIDEBAR BUTTONS -->
                                                            <div class="profile-userbuttons">
                                                                <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                                                                <button type="button" class="btn btn-circle red btn-sm">Message</button>
                                                            </div>
                                                            <!-- END SIDEBAR BUTTONS -->

                                                        </div>

                                                    </div>
                                                    <!-- END BEGIN PROFILE SIDEBAR -->
                                                    <!-- BEGIN PROFILE CONTENT -->
                                                    <div class="profile-content">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="portlet light ">
                                                                    <div class="portlet-title tabbable-line">
                                                                        <div class="caption caption-md">
                                                                            <i class="icon-globe theme-font hide"></i>
                                                                            <span class="caption-subject font-blue-madison bold uppercase">CONTA DE PERFIL</span>
                                                                        </div>
                                                                        <ul class="nav nav-tabs">
                                                                            <li class="active">
                                                                                <a href="#tab_1_1" data-toggle="tab">Informações Pessoal</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#tab_1_4" data-toggle="tab">Mudar Endereço</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#tab_1_3" data-toggle="tab">Mudar Senha</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="portlet-body">
                                                                        <div class="tab-content">
                                                                            <!-- PERSONAL INFO TAB -->
                                                                            <div class="tab-pane active" id="tab_1_1">
                                                                                <form role="form" method="POST" action="../app/controll/meus-dados.php" enctype="multipart/form-data">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Nome da Empresa</label>
                                                                                        <input type="text" placeholder="Minha Empresa" name="nome"required="" value="<?= $d->getNome() ?>" class="form-control" /> 
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label class="control-label">CNPJ</label>
                                                                                        <input type="tel" placeholder="" name="cnpj" id="cnpj" value="<?= $d->getCnpj() ?>" class="form-control" /> 
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Telefone para contato 1</label>
                                                                                        <input type="tel" placeholder="(00)0000-0000" id="telefone" name="telefone1" value="<?= $d->getTelefone1() ?>" required="" class="form-control" /> 
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Telefone para contato 2</label>
                                                                                        <input type="tel" placeholder="(00)0000-0000" name="telefone2"id="celular" class="form-control" value="<?= $d->getTelefone2() ?>" /> 
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Anos no Mercado</label>
                                                                                        <input type="number" placeholder="5" name="ano" class="form-control" required="" value="<?= $d->getAnos() ?>" /> 
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Email</label>
                                                                                        <input type="email" placeholder="suaempresa@email.com" name="email" required="" class="form-control" value="<?= $d->getEmail() ?>" /> 
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Missão</label>
                                                                                        <textarea class="form-control" rows="3" name="missao" placeholder="Sua missão!!!"><?= $d->getMissao() ?></textarea>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Sobre a Empresa</label>
                                                                                        <textarea class="form-control" rows="3" name="sobre" placeholder="Fale um pouco sobre sua empresa!!!"><?= $d->getSobre() ?></textarea>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Logo Imagem de Perfil</label>
                                                                                        <input type="file" class="form-control" name="imagem">
                                                                                    </div>

                                                                                    <div class="margiv-top-10">
                                                                                        <button type="submit" name="dados" class="btn green"> Salvar Alterações </button>
                                                                                        <!--<a href="javascript:;" class="btn default"> Cancelar </a>-->
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <!-- END PERSONAL INFO TAB -->

                                                                            <!-- CHANGE PASSWORD TAB -->
                                                                            <div class="tab-pane" id="tab_1_3">
                                                                                <form action="#">
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Current Password</label>
                                                                                        <input type="password" class="form-control" /> </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">New Password</label>
                                                                                        <input type="password" class="form-control" /> </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Re-type New Password</label>
                                                                                        <input type="password" class="form-control" /> </div>
                                                                                    <div class="margin-top-10">
                                                                                        <a href="javascript:;" class="btn green"> Change Password </a>
                                                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <!-- END CHANGE PASSWORD TAB -->
                                                                            <!-- CHANGE Endereco TAB -->
                                                                            <div class="tab-pane" id="tab_1_4">
                                                                                <form role="form" method="POST" action="../app/controll/meus-dados.php" enctype="multipart/form-data">
                                                                                    <?php
                                                                                    $enddao = new EnderecoEmpresaDAO();
                                                                                    $e = $enddao->BuscarDados($d->getId());
                                                                                    ?>

                                                                                    <div class="form-group">
                                                                                        <label class="control-label">CEP</label>
                                                                                        <input type="number" id="cep" placeholder="Cep da Empresa" name="cep" required="" value="<?= $e->getCep() ?>" class="form-control" tabindex="1" /> 
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Cidade</label>
                                                                                        <input type="tel" id="cidade" placeholder="" name="cidade" value="<?= $e->getCidade() ?>" class="form-control" /> 
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Estado</label>
                                                                                        <input type="text" id="uf" name="estado" value="<?= $e->getEstado() ?>" required="" class="form-control"  /> 
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Bairro</label>
                                                                                        <input type="text" name="bairro" id="bairro" class="form-control" value="<?= $e->getBairro() ?>"  /> 
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Endereço</label>
                                                                                        <input class="form-control" id="rua" name="rua" type="text" value="<?= $e->getRua() ?>"/>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Número</label>
                                                                                        <input type="number" placeholder="" name="numero" required="" class="form-control" value="<?= $e->getNumero() ?>" tabindex="2" /> 
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="control-label">Complemento</label>
                                                                                        <input type="text" placeholder="" name="complemento" required="" class="form-control" value="<?= $e->getComplemento() ?>" tabindex="3" /> 
                                                                                    </div>

                                                                                    <div class="margiv-top-10">
                                                                                        <button type="submit" name="endereco" class="btn green"> Salvar Alterações </button>
                                                                                        <!--<a href="javascript:;" class="btn default"> Cancelar </a>-->
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <!-- END CHANGE endereco TAB -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END PROFILE CONTENT -->
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
        </div>
    </div>
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
//                            document.getElementById("cep").value == "";
//                            document.getElementById("cep").focus();
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
    <?php include './estrutura/footer.php'; ?>    

</html>