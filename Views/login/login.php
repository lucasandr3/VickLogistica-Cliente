<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Vick Logística</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=url('assets/img/logo.jpeg')?>">
    <link rel="icon" href="<?=url('assets/img/logo.jpeg')?>" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="<?=url('assets/vendors/jquery-toggles/css/toggles.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=url('assets/vendors/jquery-toggles/css/themes/toggles-light.css')?>" rel="stylesheet"
        type="text/css">

    <!-- Custom CSS -->
    <link href="<?=('assets/dist/css/style.css')?>" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- HK Wrapper -->
    <div class="hk-wrapper">
        <?php if(isset($_SESSION['forgot'])): ?>
            <?php echo $_SESSION['forgot']; ?>
            <?php $_SESSION['forgot'] = ''; ?>
        <?php endif; ?>

        <?php if(f_error()): ?>
            <div class="alert alert-danger" role="alert" style="border-radius:0px;text-align:center;">
                <?php echo f_error() ?>
            </div>
        <?php endif; ?>
        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-end align-items-center">
                <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-outline-secondary">Ajuda</a>
                    <a href="#" class="btn btn-outline-secondary">Suporte</a>
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-35 w-lg-55 w-sm-75 w-100">
                                <a class="font-24 font-weight-500 auth-brand text-center d-block mb-20" href="#" style="color:#333;">
                                    <div style="display: flex;justify-content: center;align-items: center;">
                                        <img src="<?=url('assets/img/logo.jpeg')?>" style="width: 50px;height: auto;">
                                        Logística
                                    </div>
                                </a>
                                <form action="<?=url('login/signin')?>" method="post">
                                    <h1 class="display-5 text-center mb-10">Bem-vindo de volta :)</h1>
                                    <p class="text-center mb-30">Área para acompanhamento de checklist
                                        eletrônico.</p>
                                    <div class="form-group">
                                        <input class="form-control" name="email_user" placeholder="Digite o E-mail de acesso" type="email">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" name="senha" placeholder="Digite a senha" type="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i
                                                            data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-danger btn-block" type="submit" style="background-color: #3c3c3c;border:#3c3c3c;">Login</button>

                                    <p class="text-center mt-20">Sistema Licenciado para Vick Logística
                                        - &#174;<?=date('Y')?>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="<?=url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=url('assets/vendors/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?=url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>

    <!-- Slimscroll JavaScript -->
    <script src="<?=url('assets/dist/js/jquery.slimscroll.js')?>"></script>

    <!-- Fancy Dropdown JS -->
    <script src="<?=url('assets/dist/js/dropdown-bootstrap-extended.js')?>"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="<?=url('assets/dist/js/feather.min.js')?>"></script>

    <!-- Init JavaScript -->
    <script src="<?=url('assets/dist/js/init.js')?>"></script>
</body>

</html>