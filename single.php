<?php get_header();?>
<?php 
$image = get_field('image_landscape');
if( !empty( $image ) ): ?>
<header class="header-special" style="background-image: url('<?php echo esc_url($image['url']); ?>');" data-enllax-ratio=".5" data-enllax-direction="vertical">

</header>
<?php endif; ?>
<section>
    <div class="container">
        <div class="col-lg-8 mx-auto">
            <div class="mx-auto border text-center p-md-5 p-3 bg-white" style="position: relative;top: -70px;">
                <h1 class="h3"><?php the_title(); ?></h1>
                <span><?php echo get_the_date() ?></span>
            </div>
        </div>

        <div class="border-bottom pb-4 mb-4 col-lg-8 mx-auto">
            <?php the_content();?>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-lg-8 mx-auto">
            <div>
                <h2 class="h4">Another Blog</h2>
            </div>
            <div class="row row-cols-md-2 row-cols-2 pb-5 pt-2">
                <?php
                    
                    $args = array(  
                        'post_type' => 'post',
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
                        <img src="<?php echo $thumbnail ?>" alt=""  class="w-100" style="height: 200px;object-fit: cover;">
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
    </div>
</section>
<?php get_footer();?>