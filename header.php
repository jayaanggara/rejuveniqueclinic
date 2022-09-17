<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo ('tile');?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="<?php bloginfo('stylesheet_directory') ;?>/assets/plugins/owlcarousel/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="<?php bloginfo('stylesheet_directory') ;?>/style.css" rel="stylesheet" type="text/css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.min.css" />
<?php wp_head();?>
</head>

<body>
<div>
    <div class="z-index position-fixed w-100 bg-green" id="navbar-first">
        <div class="container py-3 text-white text-end">
            <div class="d-inline-block" style="padding-right: 35px;font-size:14px">
                <a href="mailto:contact@rejuveniqueclinic.com" class="text-white">
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/email.png" alt="" style="width: 20px;"> <span class="ps-2">contact@rejuveniqueclinic.com</span>
                </a>
            </div>
            <div class="ps-2 d-inline-block" style="font-size:14px">
                 <a href="https://wa.me/6285333165062" class="text-white">
                <i class="fa fa-whatsapp pt-1" style="font-size: 20px;"> </i><span class="ps-1">+62 853 3316 5062 </span>
                </a>
            </div>
        </div>
    </div>
    <nav id="navbar" class="mainNav navbar <?php if(is_page( 'blog' )){ echo "bg-grey";}?>" style="margin-top: 55px;">
        <div class="container">
            <a class="navbar-brand" title="<?php bloginfo ('tile');?>" href="<?php echo bloginfo('url'); ?>">
                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="<?php bloginfo('tile');?>">
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

<main>