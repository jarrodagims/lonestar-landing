<?php if(is_front_page()) : ?>
<section class="footer-top">
    <img src="<?=IMGURL?>bg-bottom.jpg" alt="">
</section>
<?php endif; ?>
<section id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <div class="row align-items-center">
                    <div class="col logo-footer">
                        <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png"
                                alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>" /></a>
                    </div>
                    <div class="col footer-nav d-none d-lg-flex">
                        <?php echo non_responsive_bs_menu('footer', 'left', SITENAME); ?>
                    </div>
                    <div class="col footer-social d-none d-lg-block">
                        <div>
                            <?php
                        $sm = new SocialMedia(array('facebook', 'twitter'));
                        $sm->setSize('sm');
                        $sm->showNetworkButtons();
                        $sm->setColorType('singleColor');
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col contact-footer">
                <div><span class="title">Contact our Sales Staff:</span>
                    <p>Our Professional Sale Staff will assist you with all your questions, land presentations,
                        locations, and documentation of land parcels.</p>
                </div>
            </div>

            <div class="col location-footer">
                <div><span class="title locations">Contact us at:</span>

                    <div class="footer-block">

                        <div class="hours">

                            <p>1 - (877) - 443 - 9828
                                (915) 532-5263</p>
                            <p>2126 Montana Ave.
                                El Paso, TX 79903</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <span class="title">
                    Hours:
                </span>

                <div class="footer-block">


                    <div class="hours">

                        <p>Mon - Fri: 9am - 5pm | Sat - Sun: (Closed)</p><br />

                        <a href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary">Buy 20 acres NOW!</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row button-footer d-md-none">


            <div class="col">
                <?php
                        $sm = new SocialMedia(array('facebook', 'twitter'));
                        $sm->setSize('sm');
                        $sm->showNetworkButtons();
                        $sm->setColorType('singleColor');
                        ?>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="small">
                    Need Help? <a href="<?=SITEURL?>/contact-us/">Contact Us</a> &copy;
                    <?php echo date('Y'); ?>
                    <?= SITENAME ?> | All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>
</body>

</html>