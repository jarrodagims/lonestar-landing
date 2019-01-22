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
                    at any time. Your satisfaction is our number one priority!
                </p>

                <a href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary btn-lrg">Buy 20 acres NOW!</button></a>


            </div>

            <div class="col">
                <div id="contact-form">
                    <div class="contact-top">
                        <p>Submit Information To View Our Available Lots</p>
                    </div>
                    <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                    echo do_shortcode('[contact-form-7 id="11" title="Contact Form"]');
                    } else {
                    echo do_shortcode('[contact-form-7 id="11" title="Contact Form"]');
                    }
                    ?>

                    <div class="contact-bottom">
                        <p>Call today for more information<br />
                            about this once in a lifetime opportunity.</p>

                        <a href="tel:18774439828">1-(877)-443-9828</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?=IMGURL?>/bg-banner.png" class="banner" alt="Looking To Save More">

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

                    <img src="<?=IMGURL?>build/bbb.png" alt="Better Business Bureau">
                </div>
            </div>

            <div class="col">
                <div class="extra-padding">
                    <h2>Money back guarantee!
                        <span>
                            This is the land deal you've been waiting for!
                        </span>

                    </h2>


                    <ul class="arrows">
                        <li><span>Huge 20 to 100 Acre Properties | <a href="">Own your own ranch!</a></span></li>
                        <li><span>Conveniently Located just 55 Min. East of El Paso & 30 Min.
                                & West of Van Horn Texas</span></li>
                        <li><span>Owner Financing | <a href="">Lowest rates available for limited time only!</a></span></li>
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
    <img src="<?=IMGURL?>/off-grid-living.svg" alt="Living Off the Grid" height="90">
</section>
<?php get_footer(); ?>