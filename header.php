<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php if (is_home()): ?>
    <section class="col-md-12" id="primary-content">
    <?php else: ?>
    <section class="col-md-12" id="primary-content" style="background:url(<?=get_the_post_thumbnail_url()?>) no-repeat fixed">
    <?php endif; ?>
        <header class="col-md-12">
            <nav class="col-md-12" id="menu-principal">
                <div class="container">
                    <div class="col-md-6">
                        <div id="logo" class="pull-left">
                            <span> <a href="<?=home_url();?>">Logo</a> </span>
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
        <?php if (is_home()): ?>
        <main class="col-md-12">
            <div class="container" id="page-title-holder">
                <h1> Lorem Ipsum </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in pulvinar sapien. Phasellus nec rutrum arcu. Duis feugiat rhoncus eros. Nullam ac congue turpis.</p>
            </div>
        </div>
        <?php endif; ?>
        <?php if (!is_home()): ?>
        <main class="col-md-12">
            <div class="container" id="page-title-holder">
                <h1> <?=get_the_title(); ?> </h1>
            </div>
        </div>
        <?php endif; ?>
    </section>