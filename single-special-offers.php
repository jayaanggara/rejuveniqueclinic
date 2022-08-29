<?php get_header();?>
<?php 
$image = get_field('image_landscape');
if( !empty( $image ) ): ?>
<header class="header-special" style="background-image: url('<?php echo esc_url($image['url']); ?>');" data-enllax-ratio=".5" data-enllax-direction="vertical">

</header>
<?php endif; ?>
<section>
    <div class="container">
        <div class="mx-auto border text-center py-5 bg-white" style="position: relative;top: -70px;">
            <h1 class="h3"><?php the_title(); ?></h1>
            <span>Valid Until 21 November 2022</span>
        </div>

        <div class="border-bottom pb-4 mb-4">
            <?php the_content();?>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div>
            <h2>Another Special Offers</h2>
        </div>
        <div class="row row-cols-md-4 row-cols-2 pb-5 pt-2">
            <?php
                
                $args = array(  
                    'post_type' => 'special-offers',
                    'post_status' => 'publish',
                    'posts_per_page' => 8, 
                    'orderby' => 'title', 
                    'order' => 'ASC', 
                    'post__not_in' => array (get_the_ID()),
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
                    <img src="<?php echo $thumbnail ?>" alt="">
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