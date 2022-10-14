<?php 
/**
 * 
 * Template Name: Home
 * 
 */

get_header();?>
<div class="pt-50">
<?php
$header = get_field('header');
if( $header ): ?>
    <header class="header-home"  style="background-image: url('<?php if ( wp_is_mobile() ) { echo esc_url( $header['image_mobile']['url'] ); } else { echo esc_url( $header['image']['url'] ); } ?>')" data-enllax-ratio=".5" data-enllax-direction="vertical">
    <div class="position-relative h-100">
        <div style="background: rgba(0, 0, 0, 0.5);width: 100%;height: 100%;position: absolute;top: 0;left: 0;"></div>
    
        <div class="container py-7">
            <div class="col-md-5 container-text ">
                <h1 data-aos="fade-up" data-aos-duration="500"><?php echo $header['title']; ?></h1>
                <p class="text-white fs-20" data-aos="fade-up" data-aos-duration="500"><?php echo $header['deskripsi']; ?></p>
                <a href="" class="btn cus-btn-header c-green" data-aos="fade-up" data-aos-duration="500" data-bs-toggle="modal" data-bs-target="#exampleModal"> + make appointment</a>
            </div>
        </div>
        </div>
    </header>
    <?php endif; ?>
</div>

<section class="bg-brown">
<?php
$about = get_field('about');
if( $about ): ?>
    <div class="container py-7">
        <div class="row align-items-center g-5">
            <div class="col-md-7">
                <div class="row">
                <div class="col-6 pt-5">
                    <img src="<?php echo esc_url( $about['image_1']['url'] ); ?>" alt="" style="width: 100%;border-radius: 10px;" data-aos="fade-up" data-aos-duration="500">
                </div>
                <div class="col-6 pb-5">
                    <img src="<?php echo esc_url( $about['image_2']['url'] ); ?>" alt="" style="width: 100%;border-radius: 10px;" data-aos="fade-up" data-aos-duration="500">
                </div>
                </div>
            </div>
            <div class="col-md-5" data-aos="fade-up" data-aos-duration="500">
                <h2 class="fw-bold h1"><?php echo $about['title']; ?></h2>
                <div class="py-5 mb-0"><?php echo $about['deskripsi']; ?></div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>

<section>
    <div class="container py-5">
        <div class="col-md-10 mx-auto">
            <div class="ls-20 text-center pb-5" data-aos="fade-up" data-aos-duration="500">
                <h2 class="fw-bold fs-50 text-uppercase" ><?php echo get_field('title_home',68)?></h2>
                <div class="sparator mx-auto mt-4"></div>
            </div>
            <div class="owl-carousel owl-theme slider-carousel" data-aos="fade-up" data-aos-duration="500">
            <?php
            $select_product = get_field('select_product',68);
            if($select_product){ ?>
                <?php foreach( $select_product as $sp ): 
                    $permalink = get_permalink( $sp->ID );
                    $title = get_the_title( $sp->ID );
                    $custom_field = get_field( 'field_name', $sp->ID );
                    $thumbnail =  get_the_post_thumbnail_url($sp->ID, 'news-thumb');
                    $thumbnail_custom =  get_field('thumbnail', $sp->ID );
                    ?>
                    <a href="<?php echo $permalink ?>" class="item">
                        <div class="box p-4 p-md-0">
                            <div class="img-hover img-treatment mb-3">
                                <img src="<?php if($thumbnail_custom){ echo $thumbnail_custom['url']; } else { echo $thumbnail; }?>" class="w-100" alt="">
                                <div class="overlay">
                                    <span class="text cus-href">find out more</span>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="c-blue h4 text-uppercase"><?php echo $title?></h3>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php } else {
            ?>
            <?php
                    $args = array(  
                        'post_type' => 'treatments',
                        'post_status' => 'publish',
                        'posts_per_page' => 8, 
                        'orderby' => 'title', 
                        'order' => 'ASC', 
                    );
                
                    $loop = new WP_Query( $args ); 
                        
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $title = get_the_title($post->ID);
                    $deskripsi = get_the_excerpt($post->ID);
                    $thumbnail =  get_the_post_thumbnail_url($post->ID, 'news-thumb');
                    $permalink = get_the_permalink($post->ID);
                    $thumbnail_custom =  get_field('thumbnail', $sp->ID );
                    ?>
                    <a href="<?php echo $permalink ?>" class="item">
                        <div class="box p-4 p-md-0">
                            <div class="img-hover img-treatment mb-3">
                                <img src="<?php if($thumbnail_custom){ echo $thumbnail_custom['url']; } else { echo $thumbnail; }?>" class="w-100" alt="">
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
                }
                ?>    
            </div>
            <div class="text-center py-4">
                <a class="read-more" href="<?php echo bloginfo('url')?>/treatments" title="">+ see all treatment</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-7 pb-5">
        <div class="row align-items-center pb-5" data-aos="fade-up" data-aos-duration="500">
            <div class="col-md-6">
                <h2 class="fs-50 ls-20"><?php echo get_field('title',112)?></h2>
                <div class="sparator mt-4"></div>
            </div>
            <div class="col-md-6 text-md-end py-4">
                <a class="read-more" href="<?php echo bloginfo('url')?>/testimonials" title="">+ see all testimonials</a>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="500">
            <?php echo do_shortcode('[wprevpro_usetemplate tid="2"]')  ?>
        </div>
    </div>
</section>

<section class="d-none">
    <div class="container pt-5 pb-7">
        <div class="row align-items-center py-5" data-aos="fade-up" data-aos-duration="500">
            <div class="col-md-6">
                <h2 class="fs-50 ls-20"><?php echo get_field('title_home',15)?></h2>
                <div class="sparator mt-4"></div>
            </div>
            <div class="col-md-6 text-md-end py-4">
                <a class="read-more" href="<?php echo bloginfo('url')?>/special-offers" title="">+ see all special offers</a>
            </div>
        </div>
        <div class="owl-carousel owl-theme special-offers" data-aos="fade-up" data-aos-duration="500">
        <?php
                    $args = array(  
                        'post_type' => 'special-offers',
                        'post_status' => 'publish',
                        'posts_per_page' => 3, 
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
                <a href="<?php echo $permalink ?>" class="item">
                    <div class="col box">
                        <div class="img-hover img-special">
                            <img src="<?php echo $thumbnail ?>" class="w-100" alt="">
                            <div class="overlay">
                                <span class="text cus-href">find out more</span>
                            </div>
                        </div>
                        <div class="p-4 mb-4">
                            <h3 class="c-green h4 fw-light text-capitalize"><?php echo $title ?></h3>
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

<section class="d-none" style="background-color: #fdfcfa;position:relative;">
<div class="vl mx-auto"></div>
    <div class="container py-7">
        <div class="col-lg-8 mx-auto">
            <div class="row align-items-center pb-5" data-aos="fade-up" data-aos-duration="500">
                <div class="col-md-6">
                    <span class="c-brown h6 fw-bold">News</span>
                    <h2 class="fs-50"><?php echo get_field('title_home',47)?></h2>
                </div>
                <div class="col-md-6 text-md-end py-4">
                    <a class="read-more" href="<?php echo bloginfo('url')?>/blog" title="">+ see all news</a>
                </div>
            </div>
            <div class="owl-carousel owl-theme news" data-aos="fade-up" data-aos-duration="500">
                <?php
                    $args = array(  
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 4, 
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
                    <a href="<?php echo $permalink?>" class="item">
                        <div class="col box p-md-0 p-4">
                            <div class="img-hover img-news">
                                <img src="<?php echo $thumbnail?>" class="w-100" alt="">
                                <div class="overlay">
                                    <span class="text cus-href">find out more</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="c-green fw-light h5 text-capitalize"><?php echo $title?></h3>
                                <p class="mb-0 fw-light"><?php $deskripsi ?></p>
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

<section class="pt-2" data-aos="fade-up" data-aos-duration="500">
    <div class="container pb-7">
        <div class="map-container row g-0">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.2935941877236!2d115.14458491538124!3d-8.663603290561037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24776ed7ad809%3A0x305c1793e5312a6e!2sRejuvenique%20Aesthetics%20Clinic%2C%20Canggu!5e0!3m2!1sid!2sid!4v1665286131908!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.9737468555463!2d115.2614833153815!3d-8.694042690969878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241e20bfd9573%3A0xdddeea0348344005!2sRejuvenique%20Aesthetics%20Clinic%2C%20Sanur!5e0!3m2!1sid!2sid!4v1665286025434!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>