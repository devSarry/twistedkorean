<!DOCTYPE HTML>
<!--
	Fractal by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Korean Twist - Pop Restaurant</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="css/main.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="css/ie9.css"/><![endif]-->
</head>
<body id="top">

<!-- Header -->
<header id="header">
    <div class="content">
        <div class="date-special">
            <h1>May 21 <span class="super">st</span>!</h1>
        </div>
        <h1><a href="#">Korean Twist</a></h1>
        <p>A kimbap and Korean donut POP UP restaurant!</p>
        <ul class="actions">
            <li><a href="#three" class="button special icon fa-envelope">Sign Up</a></li>
            <li><a href="#one" class="button icon fa-chevron-down scrolly">Learn More</a></li>
        </ul>
    </div>
</header>

<!-- One -->
<section id="one" class="wrapper style3 special">
    <div class=""><img src="images/coolbap.png" alt=""></div>
    <header class="major">
        <h2>What do we make?</h2>
    </header>
</section>

<!-- Two -->
<section id="two" class="wrapper style4">
    <div class="inner alt">
        <section class="spotlight">
            <div class="image"><img src="images/kimbap-2.jpg" alt=""/></div>
            <div class="content">
                <h3>Kimbap</h3>
                <p> It's like Japanse sushi, rice wrapped in sea weed but bigger and not filled with raw
                    ingredients. Some of the common ingredients include cheese, kimchi, luncheon meat,
                    or spicy tuna. They are like the sandwiches of Korea, portable, eaten with your
                    hands, and store well even without refrigeration. People take Kimbap on picnics
                    or for school lunches.</p>
            </div>
        </section>
        <section class="spotlight">
            <div class="image"><img src="images/twisted-donuts.jpg" alt=""/></div>
            <div class="content">
                <h3>Korean Twisted Donuts (Kkwabaegi) </h3>
                <p>These are delicious fresh made donut covered in cinnamon and sugar and the twist
                    makes the donuts extra chewy ^^ </p>
            </div>
        </section>
        <section class="spotlight">
            <div class="image"><img src="images/yujacha.jpg" alt=""></div>
            <div class="content">
                <h3>Lemon Tea (Yujacha)</h3>
                <p> Traditional this Korean tea (herbal tea) is made from the citrus fruit yuzu. Our
                    version is made from the more common lemon and ginger. The fruit is thinly sliced with its
                    peel and combined with sugar and prepared as fruit preserves or marmalade. Served either
                    hot or cold.</p>
            </div>
        </section>
    </div>
</section>

<!-- One -->
<section id="three" class="wrapper style3 special">
    <div class=""><img src="images/happybap.png" alt=""></div>
    <header class="major">
        <h2>Where to find us!</h2>
    </header>
</section>

<section id="two" class="wrapper style2">
    <div class="inner alt">
        <section class="spotlight">
            <div class="row uniform">
                <div class="6u">
                    <img src="images/forumlogo.png" alt="">
                    <h3><a href="https://www.facebook.com/events/774051872725063/">Join our event on facebook</a></h3>
                </div>
                <div class="6u">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                    <div style='overflow:hidden;height:360px;width:700px;'>
                        <div id='gmap_canvas' style='height:360px;width:700px;'></div>
                        <div>
                            <small><a href="http://embedgooglemaps.com">embed google maps</a></small>
                        </div>
                        <div>
                            <small><a href="http://www.autohuren.world/locaties/ibiza/">auto huren ibiza</a></small>
                        </div>
                        <style>#gmap_canvas img {
                                max-width: none !important;
                                background: none !important
                            }</style>
                    </div>
                    <script type='text/javascript'>function init_map() {
                            var myOptions = {
                                zoom: 16,
                                center: new google.maps.LatLng(60.44993729999999, 22.268536700000027),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                            marker = new google.maps.Marker(
                                    {
                                        map: map,
                                        position: new google.maps.LatLng(60.44993729999999, 22.268536700000027)
                                    });
                            infowindow = new google.maps.InfoWindow(
                                    {content: '<strong>Korean Twist</strong><br>Linnankatu 11, 20100 Turku, Finland<br>'});
                            google.maps.event.addListener(marker, 'click', function () {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Three -->

<section id="four" class="wrapper">
    <div class="inner">
        <header class="major">
            <h2>Sign up and get your FREE Yujacha!</h2>
            <p>You will receive a coupon in your email that you can redeem May 21st</p>
            <form method="post" action="{{action('CouponController@storeEmails')}}">
                {{ csrf_field() }}
                <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="name" id="demo-name" value="" placeholder="Name" required/>
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input type="email" name="email" id="demo-email" value="" placeholder="Email" required/>
                    </div>
                    <div class="6u 12u$(xsmall)">
                        <input type="checkbox" id="demo-human" name="demo-human" required/>
                        <label for="demo-human">Not a robot</label>
                    </div>
                    <div class="6u 12u(xsmall)">
                        <input type="submit" value="Send Coupon" class="special"/></li>
                    </div>
                </div>
            </form>
            <div class="image">
                <img src="images/thankyoubap.png" alt="">
            </div>
        </header>
    </div>

</section>

</div>


<!-- Footer -->
<footer id="footer">
    <ul class="icons">
        <li><a href="https://www.facebook.com/events/774051872725063/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="http://www.restaurantday.org/fi/" class="icon"><img src="images/restaurantday.svg" alt="" style="width: 48px;"> <p style="margin: 0;">Ravintolapäivä</p></a></li>
    </ul>
    <p class="copyright">&copy; Makkaraperuna. Credits: <a href="http://html5up.net">HTML5 UP</a></p>
</footer>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrolly.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<!--[if lte IE 8]>
<script src="js/ie/respond.min.js"></script><![endif]-->
<script src="js/main.js"></script>

<!-- Piwik -->
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="//analytics.makkaraperuna.com/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 3]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<noscript><p><img src="//analytics.makkaraperuna.com/piwik.php?idsite=3" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->


</body>
</html>