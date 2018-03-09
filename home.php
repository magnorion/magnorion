<?php 
    /**
    * Template Name: Home
    * @since 1.0
    * @package magnorion
    */
    get_header();
    $destaques = mainPosts();
?>
<section class="col-md-12 container-holder" id="home-main-posts">
    <div class="container">
        <h2> <span>Posts em Destaques</span></h2>
        <div class="row-posts">
            <?php while ($destaques->have_posts()): $destaques->the_post(); ?>
            <div class="box-posts-content">
                <a href="<?=get_the_permalink();?>">
                    <img class="img-circle" src="<?=get_the_post_thumbnail_url();?>" alt="">
                    <span> <?= get_the_title(); ?> </span>
                    <p> <?= get_the_excerpt(); ?> </p>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
