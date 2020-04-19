    <?php wp_footer(); ?>
    <section class="col-md-12 container-holder" id="home-main-form">
        <div class="container">
            <h2> <span>Contato</span></h2>
            <div class="form-content-box col-md-6">
                <img src="<?=ASSETS;?>/images/user1-150x150.jpg" class="img-responsive img-circle center-block">
                <p> Meu nome é Lucas Dias Lopes, sou <strong> Web Developer </strong> a 5 anos. 
                    <br> Gosto do que eu faço e procuro estar sempre atualizado nas ultimas ferramentas e tecnologias usadas nesta área! 
                    <br> Nas horas vagas eu sou <strong> fotógrafo </strong> ( amador ) e <strong> baixista </strong> em uma banda de heavy metal.</p>
                <p> Entre em contato para iniciarmos algum projeto! </p>
            </div>
            <div class="col-md-6">
                <?= do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
            </div>
        </div>
    </section>
    <footer class="col-md-12">
        <div class="container">
            <div id="logo">
                <span> <a href="<?=home_url();?>"><?php bloginfo("name"); ?></a> </span>
            </div>
            <div class="col-md-6 footer-box">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in pulvinar sapien. Phasellus nec rutrum arcu. Duis feugiat rhoncus eros. Nullam ac congue turpis. </p>
            </div>
            <div class="col-md-6 footer-box right">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
        </div>
    </footer>
    </body>
</html>