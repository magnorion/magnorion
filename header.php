<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= titlePage(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php if (is_home() || is_front_page()): ?>
    <section class="col-md-12" id="primary-content">
        <header class="col-md-12">
            <nav id="menu-principal">
                <div class="container">
                    <div class="col-md-6">
                        <div id="logo" class="pull-left">
                            <span> <a href="<?=home_url();?>"><?php bloginfo("name"); ?></a> </span>
                        </div>
                    </div>
                    <div class="col-md-6" id="menu-primary-holder">
                        <?php wp_nav_menu( [
                            "menu_class" => "pull-right",
                            "menu_id" => "primary",
                            "menu" => 2
                        ] )?>
                    </div>
                </div>
            </nav>
        </header>
        <main class="col-md-12">
            <div class="container" id="page-title-holder">
                <?php while (have_posts()): the_post(); ?>
                <h1> <?php the_title(); ?> </h1>
                <p> <?php the_content(); ?> </p>
                <?php endwhile; ?>
            </div>
        </main>
    </section>
    <?php else: ?>
    <header class="col-md-12 page-nav">
        <nav class="col-md-12" id="menu-principal">
            <div class="container">
                <div class="col-md-6">
                    <div id="logo" class="pull-left">
                        <span> <a href="<?=home_url();?>"><?php bloginfo("name"); ?></a> </span>
                    </div>
                </div>
                <div class="col-md-6" id="menu-primary-holder">
                    <?php wp_nav_menu( [
                        "menu_class" => "pull-right",
                        "menu_id" => "primary",
                        "menu" => 2
                    ] )?>
                </div>
            </div>
        </nav>
    </header>
    <?php $pageStructure = getPageStructure(get_the_id(), false); ?>
    <section class="col-md-12 page-primary-content" id="primary-content" style="background: url(<?=$pageStructure["image"];?>) 100% no-repeat">
        <main class="col-md-12">
            <div class="container" id="page-title-holder">
                <h1> <?=$pageStructure["title"]; ?> </h1>
            </div>
        </main>
    </section>
    <?php endif; ?>