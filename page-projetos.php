<?php
/**
 * Template name: Pagina projetos
 */
get_header();
$projetos = new WP_Query([
    'post_type' => 'post', 
    'posts_per_page' => -1
    ]);
?>

<section id="all-posts" class="container container-holder">
    <div class="col-md-8">
        <?php while($projetos->have_posts()): $projetos->the_post(); ?>
        <div class="box-posts-content">
            <a href="<?=get_the_permalink();?>">
            <div class="post-circle-box col-md-4 pull-left">
                <img src="<?=get_the_post_thumbnail_url();?>" alt="">
            </div>
            <div class="post-detail col-md-8 pull-right">
                <span> <?= get_the_title(); ?> </span>
                <p> <?= get_the_excerpt(); ?> </p>
            </div>
            </a>
        </div>
        <?php endwhile; ?>
    </div>
    <aside class="col-md-4 pull-right">
        <h3> Categorias </h3>
        <ul>
            <?php wp_list_categories(["title_li" => ""]); ?>
        </ul>
    </aside>
</section>

<section id="single-content" class="page-content container container-holder">
    <article class="col-md-12">
        <?php while (have_posts()) {
            the_post();
            the_content();
        } ?>
    </article>
</section>

<?php get_footer(); ?>