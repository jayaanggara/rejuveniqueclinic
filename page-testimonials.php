<?php 

/**
 * 
 * Template Name: Testimonials
 */

get_header();?>
<div class="pt-50">
<?php 
    $image = get_field('image');
    if( !empty( $image ) ): ?>
    <header class="header-special" style="background-image: url('<?php echo esc_url($image['url']); ?>'); height:50vh" data-enllax-ratio=".5" data-enllax-direction="vertical">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="">
                    <span data-aos="fade-up" data-aos-duration="500">Rejuvenique</span>
                    <h1 data-aos="fade-up" data-aos-duration="500"><?php echo get_the_title(); ?></h1>
                    <p data-aos="fade-up" data-aos-duration="500"><?php the_field('deskripsi'); ?></p>
                </div>
            </div>
        </div>
    </header>
    <?php endif; ?>
</div>

<section>
    <div class="container py-5">
    <?php echo do_shortcode('[wprevpro_usetemplate tid="2"]')  ?>
    </div>
</section>

<?php get_footer();?>