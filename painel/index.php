<?php
include_once './session.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <title>Painel Empresa   </title>
        <?php include './estrutura/head.php' ?>
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
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="7800">0</span>
                                            <small class="font-green-sharp">$</small>
                                        </h3>
                                        <small>TOTAL DE PEDIDOS</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="1349">0</span>
                                        </h3>
                                        <small>NÃO ATENDIDOS</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-like"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">85% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> change </div>
                                        <div class="status-number"> 85% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="567"></span>
                                        </h3>
                                        <small>TOTAL DE PRODUTOS</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> grow </div>
                                        <div class="status-number"> 45% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="276"></span>
                                        </h3>
                                        <small>CLIENTES</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> change </div>
                                        <div class="status-number"> 57% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption caption-md">
                                        <i class="icon-bar-chart font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Menssgens de Clientes</span>
                                        <span class="caption-helper">45 pending</span>
                                    </div>
                                    <div class="inputs">
                                        <div class="portlet-input input-inline input-small ">
                                            <div class="input-icon right">
                                                <i class="icon-magnifier"></i>
                                                <input type="text" class="form-control form-control-solid input-circle" placeholder="search..."> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="scroller" style="height: 338px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                        <div class="general-item-list">
                                            <div class="item">
                                                <div class="item-head">
                                                    <div class="item-details">
                                                        <img class="item-pic rounded" src="../assets/pages/media/users/avatar4.jpg">
                                                        <a href="#" class="item-name primary-link">Nick Larson</a>
                                                        <span class="item-label">3 hrs ago</span>
                                                    </div>
                                                    <span class="item-status">
                                                        <span class="badge badge-empty badge-success"></span> Open</span>
                                                </div>
                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                            </div>
                                            <div class="item">
                                                <div class="item-head">
                                                    <div class="item-details">
                                                        <img class="item-pic rounded" src="../assets/pages/media/users/avatar3.jpg">
                                                        <a href="#" class="item-name primary-link">Mark</a>
                                                        <span class="item-label">5 hrs ago</span>
                                                    </div>
                                                    <span class="item-status">
                                                        <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                </div>
                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                                            </div>
                                            <div class="item">
                                                <div class="item-head">
                                                    <div class="item-details">
                                                        <img class="item-pic rounded" src="../assets/pages/media/users/avatar6.jpg">
                                                        <a href="#" class="item-name primary-link">Nick Larson</a>
                                                        <span class="item-label">8 hrs ago</span>
                                                    </div>
                                                    <span class="item-status">
                                                        <span class="badge badge-empty badge-primary"></span> Closed</span>
                                                </div>
                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                                            </div>
                                            <div class="item">
                                                <div class="item-head">
                                                    <div class="item-details">
                                                        <img class="item-pic rounded" src="../assets/pages/media/users/avatar7.jpg">
                                                        <a href="#" class="item-name primary-link">Nick Larson</a>
                                                        <span class="item-label">12 hrs ago</span>
                                                    </div>
                                                    <span class="item-status">
                                                        <span class="badge badge-empty badge-danger"></span> Pending</span>
                                                </div>
                                                <div class="item-body"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                            </div>
                                            <div class="item">
                                                <div class="item-head">
                                                    <div class="item-details">
                                                        <img class="item-pic rounded" src="../assets/pages/media/users/avatar9.jpg">
                                                        <a href="#" class="item-name primary-link">Richard Stone</a>
                                                        <span class="item-label">2 days ago</span>
                                                    </div>
                                                    <span class="item-status">
                                                        <span class="badge badge-empty badge-danger"></span> Open</span>
                                                </div>
                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                            </div>
                                            <div class="item">
                                                <div class="item-head">
                                                    <div class="item-details">
                                                        <img class="item-pic rounded" src="../assets/pages/media/users/avatar8.jpg">
                                                        <a href="#" class="item-name primary-link">Dan</a>
                                                        <span class="item-label">3 days ago</span>
                                                    </div>
                                                    <span class="item-status">
                                                        <span class="badge badge-empty badge-warning"></span> Pending</span>
                                                </div>
                                                <div class="item-body"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                            </div>
                                            <div class="item">
                                                <div class="item-head">
                                                    <div class="item-details">
                                                        <img class="item-pic rounded" src="../assets/pages/media/users/avatar2.jpg">
                                                        <a href="#" class="item-name primary-link">Larry</a>
                                                        <span class="item-label">4 hrs ago</span>
                                                    </div>
                                                    <span class="item-status">
                                                        <span class="badge badge-empty badge-success"></span> Open</span>
                                                </div>
                                                <div class="item-body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption ">
                                        <span class="caption-subject font-dark bold uppercase">Pedidos Mensais</span>
                                        <span class="caption-helper">distance stats...</span>
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                            <i class="fa fa-pencil"></i> Export </a>
                                        <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                            <i class="fa fa-print"></i> Print </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <!-- BEGIN FOOTER -->
        <?php include './estrutura/footer.php'; ?>    
    </body>
</html>