<?php
    /** 
    * Template Name: Single Post
    * @package magnorion
    * @since 1.0 
    */

    get_header();
?>
<section id="single-content" class="container container-holder">
    <article class="col-md-8">
        <?php while (have_posts()) {
            the_post();
            the_content();
        } ?>
    </article>
    <aside class="col-md-4">
        <h3> Categorias </h3>
        <ul>
            <li> item 1 </li>
            <li> item 2 </li>
            <li> item 3 </li>
            <li> item 4 </li>
        </ul>
    </aside>
</section>
<?php get_footer(); ?>