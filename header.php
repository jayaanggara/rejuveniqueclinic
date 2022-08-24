<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo ('tile');?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory') ;?>/assets/plugins/owlcarousel/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="<?php bloginfo('stylesheet_directory') ;?>/style.css" rel="stylesheet" type="text/css">
<?php wp_head();?>
</head>

<body>
<div>
    <div class="z-index position-fixed w-100 bg-green" id="navbar-first">
        <div class="container py-3 text-white text-end">
            <div class="d-inline-block">
                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/email.png" alt="" style="width: 20px;"> <span class="ps-2">contact@rejuveniqueclinic.com</span>
            </div>
            <div class="ps-2 d-inline-block">
                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/telpn.png" alt="" style="width: 16px;"> <span class="ps-2">+62 8123 871 1003 </span>
            </div>
        </div>
    </div>
    <nav id="navbar" class="mainNav navbar" style="margin-top: 50px;">
        <div class="container">
            <a class="navbar-brand" title="<?php bloginfo ('tile');?>" href="#">
                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="<?php bloginfo ('tile');?>">
            </a>
            <div class="containerNav">
            <div class="show-mobile"><div id="closeMenu" class="close-menu-wrp"></div></div>
                <?php
                    if (has_nav_menu( 'primary') ) {
                        wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'menu_class'        => 'navCustomMmp',
                            'fallback_cb'       => 'custom_sub_walker::fallback',
                            'walker'            => new custom_sub_walker(),
                            'items_wrap' 		=> '<ul id="%1$s" class="nav-primary align-self-center %2$s">%3$s</ul>',
                        ) );
                    };
                ?>
            </div>
            <div class="show-mobile">
                <div id="openMenu" class="hamburger-wrp align-self-center openNavTop-left">
                    <span class="item-ham"></span>
                    <span class="item-ham"></span>
                    <span class="item-ham"></span>
                </div>
            </div>
        </div>
    </nav>
</div>

<main data-scroll-container>