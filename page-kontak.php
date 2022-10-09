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
            <iframe src="https://www.google.com/maps/d/embed?mid=1-t8vCHmo8f7natFO75EORxyVm9j9mEA&hl=en&ehbc=2E312F" width="640" height="480"></iframe>
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