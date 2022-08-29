<?php 

/**
 * 
 * Template Name: Special Offers
 * Template Post Type: special-offers, page
 */

get_header();?>

<div class="pt-50">
    <header class="header-home" data-enllax-ratio=".5" data-enllax-direction="vertical">
        <div class="container py-7">
            <div class="col-md-5 container-text">
                <span data-aos="fade-up" data-aos-duration="500"><?php the_field('sec_title'); ?></span>
                <h1 data-aos="fade-up" data-aos-duration="500"><?php the_title(); ?></h1>
                <p data-aos="fade-up" data-aos-duration="500"><?php the_field('deskripsi'); ?></p>
            </div>
        </div>
    </header>
</div>

<section>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $special_offers = get_field('');
                if($special_offers):
                    foreach($special_offers as $count => $special): ?>
                <div class="carousel-item <?php if($count++ == 1){ echo "actiove"; }?>">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="" alt="">
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
                    <?php endforeach;
                endif;
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<?php get_footer();?>