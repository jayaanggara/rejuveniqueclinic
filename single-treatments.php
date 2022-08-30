<?php 

/**
 * 
 * Template Name: Special Offers
 * Template Post Type: special-offers, page
 */

get_header();?>

<section class="pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <!-- Place somewhere in the <body> of your page -->
                <div id="slider-tret" class="flexslider mb-2">
                    <ul class="slides">
                    <?php 
                    $images = get_field('gallery');
                    if( $images ): ?>
                            <?php foreach( $images as $image ): ?>
                                <li>
                                    <img src="<?php echo esc_url($image['url']); ?>" />
                                </li>
                            <?php endforeach; ?>
                    <?php endif; ?>
                        
                        <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
                <div id="carousel-tret" class="flexslider">
                <ul class="slides">
                    <?php 
                    $images = get_field('gallery');
                    if( $images ): ?>
                            <?php foreach( $images as $image ): ?>
                                <li>
                                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" />
                                </li>
                            <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- items mirrored twice, total of 12 -->
                </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="pt-md-5">
                    <h1 class="h2 c-green mb-3" data-aos="fade-up" data-aos-duration="500"><?php the_title(); ?></h1>
                    <p class="fw-bold h4 mb-4 c-green" data-aos="fade-up" data-aos-duration="500"><?php the_field('price')?></p>
                    <p data-aos="fade-up" data-aos-duration="500"><?php the_field('sec_descriptions')?></p>
                    <a href="#" class="btn mt-0 cus-btn-footer text-white" data-aos="fade-up" data-aos-duration="500" data-bs-toggle="modal" data-bs-target="#exampleModal"> Book Now </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-5">
    <nav>
    <div class="nav nav-tabs tabs-tret" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">description</button>
        <button class="nav-link" id="nav-other-serv-tab" data-bs-toggle="tab" data-bs-target="#nav-other-serv" type="button" role="tab" aria-controls="nav-other-serv" aria-selected="false">Other Service</button>
    </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab" tabindex="0">
            <div class="py-3">
                <?php the_content() ?>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-other-serv" role="tabpanel" aria-labelledby="nav-other-serv-tab" tabindex="0">
            <div class="row row-cols-md-4 row-cols-2 pb-5 pt-2">
                <?php
                    $args = array(  
                        'post_type' => 'treatments',
                        'post_status' => 'publish',
                        'posts_per_page' => 4, 
                        'orderby' => 'title', 
                        'order' => 'ASC', 
                    );
                
                    $loop = new WP_Query( $args ); 
                        
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $title = get_the_title($post->ID);
                    $price = get_field('price', $post->ID);
                    $thumbnail =  get_the_post_thumbnail_url($post->ID);
                    $permalink = get_the_permalink($post->ID);
                    ?>
                    <a href="<?php echo $permalink ?>" class="col pt-md-0 pt-3">
                        <div class="border">
                        <img src="<?php echo $thumbnail ?>" alt="" style="min-height: 150px;object-fit: cover;">
                        <div class="p-2">
                            <h3 style="font-size: 14px;"><?php echo $title ?></h3>
                            <p class="fw-bold mb-1 c-green"><?php echo $price ?></p>
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
    </div>

    </div>
</section>

<?php get_footer();?>