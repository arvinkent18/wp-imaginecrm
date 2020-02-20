<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-md navbar-dark  bg-dark" id="main-nav">
        <div class="container">
            <div class="grid w-100">
                <div class="row" style="margin-top: -150px;">
                    <div class="col-md-8">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>Toggle to open
                        </button>

                        <div class="collapse navbar-collapse col-lg-6 col-md-6">
                            <ul class="nav navbar-nav navbar-left">
                                <li><?php if (function_exists('the_custom_logo')) : ?>
                                        <?php if (has_custom_logo()) : ?>
                                            <?php the_custom_logo(); ?>
                                        <?php else : ?>
                                            <a href="http://localhost/wordpress/" class="custom-logo-link" rel="home"><img width="150" height="162" src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" class="custom-logo" alt="ImagineCRM"></a>
                                            </a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4" id="company-details">
                        <div class="d-flex">
                            <div class="row no-gutters pr-5">
                                <div class="col-md-4">
                                    <i class="fa fa-phone fa-3x none"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="flex-column">
                                        <span class="navbar-text ml-auto py-0 px-lg-2 phone-numbers">(213) 632-6840</span>
                                    </div>
                                    <div class="flex-column">
                                        <span class="navbar-text ml-auto py-0 px-lg-2 emails">info@imaginecrm.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <i class="fa fa-map-marker fa-3x none"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="flex-column">
                                        <span class="navbar-text ml-auto py-0 px-lg-2 phone-numbers">(213) 632-6840</span>
                                    </div>
                                    <div class="flex-column">
                                        <span class="navbar-text ml-auto py-0 px-lg-2 emails">info@imaginecrm.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <?php if (has_nav_menu('top')) : ?>
                            <?php
                            wp_nav_menu([
                                'menu'            => 'primary',
                                'theme_location'  => 'top',
                                'container'       => 'div',
                                'container_id'    => 'navbarCollapse',
                                'container_class' => 'collapse navbar-collapse',
                                'menu_id'         => false,
                                'menu_class'      => 'navbar-nav justify-content-center w-100',
                                'depth'           => 2,
                                'fallback_cb'     => 'bs4navwalker::fallback',
                                'walker'          => new bs4navwalker()
                            ]);
                            ?>
                        <?php else : ?>
                            <div id="navbarCollapse" class="collapse navbar-collapse">
                                <ul id="menu-main-navigation" class="navbar-nav justify-content-center w-100">
                                    <li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-20 nav-item active"><a href="#" class="nav-link active">Home</a></li>
                                    <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-21 nav-item active"><a href="#" class="nav-link active">Services</a></li>
                                    <li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22 nav-item active"><a href="#" class="nav-link active">Products</a></li>
                                    <li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-23 nav-item active"><a href="#" class="nav-link active">Clients</a></li>
                                    <li id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-24 nav-item active"><a href="#" class="nav-link active">Partners</a></li>
                                    <li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-25 nav-item active"><a href="#" class="nav-link active">About Us</a></li>
                                    <li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-26 nav-item active"><a href="#" class="nav-link active">News</a></li>
                                    <li id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-27 nav-item active"><a href="#" class="nav-link active">Connect</a></li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row justify-content-center mt-5" id="hero">
                    <div class="col-md-12">
                        <h2 class="display-5 none">
                            <span class="breaker">SALESFORCE</span> <span class="breaker">CONSULTING</span> <span class="breaker">REIMAGINED</span>
                        </h2>
                        <small class="none">FOR NONPROFITS, FOUNDATION, AND HIGHER EDUCATION INSTITUTIONS</small>
                    </div>
                    <div class="col-md-12 mt-3">
                        <button class="btn emphasize">Learn more</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>