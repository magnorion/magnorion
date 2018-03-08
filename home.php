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
                <?= the_post_thumbnail( "thumbnail" ) ?>
                <span> <?= get_the_title(); ?> </span>
                <p> <?= get_the_excerpt(); ?> </p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<section class="col-md-12 container-holder" id="home-main-form">
    <div class="container">
        <h2> <span>Formulário de Contato</span></h2>
        <div class="col-md-6">
            <?= do_shortcode('[contact-form-7 id="12" title="Contact form 1"]'); ?>
        </div>
        <div class="form-content-box col-md-6">
            <img src="<?=ASSETS;?>/images/user1-150x150.png" class="img-responsive img-circle center-block">
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae purus leo. Integer ut leo vel quam aliquam pellentesque quis eu libero. Phasellus at sapien mi. Integer ornare leo id porta consequat. Vivamus ut nisi placerat, facilisis nibh in, lacinia nulla. Proin viverra ut nunc ac aliquam. Praesent pharetra, elit vitae commodo tempus, velit nisl egestas diam, in scelerisque metus mauris id massa. </p>
        </div>
    </div>
</section>
<?php get_footer(); ?>
