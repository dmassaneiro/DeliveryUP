<?php
include_once './session.php';
include_once './AutoLoad.php';
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Meus Produtos</title>
        <?php include './head.php'; ?>

    </head>
    <body>
        <div class="container-fluid" id="wrapper">
            <div class="row">
                <?php include './menu.php'; ?>

                <main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
                    <?php include './menuhorizontal.php'; ?>

                    <section class="row">
                        <div class="col-sm-12">
                            <div class="card mb-4">
                                <div class="card-block">
                                    <h3 class="card-title">Meus Produtos</h3>

                                    <h6 class="card-subtitle mb-2 text-muted">Aqui voçê poderá ver e editar todos seus produtos cadastrados</h6>
                                    <div class="table-responsive offset-top-10">
                                        <table class="table table-shopping-cart">
                                            <tbody>
                                                <?php
                                                $prodao = new ProdutoDAO();
                                                $imgdao = new ImagemProdutoDAO();
                                                
                                                foreach ($prodao->BuscarTodos($emp_id) as $p) {
                                                    $i = $imgdao->PegaImagemPrincipal($p->getId());
                                                   echo  $caminho = '..'.$i->getCaminho();
                                                    ?>
                                            
                                                    <tr>
                                                        <td style="width: 1px">
                                                            <div class="inset-left-20">
                                                                <div class="product-image"><img src="<?=$caminho?>" width="60" height="50" alt=""></div>
                                                            </div>
                                                        </td>
                                                        <td style="min-width: 340px;">
                                                           
                                                                <div class="h5 text-sbold offset-top-0"><a href="shop-single.html" class="link-default"><?=$p->getNome()?> </a></div>
                                                                <!--<div class="h5 text-sbold offset-top-0"><a href="shop-single.html" class="link-default">Bairro: </a></div>-->
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="inset-left-20"><span class="h5 text-sbold"><?=$p->getValor()?></span></div>
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
                    <br>
                    <br>
                </main>
            </div>
        </div>

        <?php include './footer.php'; ?>

    </body>
</html>
