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
    <header class="col-md-12">
        <nav class="col-md-12" id="menu-principal">
            <div class="container">
                <div class="col-md-6" id="logo">
                    <span>
                        <a href="<?=home_url(); ?>">
                            magnorion
                        </a>
                    </span>
                </div>
                <div class="col-md-6" id="menu-primary-holder">
                    <ul id="primary" class="pull-right">
                        <li> Home Page </li>
                        <li> Projetos </li>
                        <li> Sobre </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="col-md-12" id="primary-content">
        <div class="container">
            <div id="page-title-holder">
                <h1> Full-Stack Developer </h1>
                <p> Desenvolveor PHP e NODE.js <br> Fotógrafo e Baixista nas horas vagas. </p>
            </div>
        </div>
    </section>