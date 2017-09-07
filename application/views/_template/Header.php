<?php
    $project_name = $this->default_model->get_by('projects', 'column_name', 'project_name', 'column_name', 'asc', 'row', 'where');
    if ($this->session->userdata('logged_in') != TRUE) {
        redirect(base_url());
    }

    $menu_id_available = $this->permission_model->get_permission();

?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>
        <?=$title ?> &middot; <?= ucfirst(strtolower($project_name->description)) ?>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <?php if (isset($page_plugin_css)): ?>
    <?php foreach ($page_plugin_css as $row): ?>
    <link href="<?= base_url() ?>assets/<?= $row ?>" rel="stylesheet" type="text/css" />
    <?php endforeach ?>
    <?php endif ?>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?= base_url() ?>assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?= base_url() ?>assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?= base_url() ?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?= base_url() ?>assets/layouts/layout/css/custom.css?<?php echo rand(); ?>" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->

    
    <script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="favicon.ico" /> </head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <div class="page-logo"> 
                <a href="<?= base_url() ?>">
                    <img src="<?= base_url('assets/layouts/layout/img/logo.png') ?>" alt="logo" class="logo-default" /> 
                </a>
                <div class="menu-toggler sidebar-toggler"> <span></span> </div>
            </div>
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> <span></span> </a>
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-extended dropdown-dark dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="icon-bell"></i> <span class="badge badge-default"> 1 </span> </a>
                        <ul class="dropdown-menu">
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;"> 
                                            <span class="time">9 days</span> 
                                            <span class="details">
                                                <span class="label label-sm label-icon label-danger"><i class="fa fa-bolt"></i></span> Storage server failed. 
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user dropdown-dark"> <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="fa fa-cog"></i>
                                <i class="fa fa-angle-down"></i>
                            </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="<?= base_url('profil') ?>"> <i class="fa fa-user"></i> Halo <b><?php echo ucfirst($this->session->userdata('username')) ?></b> </a>
                            </li>
                            <li>
                                <a href="<?= base_url('profil') ?>"> <i class="fa fa-key"></i> Profil Pengguna </a>
                            </li>
                            <!-- <li>
                                <a href="<?= base_url('about') ?>"> <i class="fa fa-arrow-right"></i> Tentang Aplikasi <b>IREN</b> </a>
                            </li> -->
                            <li>
                                <a href="<?php echo base_url('auth/logout') ?>"> <i class="fa fa-sign-out"></i> Keluar </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
    <div class="page-container">
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <div class="user-panel bg-olive">
                    <div class="pull-left image">
                        <i class="fa fa-university"></i>
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $project_name->description ?></p>
                        <a href="<?= base_url('about') ?>">Keterangan <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler"> <span></span> </div>
                    </li>

                    <li class="heading heading-menu hidding-menu-closed">
                        Menu Aplikasi
                    </li>
                    <?php
                        $menu = $this->default_model->get_by_array('menu', array('parent_id' => 0, 'is_menu' => 1), 'position', 'asc', 'result');
                    ?>
                    <?php foreach ($menu as $row): ?>
                        <?php if (in_array($row->id, $menu_id_available) || in_array("all", $menu_id_available)): ?>
                            <?php if ($row->has_child == 1): ?>
                                <li class="nav-item <?php if($this->uri->segment(1) == $row->active){echo "start active";} ?>">
                                    <a href="javascript:;" class="nav-link nav-toggle <?php if($this->uri->segment(1) == $row->active){echo "active-custom";} ?>"> 
                                        <i class="<?= $row->style ?>"></i> 
                                        <span class="title"><?= $row->description ?></span> 
                                        <span class="selected"></span> 
                                        <span class="arrow open"></span> 
                                    </a>
                                    <ul class="sub-menu">
                                        <?php
                                            $submenus = $this->default_model->get_by_array('menu', array('parent_id' => $row->id, 'is_menu' => 1), 'position', 'asc', 'result');
                                        ?>
                                        <?php foreach ($submenus as $submenu): ?>
                                            <?php if (in_array($row->id, $menu_id_available) || in_array("all", $menu_id_available)): ?>
                                                <li class="nav-item <?php if($this->uri->segment(1) == $submenu->active && $this->uri->segment(2) == $submenu->active_child){echo "active open";} ?>">
                                                    <a href="<?= base_url($submenu->url); ?>" class="nav-link ">
                                                        <i class="<?= $submenu->style ?>"></i> 
                                                        <span class="title"><?= $submenu->description ?></span> 
                                                        <span class="selected"></span> 
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="nav-item <?php if($this->uri->segment(1) == $row->active){echo "start active";} ?>">
                                    <a href="<?= base_url($row->url); ?>" class="nav-link nav-toggle <?php if($this->uri->segment(1) == $row->active){echo "active-custom";} ?>"> 
                                        <i class="<?= $row->style ?>"></i> 
                                        <span class="title"><?= $row->description ?></span> 
                                    </a>
                                </li>
                            <?php endif ?>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <ul class="page-breadcrumb pull-right">
                        <?php foreach ($breadcumb as $row): ?>
                        <li>
                            <a href="<?= $row['link'] ?>">
                                <?php if ($row['desc'] == "Home"): ?>
                                    <i class="fa fa-dashboard"></i>
                                <?php endif ?>
                                <?php echo $row[ 'desc'] ?> 
                            </a> 
                            <i class="fa fa-angle-right"></i> </li>
                        <?php endforeach ?>
                        <li> <span><?= $br_ActivePage ?></span> </li>
                    </ul>
                </div>
                <h3 class="page-title"> <?= $br_PageDesc ?></h3>