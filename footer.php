<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13567.017308371021!2d-106.4702999!3d31.7771859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a590f7fc47d1518!2sLone+Star+Investments!5e0!3m2!1sen!2sus!4v1548174379855"
    width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
<section id="footer">
    <div class="container">

        <div class="row">
            <div class="col logo-footer">
                <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png" alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>" /></a>
            </div>
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

                            <p>1 - (877) - 443 - 9828<br />
                                (915) 532-5263</p>
                            <p>2126 Montana Ave.<br />
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
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <?php
                        $sm = new SocialMedia(array('facebook', 'twitter'));
                        $sm->setSize('sm');
                        $sm->showNetworkButtons();
                        $sm->setColorType('singleColor');
                        ?>
            </div>
            <div class="col">
                <p class="small">
                    &copy;
                    <?php echo date('Y'); ?>
                    <?= SITENAME ?> | All Rights Reserved | Refund/Exchange
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