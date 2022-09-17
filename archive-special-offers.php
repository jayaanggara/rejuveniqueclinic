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
            <div class="col-lg-8 mx-auto h-100">
                <div class="row h-100 align-items-center">
                    <div class="">
                        <span data-aos="fade-up" data-aos-duration="500"><?php the_field('sec_title', 15); ?></span>
                        <h1 data-aos="fade-up" data-aos-duration="500"><?php echo get_the_title(15); ?></h1>
                        <p data-aos="fade-up" data-aos-duration="500"><?php the_field('deskripsi', 15); ?></p>
                    </div>
                </div> 
            </div>
        </div>
    </header>
    <?php endif; ?>
</div>

<section>
    <div class="container pt-7 pb-5">
        
            <div class="col-lg-8 mx-auto overflow-hidden">
            <?php
                $args = array(  
                    'post_type' => 'special-offers',
                    'post_status' => 'publish',
                    'posts_per_page' => 1, 
                    'order' => 'DESC', 
                );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post();
                $title = get_the_title($post->ID);
                $deskripsi = get_the_excerpt($post->ID);
                $thumbnail =  get_the_post_thumbnail_url($post->ID);
                $permalink = get_the_permalink($post->ID);
                ?>
                    <div class="row align-items-center" style="background: #DCDEDB;">
                        <div class="col-md-5">
                            <img src="<?php echo $thumbnail;?>" class="w-100" alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="p-md-0 p-4">
                                <h2 class="h4 fw-bold text-dark"><?php echo $title ?></h2>
                                <p style="color: #757B71;"><?php echo $deskripsi ?></p>
                                <a href="<?php echo $permalink?>" style="color: #757B71">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                <?php 
                endwhile;
            
                wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="col-md-8 mx-auto">
        <div class="row row-cols-md-2 row-cols-2 pb-7 pt-2">
            <?php
                $args = array(  
                    'post_type' => 'special-offers',
                    'post_status' => 'publish',
                    'posts_per_page' => 3, 
                    'order' => 'DESC', 
                );
            
                $loop = new WP_Query( $args ); 
                $count = 1;
                while ( $loop->have_posts() ) : $loop->the_post();
                $title = get_the_title($post->ID);
                $deskripsi = get_the_excerpt($post->ID);
                $thumbnail =  get_the_post_thumbnail_url($post->ID);
                $permalink = get_the_permalink($post->ID);
                
                ?>
                <a href="<?php echo $permalink ?>" class="col <?php if($count == 1) echo "d-none"; ?>">
                    <div class="border">
                    <img src="<?php echo $thumbnail ?>" alt="" class="w-100" style="height: 200px;object-fit: cover;">
                    <div class="p-2">
                        <h3 class="h4"><?php echo $title ?></h3>
                        <span style="color: #757B71">Read More</span>
                    </div>
                    </div>
                </a>
                <?php 
                 $count++;
                endwhile;
                
                wp_reset_postdata(); 
            ?>
        </div>
        </div>
    </div>
</section>
<?php get_footer();?>