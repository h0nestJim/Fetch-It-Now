<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Prompt&display=swap" rel="stylesheet">
    <link rel='icon' href='images/favicon.ico' type='image/x-icon/'>
    <title>Fetch-It - Fetch Groceries</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylesv2.css">

</head>

<body>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper nav">
                <img class="nav-logo" src="images/fetch-sitting-white-no-bag.png" href="index.html">
                <a href="index.php" class="brand-logo styled-heading">
                    Fetch-It.
                </a>

                <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">

                    <li><a class="waves-effect waves-light btn nav-button" href="login.php"><i class="material-icons left">home</i>Login</a></li>
                    <li><a class="waves-effect waves-light btn nav-button" href="#top-sign-up"><i class="material-icons left">person_add</i>
                            Join Us</a></li>
                    <li><a class="waves-effect waves-light btn nav-button" href="#top-why-us"><i class="material-icons left">live_help</i>
                            About</a></li>


                    <li><a class="waves-effect waves-light btn nav-button" href="#top-where-shop"><i class="material-icons left">shopping_basket</i>Where to Shop</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav slide-out" id="mobile-demo">
        <img src="images/fetch-sitting-green.png">
        <p class="main-text-alt">Need any help?</p>
        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="login.php"><i class="material-icons left">home</i>Login</a>
        </li>
        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="#top-sign-up"><i class="material-icons left">person_add</i>
                Join Us</a></li>
        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="#top-why-us"><i class="material-icons left">live_help</i>
                About</a></li>


        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="#top-where-shop"><i class="material-icons left">shopping_basket</i>Where to Shop</a></li>
    </ul>

    <!--Main Content-->

    <section id="header" class=coloured-section>
        <div class='container'>
            <div class="row">
                <div class="col s12 m12">
                    <h1 class="heading">Fetch-It</h1>
                </div>

            </div>
            <div class="row">
                <div class="col s12 m6"><img src="images/fetch-white.png"></div>
                <div class="col s12 m6">
                    <h2 class="subheading">Fetch Products from Store to Door</h2>
                    <p class="main-text">Enter your postcode to see if we can start fetching to you!</p>
                    <form class="address-form" name="postcode-search" action="index.php#top-service-area" method="post">
                        <div class="input-field inline">
                            <i class="material-icons prefix icon-blue search-icon">location_on</i>
                            <input id="postcode" type="text" placeholder="e.g TA1 1BU...">
                        </div>
                        <button class="waves-effect waves-light nav-button btn inline">Search</button>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </section>

    <!--Promo Section - Explain why to sign up-->
    <section id="why-us" class="white-section">
        <a class="anchor" id="top-why-us">&nbsp;</a>
        <h2 class="alt-heading">Why Let Us Fetch It For You?</h2>
        <p class="main-text-alt">Fetch-It is a local delivery service where you hire a local to fetch up to 6 items from a supermarket or shop and have it delivered to you..

        </p>
        </div>
        <div class="container">
            <div class="row">



                <div class="col s12 m4">

                    <div class="promo">
                        <!-- Promo Content 1 goes here -->
                        <i class="material-icons promo-icon">group_add</i>
                        <p class="small-heading">Community Driven</p>
                        <p class="main-text-alt">Recently, large chains have not been able to keep up with demand. Fetch-it uses local fetchers to make small deliveries for things you need.</p>
                    </div>
                </div>
                <div class="col s12 m4">

                    <div class="promo">
                        <!-- Promo Content 2 goes here -->
                        <i class="material-icons promo-icon">timer</i>
                        <p class="small-heading">Choice of Delivery Window</p>
                        <p class="main-text-alt">Sometimes you need something now, or maybe you just want it for when you get home. Fetch-it scales it's delivery cost on urgency, so if you can wait a couple hours, you can get it delivered cheaper!</p>
                    </div>

                </div>
                <div class="col s12 m4">

                    <div class="promo">
                        <!-- Promo Content 3 goes here -->
                        <i class="material-icons promo-icon">add_shopping_cart</i>
                        <p class="small-heading">Easy to order</p>
                        <p class="main-text-alt">We have developed our platform to make it as easy and convenient as possible to arrange a fetch, as well as speak with your fetcher if the situation changes.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        </div>
        </div>

    </section>

    <!--Sign up Section-->

    <section id="sign-up" class="coloured-section">
        <a class="anchor" id="top-sign-up">&nbsp;</a>
        <h2 class="subheading">Get Involved!</h2>
        <div class="container">
            <div class="row">
                <div class="col s12 m6">

                    <div class="card hoverable card-rel">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="images/person-in-gray-jacket-and-black-pants-standing-beside-red-4604655.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator card-heading text-darken-4">Order Products to You<i class="material-icons right">add_circle_outline</i></span>

                        </div>
                        <div class="card-reveal center-align">
                            <span class="card-title card-heading">Order What You Need<i class="material-icons right">close</i></span>
                            <p class="main-text-alt">Select from our available stores and have what you need delivered today.
                            </p>

                            <p class="main-text-alt">Provide your name, email, address and phone number to get started.
                            </p>
                            <p class="main-text-alt">Sign up today and recieve a promotional offer for your first delivery free!</p>
                            <div class="card-action"></div>
                            <a href="sign-up.php" class="waves-effect waves-light btn-large card-btn "><i class="material-icons right ">redeem</i>Get Started!</a>


                        </div>
                    </div>

                </div>
                <div class="col s12 m6 ">

                    <div class="card hoverable card-rel ">
                        <div class="card-image waves-effect waves-block waves-light ">
                            <img class="activator " src="images/man-in-gray-sweater-riding-on-bicycle.jpg ">
                        </div>
                        <div class="card-content ">
                            <span class="card-title activator card-heading text-darken-4 ">Sign Up to be a Fetcher<i class="material-icons">add_circle_outline</i></span>

                        </div>
                        <div class="card-reveal center-align">
                            <span class="card-title card-heading ">Become a Fetcher<i class="material-icons right ">close</i></span>
                            <p class="main-text-alt ">Sign up to be a fetcher, earn money and help provide a service to your local community.
                            </p>
                            <p class="main-text-alt ">You can choose your hours and how often you work.</p><br>
                            <div class="card-action right-align card-btn "></div>
                            <a class="waves-effect waves-light btn-large disabled card-btn "><i class="material-icons">directions_bike</i>We're Not Ready Yet</a>


                        </div>
                    </div>

                </div>



            </div>


        </div>

    </section>

    <section id="where-shop" class="white-section ">
        <a class="anchor" id="top-where-shop">&nbsp;</a>
        <h2 class="alt-heading ">Where can I order from?</h2>
        <p class="main-text-alt ">A selection of our current and upcoming partners we are making available for you to have goods fetched from.

        </p>
        <div class="container ">

            <div class="row ">
                <div class="col s6 m3 ">
                    <p class="coming-soon ">Coming Soon</p>
                    <img class="store-img " src="images/Logos/ASDA-Log-final.png ">
                </div>
                <div class="col s6 m3 ">
                    <p class="coming-soon ">Coming Soon</p>
                    <img class="store-img " src="images/Logos/Boots_logo-final.png ">
                </div>
                <div class="col s6 m3 ">
                    <p class="coming-soon ">Coming Soon</p>
                    <img class="store-img " src="images/Logos/Co_op-final.png ">
                </div>
                <div class="col s6 m3 ">
                    <p class="coming-soon ">Coming Soon</p>
                    <img class="store-img " src="images/Logos/game_logo-final.png ">
                </div>
            </div>
            <div class="row ">
                <div class="col s6 m3 ">
                    <p class="coming-soon ">Coming Soon</p>
                    <img class="store-img " src="images/Logos/mands_logo-final.png ">
                </div>
                <div class="col s6 m3 ">
                    <p class="coming-soon ">Coming Soon</p>
                    <img class="store-img " src="images/Logos/Morrisons-Logo-final.png ">
                </div>
                <div class="col s6 m3 ">
                    <p class="coming-soon ">Coming Soon</p>
                    <img class="store-img " src="images/Logos/Tesco_logo_logotype-final.png ">
                </div>
                <div class="col s6 m3 ">
                    <p class="coming-soon ">Coming Soon</p>
                    <img class="store-img " src="images/Logos/wilko-vector-logo-final.png ">
                </div>
            </div>

        </div>

    </section>
    <section id="service-area" class="coloured-section">
        <a class="anchor" id="top-service-area">&nbsp;</a>
        <h2 class="subheading">Can we Fetch Products to You?</h2>
        <p class="main-text">As we're still getting things running, our service area is limited, enter your postcode to see if we can fetch products to your door!</p>
        <p class="main-text">This is our current operating area.</p>
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40585.27441034006!2d-3.1367160420483606!3d51.009812606880324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486de5bae044a583%3A0xd27298e8c3a0610e!2sTaunton%20TA1!5e0!3m2!1sen!2suk!4v1597067653233!5m2!1sen!2suk" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="false" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>

    </section>






    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js "></script>

    <script src="scripts/script.js "></script>
</body>

</html>