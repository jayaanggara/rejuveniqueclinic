<?php get_header();?>
<div class="pt-50">

</div>
<?php 
$image = get_the_post_thumbnail_url();
if( !empty( $image ) ): ?>
<header class="header-special" style="background-image: url('<?php echo $image; ?>'); height:50vh;" data-enllax-ratio=".5" data-enllax-direction="vertical">
    
</header>
<?php endif; ?>
<div class="container">
        <div class="row bg-white border align-items-center g-0 page-kontak-con">
            <div class="col-md-6">
            <div class="map-container row g-0">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.2935941877236!2d115.14458491538124!3d-8.663603290561037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24776ed7ad809%3A0x305c1793e5312a6e!2sRejuvenique%20Aesthetics%20Clinic%2C%20Canggu!5e0!3m2!1sid!2sid!4v1665286131908!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.9737468555463!2d115.2614833153815!3d-8.694042690969878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241e20bfd9573%3A0xdddeea0348344005!2sRejuvenique%20Aesthetics%20Clinic%2C%20Sanur!5e0!3m2!1sid!2sid!4v1665286025434!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            </div>
            <div class="col-md-6 px-md-4 py-md-0 py-4 px-3">
                <div>
                    <p>CONTACT US</p>
                    <h2>Have questions? Get in touch!</h2>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="124" title="Contact form"]')?>
            </div>
        </div>
    </div>
<?php get_footer();?>