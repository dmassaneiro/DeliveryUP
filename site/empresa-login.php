<?php
session_start();

if (isset($_GET['erro'])) {
    $msg = $_GET['erro'];
}
?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <head>
        <!-- Site Title-->
        <title>Login</title>
        <?php include './head.php'; ?>
    </head>
    <body>
        <!-- Page-->
        <div class="page text-center">
            <!-- Page Header-->
            <?php include './menu.php' ?>
            <!-- Page Content-->
            <main class="page-content">
                <!-- Breadcrumbs & Page title-->
                <section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
                    <div class="shell shell-fluid">
                        <div class="range range-condensed">
                            <div class="cell-xs-12 cell-xl-preffix-1 cell-xl-11">
                                <p class="h3 text-white">Para Empresa - Entrar</p>
                                <ul class="breadcrumbs-custom ">

                                    <li class="active">Área para Empresas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Buttons-->
                <section class="bg-white text-center section-50 section-sm-100">
                    <div class="shell">
                        <div class="range range-xs-center">
                            <div class="cell-sm-8 cell-lg-6">
                                <div class="responsive-tabs responsive-tabs-modern responsive-tabs-modern-mod-1 responsive-tabs-horizontal">
                                    <ul class="resp-tabs-list">
                                        <li>Digite seus dados para entrar</li>

                                    </ul>
                                    <div class="resp-tabs-container">
                                        <div>

                                            <!-- RD Mailform-->
                                            <form class="" action="../app/controll/login-empresa.php" method="POST" >
                                                <?php if (isset($_GET['erro'])!= null) { ?>
                                                    <div class="alert alert-danger">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <strong>Erro!</strong> <?php echo $_SESSION['msg'] ?>
                                                    </div>
                                                <?php } ?>
                                                <div class="form-group">
                                                    <label for="contact-name" class="form-label form-label-outside">E-mail</label>
                                                    <input id="contact-name" type="email" name="email" required="" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="contact-email" class="form-label form-label-outside">Senha</label>
                                                    <input id="contact-email" type="password" name="senha" required="" class="form-control">
                                                </div>
                                                <div class="offset-top-50">
                                                    <button type="submit" name="entrar" class="btn btn-primary btn-fullwidth btn-shadow">Entrar</button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
            <!-- Page Footer-->
            <?php include './footer.php'; ?>
    </body>
</html>