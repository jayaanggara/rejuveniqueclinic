<?php 

/**
 * 
 * Template Name: treatment
 * Template Post Type: special-offers, page
 */

get_header();?>

<div class="pt-50">
<?php 
    $image = get_field('image', 68);
    if( !empty( $image ) ): ?>
    <header class="header-special" style="background-image: url('<?php echo esc_url($image['url']); ?>'); height:50vh" data-enllax-ratio=".5" data-enllax-direction="vertical">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="text-center col-md-6 mx-auto">
                    <h1 data-aos="fade-up" data-aos-duration="500"><?php echo get_the_title(68); ?></h1>
                    <p class="border-0 p-0" data-aos="fade-up" data-aos-duration="500"><?php echo the_field('deskripsi',68); ?></p>
                </div>
            </div>
        </div>
    </header>
    <?php endif; ?>
</div>

<section>
    <div class="container py-7">
        <div class="col-md-10 mx-auto">
            <div class="row row-cols-md-3 row-cols-2 justify-content-center">
            <?php
                    $args = array(  
                        'post_type' => 'treatments',
                        'post_status' => 'publish',
                        'posts_per_page' => 15, 
                        'orderby' => 'title', 
                        'order' => 'ASC', 
                    );
                
                    $loop = new WP_Query( $args ); 
                        
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $title = get_the_title($post->ID);
                    $deskripsi = get_the_excerpt($post->ID);
                    $thumbnail =  get_the_post_thumbnail_url($post->ID, 'news-thumb');
                    $permalink = get_the_permalink($post->ID);
                    ?>
                    <a href="<?php echo $permalink ?>" class="col mb-5">
                        <div class="box">
                            <div class="img-hover img-treatment mb-3">
                                <img src="<?php echo $thumbnail ?>" class="w-100" alt="">
                                <div class="overlay">
                                    <span class="text cus-href">find out more</span>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="c-blue h4 text-uppercase"><?php echo $title?></h3>
                            </div>
                        </div>
                    </a>
                    <?php 
                    endwhile;
                
                    wp_reset_postdata(); 
                ?>
                
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>