<?php get_header(); ?>
<section id="single-content" class="container container-holder">
    <article class="col-md-12">
        <?php while (have_posts()) {
            the_post();
            the_content();
        } ?>
    </article>
</section>
<?php get_footer(); ?>