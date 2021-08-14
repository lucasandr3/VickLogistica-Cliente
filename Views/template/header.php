<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?=$viewData['title']?></title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=url('assets/img/logo.jpeg')?>">
    <link rel="icon" href="<?=url('assets/img/logo.jpeg')?>" type="image/x-icon">

    <!-- Morris Charts CSS -->
    <link href="<?=url('assets/vendors/morris.js/morris.css')?>" rel="stylesheet" type="text/css" />

    <!-- Toastr CSS -->
    <link href="<?=url('assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')?>" rel="stylesheet" type="text/css">

    <?php if($viewData['title'] === 'Categorias'): ?>
        <link href="<?=url('assets/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Cardápio'): ?>
        <link href="<?=url('assets/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Adicionais'): ?>
        <link href="<?=url('assets/portal/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/portal/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Item Adicional'): ?>
        <link href="<?=url('assets/portal/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/portal/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Pedidos Finalizados'): ?>
        <link href="<?=url('assets/portal/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/portal/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'Pedidos Cancelados'): ?>
        <link href="<?=url('assets/portal/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/portal/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <?php if($viewData['title'] === 'getStore()->name_company'): ?>
        <link href="<?=url('assets/portal/vendors/datatables.net-dt/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?=url('assets/portal/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')?>" rel="stylesheet" type="text/css" />
    <?php endif; ?>

    <!-- Pickr CSS -->
    <link href="<?=url('assets/vendors/pickr-widget/dist/pickr.min.css')?>" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker CSS -->
    <link href="<?=url('assets/vendors/daterangepicker/daterangepicker.css')?>" rel="stylesheet" type="text/css" />

    <!-- select2 CSS -->
    <link href="<?=url('assets/vendors/select2/dist/css/select2.min.css')?>" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="<?=url('assets/vendors/jquery-toggles/css/toggles.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=url('assets/vendors/jquery-toggles/css/themes/toggles-light.css')?>" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?=url('assets/dist/css/style.css')?>" rel="stylesheet" type="text/css">
</head>

<body>
<!-- HK Wrapper -->
<div class="hk-wrapper hk-alt-nav hk-icon-nav">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
        <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
        <a class="navbar-brand" href="<?=url('')?>">
            <img src="<?=url('assets/img/logo.jpeg')?>" style="width: 50px;height: auto;">
            Logística
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapseAlt">
            <ul class="navbar-nav">
<!--                <li class="nav-item dropdown show-on-hover active">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        Cardápio-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">-->
<!--                        <a class="dropdown-item --><?//=($viewData['menu'] == 'cardapio')?'active':''?><!--" href="--><?//=url('menu')?><!--">Cardápio</a>-->
<!--                        <a class="dropdown-item --><?//=($viewData['menu'] == 'categoria')?'active':''?><!--" href="--><?//=url('categoria')?><!--">Categoria de Prato</a>-->
<!--                        <a class="dropdown-item --><?//=($viewData['menu'] == 'novoprato')?'active':''?><!--" href="--><?//=url('menu/novo_prato')?><!--">Novo Prato</a>-->
<!--                        <a class="dropdown-item --><?//=($viewData['menu'] == 'novopratoedit')?'active':''?><!--" href="--><?//=url('menu/editPrato')?><!--">Editar Prato</a>-->
<!--                        <a class="dropdown-item --><?//=($viewData['menu'] == 'adicional')?'active':''?><!--" href="--><?//=url('adicional')?><!--">Adicionais de Prato</a>-->
<!--                        <a class="dropdown-item --><?//=($viewData['menu'] == 'item')?'active':''?><!--" href="--><?//=url('itens')?><!--">Itens Adicionais</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown show-on-hover">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        Pedidos-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">-->
<!--                        <a class="dropdown-item --><?//=($viewData['menu'] == 'pedidof')?'active':''?><!--" href="--><?//=url('pedido/finalizados')?><!--">Pedidos Finalizados</a>-->
<!--                        <a class="dropdown-item --><?//=($viewData['menu'] == 'pedidoc')?'active':''?><!--" href="--><?//=url('pedido/cancelados')?><!--">Pedidos Cancelados</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?//=url('delivery')?><!--" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                        Taxa de Entrega-->
<!--                    </a>-->
<!--                </li>-->
                <li class="nav-item dropdown show-on-hover">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Relátorios
                    </a>
                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="<?=url('pedido/finalizados')?>">Pedidos Finalizados</a>
                        <a class="dropdown-item" href="<?=url('pedido/cancelados')?>">Pedidos Cancelados</a>
                    </div>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?//=url('store')?><!--" >Configurações</a>-->
<!--                </li>-->
            </ul>
        </div>
        <ul class="navbar-nav hk-navbar-content">
            <a class="nav-link" href="<?=url('login/logout')?>"><i class="dropdown-icon zmdi zmdi-power" style="margin-right: 5px;font-size: 17px;"></i><span>Sair do sistema</span></a>
        </ul>
    </nav>
    <!-- /Top Navbar -->

    <!-- Main Content -->
    <div class="hk-pg-wrapper">
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        <!-- Footer -->
        <div class="hk-footer-wrap container">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p><a href="#" class="text-dark" target="_blank">Vick Logística</a> © <?=date('Y')?></p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Versão 1.0.0</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /Footer -->
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->
