<!DOCTYPE HTML>
<!--
	Fractal by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Korean Twist - Pop Restaurant</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
</head>
<body id="top">

<!-- Header -->
<header id="header">
    <div class="content">
        <div class="date-special">
            <h1>May 21 <span class="super">st</span> </h1>
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
            <div class="image"><img src="images/kimbap-2.jpg" alt="" /></div>
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
            <div class="image"><img src="images/twisted-donuts.jpg" alt="" /></div>
            <div class="content">
                <h3>Korean Twisted Donuts (Kkwabaegi) </h3>
                <p>These are delicious fresh made donut covered in cinnamon and sugar and the twist
                    makes the donuts extra chewy ^^  </p>
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

<!-- Three -->

<section id="three" class="wrapper">
    <div class="inner">
        <header class="major">
            <h2>Sign up for Free Yujacha</h2>
            <p>You will receive a coupon in your email that you can redeem May 21st</p>
            <form method="post" action="{{action('CouponController@storeEmails')}}">
                {{ csrf_field() }}
                <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                        <input type="text" name="name" id="demo-name" value="" placeholder="Name" required />
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <input type="email" name="email" id="demo-email" value="" placeholder="Email" required />
                    </div>
                    <div class="6u 12u$(xsmall)">
                        <input type="checkbox" id="demo-human" name="demo-human" required/>
                        <label for="demo-human">Not a robot</label>
                    </div>
                    <div class="6u 12u(xsmall)">
                        <input type="submit" value="Send Coupon" class="special" /></li>
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
        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
    </ul>
    <p class="copyright">&copy; Untitled. Credits: <a href="http://html5up.net">HTML5 UP</a></p>
</footer>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrolly.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
<script src="js/main.js"></script>

</body>
</html>