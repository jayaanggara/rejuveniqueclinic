<?php 

/**
 * 
 * Template Name: Special Offers
 * Template Post Type: special-offers, page
 */

get_header();?>

<div class="pt-50">
<?php 
    $image = get_field('image', 15);
    if( !empty( $image ) ): ?>
    <header class="header-special" style="background-image: url('<?php echo esc_url($image['url']); ?>'); height:50vh" data-enllax-ratio=".5" data-enllax-direction="vertical">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="">
                    <span data-aos="fade-up" data-aos-duration="500"><?php the_field('sec_title', 15); ?></span>
                    <h1 data-aos="fade-up" data-aos-duration="500"><?php echo get_the_title(15); ?></h1>
                    <p data-aos="fade-up" data-aos-duration="500"><?php the_field('deskripsi', 15); ?></p>
                </div>
            </div>
        </div>
    </header>
    <?php endif; ?>
</div>

<section>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide py-5 px-md-2 px-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $special_offers = get_field('select_promo', 15);
                if($special_offers):
                    foreach($special_offers as $count => $special): 
                    $title = get_the_title($special->ID);
                    $deskripsi = get_the_excerpt($special->ID);
                    $thumbnail =  get_the_post_thumbnail_url($special->ID);
                    $permalink = get_the_permalink($special->ID);
                    ?>
                <div class="carousel-item <?php if($count++ == 0){ echo "active"; }?>">
                    <div class="row align-items-center" style="background: #DCDEDB;">
                        <div class="col-md-5">
                            <img src="<?php echo $thumbnail;?>" class="w-100" alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="p-md-0 p-4">
                                <h2 class="h3 fw-bold text-dark"><?php echo $title ?></h2>
                                <p style="color: #757B71"><?php echo $deskripsi ?></p>
                                <a href="<?php echo $permalink?>" style="color: #757B71">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php endforeach;
                endif;
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/arrow-left.png" alt="">
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/arrow-right.png" alt="">
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div>
            <h2>Another Special Offers</h2>
            <p style="color: #757B71">Don’t worry! You can explore many offers at Rejevenique!</p>
        </div>
        <div class="row row-cols-md-4 row-cols-2 pb-5 pt-2">
            <?php
                $args = array(  
                    'post_type' => 'special-offers',
                    'post_status' => 'publish',
                    'posts_per_page' => 8, 
                    'orderby' => 'title', 
                    'order' => 'ASC', 
                );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post();
                $title = get_the_title($post->ID);
                $deskripsi = get_the_excerpt($post->ID);
                $thumbnail =  get_the_post_thumbnail_url($post->ID);
                $permalink = get_the_permalink($post->ID);
                ?>
                <a href="<?php echo $permalink ?>" class="col">
                    <div class="border">
                    <img src="<?php echo $thumbnail ?>" alt="" style="min-height: 150px;object-fit: cover;">
                    <div class="p-2">
                        <h3 style="font-size: 14px;"><?php echo $title ?></h3>
                        <span style="color: #757B71">Read More</span>
                    </div>
                    </div>
                </a>
                <?php 
                endwhile;
            
                wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>
<?php get_footer();?>