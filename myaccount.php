<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: https://www.fetch-it-now.co.uk/login.php");
    exit;
}

?>




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
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0">
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

                    <li><a class="waves-effect waves-light btn nav-button" href="#top-order-now"><i class="material-icons left">directions_bike</i>Order Now</a></li>
                    <li><a class="waves-effect waves-light btn nav-button" href="#top-previous"><i class="material-icons left">access_time</i>
                            Previous Fetches</a></li>
                    <li><a class="waves-effect waves-light btn nav-button" href="#top-delivery-address"><i class="material-icons left">account_circle</i>
                            My Account</a></li>


                    <li><a class="waves-effect waves-light btn nav-button" href="logout.php"><i class="material-icons left">directions_run</i>Log Out</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav slide-out" id="mobile-demo">
        <img src="images/fetch-sitting-green.png">
        <p class="main-text-alt">Need any help?</p>
        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="#top-order-now"><i class="material-icons prefix left icon-white">directions_bike</i>Order Now</a></li>
        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="#top-previous"><i class="material-icons prefix icon-white left">access_time</i>Previous Fetches</a></li>
        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="#top-delivery-address"><i class="material-icons prefix icon-white left">account_circle</i>My Account</a></li>


        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="logout.php"><i class="material-icons prefix icon-white left">directions_run</i>Log Out</a></li>
    </ul>
    <section id="welcome" class="white-section">
        <a class="anchor" id="top-welcome">&nbsp;</a>
        <div class="container">
            <div class="row">
                <div class="col s6 m6">
                    <br>
                    <br>
                    <br>
                    <h2 class="alt-heading valign-wrapper">Hi, <?php echo htmlspecialchars($_SESSION["f_name"]); ?>!</h2>
                </div>
                <div class="col s6 m6">
                    <img src="images/fetch-green-mirror-account.png" height="50%">
                </div>
            </div>
            <div class="row">
                <p class="main-text-alt">This is your dashboard, here you can browse stores that are currently open, make new orders, track current order, and review past orders.<br><br>

                    You can also update details, and update payment information.</p>
            </div>
        </div>
    </section>

    <section id="order-now" class="coloured-section">
        <a class="anchor" id="top-order-now">&nbsp;</a>
        <h2 class="subheading">Need something fetched?</h2>
        <p class="main-text">Browse available stores</p>

        <div class="container">
            <div class="row">
                <div class="carousel">
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-image center-align">
                                <img src="images/Logos/Morrisons-Logo-final.png">

                            </div>
                            <div class="card-content">
                                <p>Essentials and Groceries
                            </div>
                            <div class="card-action center-align">
                                <button class="waves-effect waves-light btn show-shop morrison">SHOW</button>

                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/Logos/Tesco_logo_logotype-final.png">

                            </div>
                            <div class="card-content">
                                <p>Essentials and Groceries
                            </div>
                            <div class="card-action center-align">
                                <button class="waves-effect waves-light btn show-shop tesco">SHOW</button>

                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/Logos/wilko-vector-logo-final.png">

                            </div>
                            <div class="card-content">
                                <p>Essentials and Groceries
                            </div>
                            <div class="card-action center-align">
                                <button class="waves-effect waves-light btn show-shop wilko">SHOW</button>

                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/Logos/ASDA-Log-final.png">

                            </div>
                            <div class="card-content">
                                <p>Essentials and Groceries
                            </div>
                            <div class="card-action center-align">
                                <button class="waves-effect waves-light btn show-shop asda">SHOW</button>

                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/Logos/Boots_logo-final.png">

                            </div>
                            <div class="card-content">
                                <p>Essentials and Groceries
                            </div>
                            <div class="card-action center-align">
                                <button class="waves-effect waves-light btn show-shop boots">SHOW</button>

                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/Logos/Co_op-final.png">

                            </div>
                            <div class="card-content">
                                <p>Essentials and Groceries
                            </div>
                            <div class="card-action center-align">
                                <button class="waves-effect waves-light btn show-shop co-op">SHOW</button>

                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/Logos/game_logo-final.png">

                            </div>
                            <div class="card-content">
                                <p>Essentials and Groceries
                            </div>
                            <div class="card-action center-align">
                                <button class="waves-effect waves-light btn show-shop game">SHOW</button>

                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/Logos/mands_logo-final.png">

                            </div>
                            <div class="card-content">
                                <p>Essentials and Groceries
                            </div>
                            <div class="card-action center-align">
                                <button class="waves-effect waves-light btn show-shop mands">SHOW</button>

                            </div>

                        </div>
                    </div>



                </div>






            </div>
        </div>






    </section>

    <section id="shop-section" class="coloured-section hidden-shop">
        <a class="anchor" id="top-shop-section">&nbsp;</a>
        <h2 id="shop-heading" class="subheading">What would you like from [STORE NAME]</h2>
        <div class="container">
            <div class="row">
                <center><img id="shop-id" src="images/Logos/wilko-vector-logo-final.png" width="200px"></center>
            </div>
        </div>
    </section>
    <section id="previous" class="white-section">
        <a class="anchor" id="top-previous">&nbsp;</a>
        <h2 class="alt-heading">Previous Orders</h2>
        <p class="main-text-alt">For privacy, your previous orders are hidden, if you wish to view them, just click the button!</p>
    </section>

    <section id="deliver-address" class="coloured-section">
        <a class="anchor" id="top-delivery-address">&nbsp;</a>

    </section>










    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js "></script>

    <script src="scripts/script.js "></script>
</body>

</html>