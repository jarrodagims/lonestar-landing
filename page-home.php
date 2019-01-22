<?php get_header();

/*
    Template Name: Home
*/ ?>
<section class="home-module-1">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    20 ACRES
                    <span class="large">$18,800 | $0 DOWN | $148/MONTH</span>
                    <span class="small">Payments start at $148/Month</span>
                </h1>

                <h2>Anyone can afford land!
                    <span class="small">Make your dreams come true!</span>
                </h2>

                <h3>Lone Star Guarantee</h3>

                <p>No explanation needed, no questions asked. If you find you like a particular part of our subdivision
                    better, we will gladly exchange your track for one that’s available so long as the prices are equal
                    at
                    any time. Your satisfaction is our number one priority!
                </p>

                <a href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary btn-lrg">Buy 20 acres NOW!</button></a>
            </div>

            <div class="col">
                <div id="contact-form">
                    <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                    echo do_shortcode('[contact-form-7 id="11" title="Contact Form"]');
                    } else {
                    echo do_shortcode('[contact-form-7 id="11" title="Contact Form"]');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="ribbon">
    <img src="<?=IMGURL?>/off-grid-living.svg" alt="Living Off the Grid" height="90">
</section>
<?php get_footer(); ?>