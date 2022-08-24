<?php get_header();?>
<div class="container py-6">
    <div class="col-md-8 mx-auto pt-5">
        <h1 class="text-center title-section"><?= the_title();?></h1>
        <div class="d-flex flex-wrap justify-content-center py-4">
            <span class="pe-3 pt-3">
                <i class="fa fa-user"></i> <?php the_post(); the_author();  ?>
            </span>
            <span class="pe-3 pt-3">
                <i class="fa fa-calendar"></i> <?= get_the_date();?>
            </span>
        </div>
        <?= the_content();?>
    </div>
</div>
<?php get_footer();?>