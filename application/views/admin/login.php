<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <!-- Viewport Metatag -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Bakergang - Admin Entry</title>

        <!-- Required Stylesheets -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/bootstrap/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/fonts/ptsans/stylesheet.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/fonts/icomoon/style.css" media="screen">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/login.css" media="screen">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/mws-theme.css" media="screen">

    </head>

    <body>

        <div id="mws-login-wrapper">
            <div id="mws-login">
                        <h1>Login 
                            <span class="pull-right" style="font-size: 10px;">
                                <?php
                                $msg = $this->session->userdata('message');
                                if($msg)
                                {
                                    echo $msg;
                                    $this->session->unset_userdata('message');
                                }
                                ?>
                            </span>
                        </h1>
                <div class="mws-login-lock"><i class="icon-lock"></i></div>
                <div id="mws-login-form">
                    <form class="mws-form" action="<?php echo base_url(); ?>admin/admin_login_check" method="post">
                        <div class="mws-form-row">
                            <div class="mws-form-item">
                                <input type="email" name="admin_email" class="mws-login-username required" placeholder="bakerganj@mail.com">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <div class="mws-form-item">
                                <input type="password" name="admin_password" class="mws-login-password required" placeholder="password">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <input type="submit" value="Login" class="btn btn-success mws-login-button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
