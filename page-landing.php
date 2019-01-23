<?php get_header();

/*
    Template Name: Landing Page
*/ ?>
<div class="landing-bg">

    <!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
<p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</p>
<![endif]-->

    <div class="top-header <?php if(!is_front_page()) : ?>internal<?php endif; ?>">
        <div class="container">
            <div class="v-align row">
                <div class="col-xs-12 navbar-button text-center">

                    <a class="navbar-brand d-lg-block d-none" href='<?php echo get_site_url(); ?>'><img
                            src="<?php echo get_template_directory_uri(); ?>/landing/img/build/logo.png"
                            alt="<?php echo get_bloginfo(
                        'description'
                    ); ?>" /></a>

                    <p>
                        Call Today <a href="tel:18774439828">1-(877)-443-9828</a>
                    </p>


                    <div class="navbar-right d-none d-lg-flex">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <section class="home-module-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="extra-padding">
                        <h1>
                            20 ACRES
                            <span class="large">$18,800 | $0 DOWN | $148/MONTH</span>
                            <span class="small">Payments start at $148/Month</span>
                        </h1>

                        <h2>Anyone can afford land!
                            <span class="small">Make your dreams come true!</span>
                        </h2>

                        <h3>Lone Star Guarantee</h3>

                        <p>No explanation needed, no questions asked. If you find you like a <span
                                class="br-md">particular
                                part of our subdivision better, we will gladly exchange your <span class="br-md">track
                                    for
                                    one that’s available so long as the prices are equal at any time. <span
                                        class="br-md">Your satisfaction is our number one priority!</span></span></span>
                        </p>
                    </div>


                </div>

                <div class="col col-lg-5">
                    <div id="contact-form">
                        <div class="contact-top">
                            <p>Submit Information To View Our Available Lots</p>
                        </div>
                        <?php if ($_SERVER['REMOTE_ADDR'] == 'localhost') {
                    echo do_shortcode('[contact-form-7 id="11" title="Contact Form"]');
                    } else {
                    echo do_shortcode('[contact-form-7 id="11" title="Contact Form"]');
                    }
                    ?>

                        <div class="contact-bottom">
                            <p>Call today for more <span class="br-xs">information<span class="br-md">
                                        about this once in <span class="br-xs">a lifetime
                                            opportunity.</span></span></span></p>

                            <a href="tel:18774439828">1-(877)-443-9828</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/landing/img/build/bg-banner.png" class="banner"
            alt="Looking To Save More">

</div>
</section>

<section class="home-module-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="extra-padding">
                    <ul class="arrows">
                        <li><span>No down payment</span></li>
                        <li><span>No qualifying or credit check</span></li>
                        <li><span>Money back guarantee</span></li>
                        <li><span>Road access with street signs</span></li>
                        <li><span>Free property the tour 7 days a week</span></li>
                        <li><span>All tracts have been surveyed by a licensed professional Surveyer</span></li>
                        <li><span>Thousands of satisfied customers</span></li>
                        <li><span>A+ rating with the Better Business Bureau for more than 25 years</span></li>
                    </ul>

                    <p>Lone Star Investments is a proud member in good standing with the BBB in El Paso, Texas,
                        maintaining
                        an A+ rating and has pledged to observe the highest ethical. </p>

                    <img src="<?php echo get_template_directory_uri(); ?>/landing/img/build/bbb.png"
                        alt="Better Business Bureau">
                </div>
            </div>

            <div class="col">
                <div class="extra-padding">
                    <h2>Money back <strong>guarantee!</strong>
                        <span>
                            This is the land deal you've been waiting for!
                        </span>

                    </h2>


                    <ul class="arrows">
                        <li><span>Huge 20 to 100 Acre Properties | <a href="">Own your own ranch!</a></span></li>
                        <li><span>Conveniently Located just 55 Min. East of El Paso & 30 Min.
                                & West of Van Horn Texas</span></li>
                        <li><span>Owner Financing | <a href="">Lowest rates available for limited time only!</a></span>
                        </li>
                        <li><span>Unspoiled, Breathtaking Mountain Views</span></li>
                    </ul>

                    <h2>What you can do with your land</h2>

                    <ul class="columns arrows">
                        <li><span>Investment</span></li>
                        <li><span>Hunting</span></li>
                        <li><span>Farming</span></li>
                        <li><span>Hiking</span></li>

                        <li><span>Recreational</span></li>
                        <li><span>Ranching</span></li>
                        <li><span>RV’s</span></li>
                        <li><span>Camping</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ribbon">
    <img src="<?php echo get_template_directory_uri(); ?>/landing/img/build/off-grid-living.svg"
        alt="Living Off the Grid" height="90">
</section>

<iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13567.017308371021!2d-106.4702999!3d31.7771859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a590f7fc47d1518!2sLone+Star+Investments!5e0!3m2!1sen!2sus!4v1548174379855"
    width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
<section id="footer">
    <div class="container">

        <div class="row">
            <div class="col logo-footer">
                <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                        src="<?php echo get_template_directory_uri(); ?>/landing/img/build/logo.png"
                        alt="<?php echo get_bloginfo( 
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

                            <p><a href="tel:18774439828">1 - (877) - 443 - 9828</a><br />
                                <a href="tel:9155325263">(915) 532-5263</a></p>
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

                        <a href="https://www.lonestarinvestments.com/contact/"><button class="btn btn-primary">Buy 20
                                acres
                                NOW!</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row button-footer d-md-none">


            <div class="col">
                <ul class="list-inline social-media sm">
                    <li><a href="http://facebook.com/"
                            class="facebook-button social-media-button sm square lighten external" target="_blank"><i
                                class="fab fa-facebook-f fa-fw "><span>Facebook</span></i></a></li>
                    <li><a href="http://twitter.com/"
                            class="twitter-button social-media-button sm square lighten external" target="_blank"><i
                                class="fab fa-twitter fa-fw "><span>Twitter</span></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="sub-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <ul class="list-inline social-media sm">
                    <li><a href="https://www.facebook.com/openrangeranches/"
                            class="facebook-button social-media-button sm square lighten external" target="_blank"><i
                                class="fab fa-facebook-f fa-fw "><span>Facebook</span></i></a></li>
                    <li><a href="https://twitter.com/Invest_inEP"
                            class="twitter-button social-media-button sm square lighten external" target="_blank"><i
                                class="fab fa-twitter fa-fw "><span>Twitter</span></i></a></li>
                </ul>
            </div>
            <div class="col">
                <p class="small">
                    &copy;
                    <?php echo date('Y'); ?>
                    LONE STAR INVESTMENTS | All Rights Reserved | Refund/Exchange
                </p>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>