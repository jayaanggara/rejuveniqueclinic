<?php 

/**
 * 
 * Template Name: Blog
 */

get_header();?>
<div class="container pt-120">
    <div class="row">
        <div class="col-md-8">
        <?php
            $args = array(  
                'post_type' => 'post',
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
            $date = get_the_date();
            $author = get_the_author($post->ID);
            ?>
            <a href="<?php echo $permalink; ?>">
                <img src="<?php echo $thumbnail?>" alt="" class="w-100">
                <div class="py-4">
                    <h2><?php echo $title; ?></h2>
                    <p class="fw-light"><span><?php echo $date; ?></span><span> . <?php echo $author; ?></span></p>
                    <p><?php echo $deskripsi; ?></p>
                    <span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                </div>
            </a>
            <?php 
            endwhile;

            wp_reset_postdata(); 
        ?>
        </div>
        <div class="col-md-4">
            <h2 class="h3 pb-4">Recent Posts</h2>
            <div>
            <?php
            $args = array(  
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 8, 
                'orderby' => 'title', 
                'order' => 'RAND', 
            );

            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post();
            $title = get_the_title($post->ID);
            $deskripsi = get_the_excerpt($post->ID);
            $thumbnail =  get_the_post_thumbnail_url($post->ID);
            $permalink = get_the_permalink($post->ID);
            $date = get_the_date();
            $author = get_the_author($post->ID);
            ?>
            <a href="<?php echo $permalink; ?>" class="row g-3 align-items-center">
            <div class="col-md-4">
                <img src="<?php echo $thumbnail?>" alt="" class="w-100" style="height: 100px;object-fit: cover;">
            </div>
            <div class="col-md-8">
                <p class="mb-0 fw-light"><span><?php echo $date; ?></span><span> . <?php echo $author; ?></span></p>
                <h2 style="font-size:14px"><?php echo $title; ?></h2>
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
<?php get_footer();?>