<?php 

/**
 * 
 * Template Name: Special Offers
 * Template Post Type: special-offers, page
 */

get_header();?>

<section class="pt-120">
    <div class="container">
        <div class="col-md-8 mx-auto">
            <h1 class="c-brown pt-5 pb-3"><?php the_field('title'); ?></h1>
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="w-100 pb-4">

            <a href="" class="btn cus-btn-header c-green" data-bs-toggle="modal" data-bs-target="#exampleModal"> + make appointment</a>

            <div class="content">
                <div class="pt-5 pb-4">
                    <?php the_content() ?>
                </div>
<?php
                $image_before = get_field('image_before');
                $image_after = get_field('image_after');
                if($image_before || $image_after):
                ?>
                <div class="pb-5">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center d-none d-md-block">
                        <p>Before</p>
                    </div>
                    <div class="col-md-8">
                        <div class="example">
                            <img src="<?php echo $image_before['url']?>" alt="Before" />
                            <img src="<?php echo $image_after['url']?>" alt="After" />
                        </div>
                    </div>
                    <div class="col-md-2 text-center d-none d-md-block">
                        <p>After</p>
                    </div>
                </div>
                </div>
                <?php endif; ?>
                <?php
                $accordion = get_field('accordion');
                if($accordion){
                    $count = 1;
                    foreach ($accordion as $acc) { ?>
                        <div class="accordion border-0" id="accordion-<?php echo $count;?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-<?php echo $count;?>">
                                <button class="accordion-button ps-0 <?php if($count > 1){ echo "collapsed"; }?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $count;?>" aria-expanded="true" aria-controls="collapse-<?php echo $count;?>"  style="box-shadow: none;">
                                    <p class="h4 c-brown"><?php echo $acc['title'] ?></p>
                                </button>
                                </h2>
                                <div id="collapse-<?php echo $count;?>" class="accordion-collapse collapse <?php if($count == 1){ echo "show"; }?>" aria-labelledby="heading-<?php echo $count;?>" data-bs-parent="#accordion-<?php echo $count;?>" >
                                <div class="accordion-body ps-0">
                                    <?php echo $acc['deskripsi'] ?>
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                $count++;    
                }
                    
                    }
                    
                ?>
                


            </div>
        </div>

        <div class="col-md-10 mx-auto py-7">
            <div class="ls-20 text-center pb-5" data-aos="fade-up" data-aos-duration="500">
                <h2 class="fw-bold fs-50 text-uppercase" ><?php echo get_field('title_home',68)?></h2>
                <div class="sparator mx-auto mt-4"></div>
            </div>
            <div class="owl-carousel owl-theme slider-carousel" data-aos="fade-up" data-aos-duration="500">
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
                        $thumbnail =  get_the_post_thumbnail_url($post->ID);
                        $permalink = get_the_permalink($post->ID);
                        ?>
                        <a href="<?php echo $permalink ?>" class="item">
                            <div class="box p-4 p-md-0">
                                <div class="img-hover img-treatment">
                                    <img src="<?php echo $thumbnail ?>" class="w-100" alt="">
                                    <div class="overlay">
                                        <span class="text cus-href">find out more</span>
                                    </div>
                                </div>
                                <div class="p-4 text-center">
                                    <h3 class="c-blue h5 fw-light text-uppercase"><?php echo $title?></h3>
                                </div>
                            </div>
                        </a>
                        <?php 
                        endwhile;
                    
                        wp_reset_postdata(); 
                    ?>    
                </div>
                <div class="text-center py-4">
                    <a class="read-more" href="<?php echo bloginfo('url')?>/treatments" title="">+ see all treatment</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>