    <?php wp_footer(); ?>
    <section class="col-md-12 container-holder" id="home-main-form">
        <div class="container">
            <h2> <span>Formulário de Contato</span></h2>
            <div class="form-content-box col-md-6">
                <img src="<?=ASSETS;?>/images/user1-150x150.png" class="img-responsive img-circle center-block">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae purus leo. Integer ut leo vel quam aliquam pellentesque quis eu libero. Phasellus at sapien mi. Integer ornare leo id porta consequat. Vivamus ut nisi placerat, facilisis nibh in, lacinia nulla. Proin viverra ut nunc ac aliquam. Praesent pharetra, elit vitae commodo tempus, velit nisl egestas diam, in scelerisque metus mauris id massa. </p>
            </div>
            <div class="col-md-6">
                <?= do_shortcode('[contact-form-7 id="12" title="Contact form 1"]'); ?>
            </div>
        </div>
    </section>
    <footer class="col-md-12">
        <div class="container">
            <div id="logo">
                <span> <a href="">Logo</a> </span>
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