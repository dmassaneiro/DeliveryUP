<?php
include_once './session.php';
include_once './AutoLoad.php';

if (isset($_GET['erro'])) {
    $msg = $_GET['erro'];
}
$tpdao = new TipoProdutoDAO();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Meus Produtos</title>
        <?php include './head.php'; ?>
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
    <body>
        <div class="container-fluid" id="wrapper">
            <div class="row">
                <?php include './menu.php'; ?>

                <main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
                    <?php include './menuhorizontal.php'; ?>
                    <?php if (isset($_GET['erro']) != null) { ?>
                        <div class="alert bg-danger" role="alert"><em class="fa fa-minus-circle mr-2"></em>
                            <strong>Erro!</strong> <?php echo $_SESSION['msg'] ?>
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
                    <?php } ?>
                    <section class="row">
                        <div class="col-sm-12">
                            <div class="card mb-4">
                                <div class="card-block">
                                    <h3 class="card-title">Cadastro de Produtos</h3>

                                    <h6 class="card-subtitle mb-2 text-muted">Cadastre aqui seus produtos para que os usuario possam fazer o pedido do mesmo</h6>

                                    <form method="post" action="../app/controll/produto.php" enctype="multipart/form-data">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nome do Produto</label>
                                                    <input type="text" name="nome" class="form-control"/>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>Valor R$</label>
                                                    <input type="numeric" id="sonumero" name="valor" size="6" class="form-control somente-numero" onkeydown="FormataValor(this, 6, event, 2, '.', ',');"/>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Categoria</label>
                                                    <select class="myselect form-control" name="categoria">
                                                        <option></option>
                                                        <?php foreach ($tpdao->BuscarTodos() as $tp) { ?>
                                                            <option value="<?= $tp->getId() ?>"><?= $tp->getDescricao() ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <script type="text/javascript">
                                                        $(".myselect").select2();
                                                    </script>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Descrição do produto</label>
                                                    <textarea class="form-control" name="descricao" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><b>Imagem Principal</b></label>
                                                    <input type="file" name="img1" class="form-control" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Imagem 2</label>
                                                    <input type="file" name="img2" class="form-control" id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Imagem 3</label>
                                                    <input type="file" name="img3"class="form-control" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Imagem 4</label>
                                                    <input type="file" name="img4" class="form-control" id="exampleFormControlFile1">
                                                </div>

                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-primary" name="enviar"> Gravar Produto</button>
                                                </div>

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br>
                    <br>
                </main>
            </div>
        </div>

        <?php include './footer.php'; ?>
    </body>
</html>
