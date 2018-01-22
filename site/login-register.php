
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <head>
        <!-- Site Title-->
        <title>Login/Register</title>
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
                                <p class="h3 text-white">Entrar/Cadastro</p>
                               
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
                                        <li>Entrar</li>
                                        <li>Cadastre-se</li>
                                    </ul>
                                    <div class="resp-tabs-container">
                                        <div>
                                            
                                            <!-- RD Mailform-->
                                            <form class="" action="../app/controll/login.php" method="POST" >

                                                <div class="form-group">
                                                    <label for="contact-name" class="form-label form-label-outside">E-mail</label>
                                                    <input id="contact-name" type="text" name="email" data-constraints="@Required" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="contact-email" class="form-label form-label-outside">Senha</label>
                                                    <input id="contact-email" type="password" name="senha" data-constraints="@Required" class="form-control">
                                                </div>
                                                <div class="offset-top-50">
                                                    <button type="submit" name="entrar" class="btn btn-primary btn-fullwidth btn-shadow">Entrar</button>
                                                </div>

                                            </form>
                                        </div>
                                        <div>
                                            <div class="group-sm"><a href="#" class="btn btn-facebook btn-icon btn-icon-left"><span class="icon icon-xs fa-facebook"></span><span>Facebook</span></a><a href="#" class="btn btn-twitter btn-icon btn-icon-left"><span class="icon icon-xs fa-twitter"></span><span>Twitter</span></a><a href="#" class="btn btn-google-plus btn-icon btn-icon-left"><span class="icon icon-xs fa-google-plus"></span><span>Google +</span></a></div>
                                            <div class="divider-custom offset-top-30">
                                                <p class="small text-uppercase">Ou</p>
                                            </div>
                                            <!-- RD Mailform-->
                                            <form class="rd-mailform form-register text-center offset-top-20" method="POST">
                                                <div class="form-group">
                                                    <label for="register-form-name" class="form-label form-label-outside">Name</label>
                                                    <input id="register-form-name" type="text" name="name" data-constraints="@Required" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="register-form-email" class="form-label form-label-outside">E-mail</label>
                                                    <input id="register-form-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="register-form-password" class="form-label form-label-outside">Password</label>
                                                    <input id="register-form-password" type="password" name="password" data-constraints="@Required" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="register-form-password-confirm" class="form-label form-label-outside">Confirm Password</label>
                                                    <input id="register-form-password-confirm" type="password" name="password-confirm" data-constraints="@Required" class="form-control">
                                                </div>
                                                <div class="offset-top-50">
                                                    <button type="submit" class="btn btn-primary btn-fullwidth btn-shadow">Register</button>
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