<?php
include_once './session.php';
include_once './AutoLoad.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <?php include './estrutura/head.php' ?>
        <title>Categorias</title>
        <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
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
                                        <span class="caption-subject font-dark bold uppercase">Categorias</span>
                                    </div>

                                </div>

                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_actions_pending">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label><b>Não Existe a Categoria que voçê proucurou? Não tem problema é só Cadastrar :)</b></label>
                                                    <form  action="../app/controll/categoria.php" method="POST">
                                                        <div class="input-group ">
                                                            <input type="text" class="form-control"maxlength="50" name="nome" placeholder="Nome da Categoria">
                                                            <span class="input-group-btn">
                                                                <button class="btn green" name="gravar" type="submit">Cadastrar!</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="input-group">
                                                <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Categoria que voçê proucura" title="Type in a name">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                            </div>
                                            <br>
                                            <table class="table" id="myTable">
                                                <tr class="header">
                                                    <th style="width:60%;">Descrição</th>

                                                </tr>
                                                <?php
                                                $catdao = new CategoriaDAO();
                                                foreach ($catdao->BuscarTodos()as $cat) {
                                                    ?>
                                                    <tr>
                                                        <td><?=$cat->getDescricao()?></td>

                                                    </tr>
                                                <?php } ?>

                                            </table>

                                            <script>
                                                function myFunction() {
                                                    var input, filter, table, tr, td, i;
                                                    input = document.getElementById("myInput");
                                                    filter = input.value.toUpperCase();
                                                    table = document.getElementById("myTable");
                                                    tr = table.getElementsByTagName("tr");
                                                    for (i = 0; i < tr.length; i++) {
                                                        td = tr[i].getElementsByTagName("td")[0];
                                                        if (td) {
                                                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                                                tr[i].style.display = "";
                                                            } else {
                                                                tr[i].style.display = "none";
                                                            }
                                                        }
                                                    }
                                                }
                                            </script>

                                            <?php
                                            ?>

                                            <?php //}  ?>
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
    <?php include './estrutura/footer.php'; ?>    

</html>