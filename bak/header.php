<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
//echo "hello";

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PRN6JVL');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117911784-1">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-117911784-1');
    </script>

    <meta name="google-site-verification" content="zpnSy4cy1VpRkn6ALWuNIluEbAtSALezjbCAcsuqznM" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">


    <?php wp_head(); ?>
    <!-- Bootstrap core CSS -->
    <!--<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/dev.css" rel="stylesheet">

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fancyboxjquery.js"></script>
<link href="<?php bloginfo('template_directory'); ?>/css/fancybox.css" rel="stylesheet">
<link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('template_directory'); ?>/icofont/css/icofont.css">
<link rel="stylesheet" media="all" type="text/css" href="<?php bloginfo('template_directory'); ?>/font-awesome-4.3.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">-->
    <?php if(is_page( array('gallery', 'additional-resources','payment','testimonials','contact','checkout','cart','purchase-confirmed','recreational-land-for-sale','ranches-for-sale','hunting-land-for-sale','how-to-purchase','farmland-for-sale-in-west-texas','about-our-tracts-of-land','neat-ideas','camping-in-west-texas','130' ) ) ){  ?>
    <style>

        .jumbotron{
		display:none;
	}
	
</style>
    <?php } ?>

    <!-- Start Schema -->

    <!-- Facebook Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '118714405458770');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=118714405458770&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Default Statcounter code for Lonestar Investments
https://www.lonestarinvestments.com/ -->
    <script type="text/javascript">
    var sc_project = 11689404;
    var sc_invisible = 1;
    var sc_security = "d6286751";
    </script>
    <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async>
    </script>
    <noscript>
        <div class="statcounter"><a title="Web Analytics
Made Easy - StatCounter" href="http://statcounter.com/" target="_blank"><img
                    class="statcounter" src="//c.statcounter.com/11689404/0/d6286751/1/" alt="Web
Analytics Made Easy - StatCounter"></a></div>
    </noscript>
    <!-- End of Statcounter Code -->

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "RealEstateAgent",
        "name": "Lone Star Investments",
        "image": "https://www.lonestarinvestments.com/wp-content/uploads/2018/02/footer-logo.png",
        "url": "https://www.lonestarinvestments.com/",
        "telephone": "(877) 685-4648",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "2126 Montana Ave",
            "addressLocality": "El Paso",
            "addressRegion": "TX",
            "postalCode": "79903",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 31.7771907,
            "longitude": -106.4702661
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ,
            "opens": "09:00",
            "closes": "17:00"
        },
        "sameAs": [
            "https://www.facebook.com/openrangeranches/",
            "https://twitter.com/Invest_inEP"
        ]
    }
    </script>
    <!-- End Schema -->

</head>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery("#various3").fancybox({
        'width': '75%',
        'height': '75%',
        'autoScale': false,
        'transitionIn': 'none',
        'transitionOut': 'none',
        'type': 'iframe'
    });
});
</script>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRN6JVL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <div class="mobile-buttons">
        <a href="tel:18778654648" class="m-phone"><i class="fa fa-phone-square"></i> Office:
            1-(877)-865-4648</a>
        <a href="tel:18778509927" class="m-phone"><i class="fa fa-phone-square"></i> Sales:
            1-(877)-850-9927</a>
        <?php $currentLang = qtrans_getLanguage();
	if($currentLang=='es'){?>
        <a class="mlang" href="<?php echo get_site_url();?>/?lang=en">View in English</a>
        <?php }else{?>
        <a class="mlang" href="<?php echo get_site_url();?>/?lang=es">Ver en Español</a>
        <?php }?>
    </div>

    <nav class="navbar navbar-inverse  <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; if( is_page( array('gallery', 'additional-resources','payment','testimonials','contact','checkout','cart','purchase-confirmed','recreational-land-for-sale','ranches-for-sale','hunting-land-for-sale','how-to-purchase','farmland-for-sale-in-west-texas','about-our-tracts-of-land','neat-ideas','camping-in-west-texas','130' ) ) || is_home() || is_single() ) {  ?>inner<?php } ?>">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                    <img src="<?php echo get_field('header_logo',5); ?>">
                    <span class="phone-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <span>
                        <?php echo get_field('phone_no',5); ?></span>
                </a>
            </div>

            <div class="right">
                <a href="tel:18778654648" style="display: block;" class="top-phone"><button class="lang">Office:
                        1-(877)-865-4648</button></a>
                <a href="tel:18778509927" style="display: block;" class="top-phone"><button class="lang">Sales:
                        1-(877)-850-9927</button></a>
                <?php $currentLang = qtrans_getLanguage();
			if($currentLang=='es'){?>
                <a href="<?php echo get_site_url();?>/?lang=en"><button class="lang right">View in English</button></a>
                <?php }else{?>
                <a href="<?php echo get_site_url();?>/?lang=es"><button class="lang right">Ver en Español</button></a>
                <?php }?>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php wp_nav_menu( array( 'menu' => 'home-menu','menu_class' => 'nav navbar-nav') ); ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php if(is_page('130')) { ?>
    <div id="alt-menu">
        <div class="container">
            <ul>
                <?php wp_nav_menu( array( 'menu' => 'sidebar-menu','menu_class' => 'ban-center') ); ?>
            </ul>
        </div>
    </div>
    <?php } else {  ?>
    <!-- Header -->


    <!-- Header END -->
    <?php } ?>