<?php
include("dbconnect.php");
//initialise session
session_start();

//check if user is already logged in, if yes, go to account/welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin" === true]) {
    header("location: https://www.fetch-it-now.co.uk/myaccount.php");
    exit;
}

//set variables
$email = $password = "";
$email_err & $password_err = "";

//handle form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username is empty
    if (empty(trim($_POST["username-email"]))) {
        $email_err = "Please enter username.";
    } else {
        $email = trim($_POST["username-email"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["passwd"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["passwd"]);
    }

    if (empty($email_err && empty($password_err))) {
        $sql = "SELECT id, email, f_name, passwd FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            //bind params
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            //set param
            $param_email = $email;

            //attempt to execute the statement
            if (mysqli_stmt_execute($stmt)) {
                //store result
                mysqli_stmt_store_result($stmt);

                //check if username exists - if yes verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    //bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $f_name, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        //verify passwords
                        if (password_verify($password, $hashed_password)) {
                            //start new session
                            session_start();

                            //set session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["f_name"] = $f_name;


                            header("location: https://www.fetch-it-now.co.uk/myaccount.php");
                            exit;
                        } else {
                            //display password error
                            $password_err = "The password you entered did not match our records.";
                        }
                    }
                } else {
                    $username_err = "No account found with that username";
                }
            } else {
                echo "Something went wrong!";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
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

                    <li><a class="waves-effect waves-light btn nav-button" href="index.php#top-login"><i class="material-icons left">home</i>Login</a></li>
                    <li><a class="waves-effect waves-light btn nav-button" href="index.php#top-sign-up"><i class="material-icons left">person_add</i>
                            Join Us</a></li>
                    <li><a class="waves-effect waves-light btn nav-button" href="index.php#top-why-us"><i class="material-icons left">live_help</i>
                            About</a></li>


                    <li><a class="waves-effect waves-light btn nav-button" href="index.php#top-where-shop"><i class="material-icons left">shopping_basket</i>Where to Shop</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav slide-out" id="mobile-demo">
        <img src="images/fetch-sitting-green.png">
        <p class="main-text-alt">Need any help?</p>
        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="index.php#top-login"><i class="material-icons left">home</i>Login</a>
        </li>
        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="index.php#top-sign-up"><i class="material-icons left">person_add</i>
                Join Us</a></li>
        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="index.php#top-why-us"><i class="material-icons left">live_help</i>
                About</a></li>


        <li><a class="waves-effect waves-light btn nav-button sidenav-close" href="index.php#top-where-shop"><i class="material-icons left">shopping_basket</i>Where to Shop</a></li>
    </ul>
    <!--Main Content-->

    <section id="login" class="coloured-section">
        <a class="anchor" id="top-login">&nbsp;</a>
        <h2 class="subheading">Have an Account?</h2>
        <p class="main-text">Log in with email address and password.</p>
        <div class="container">
            <div class="row login-form">
                <form action="login.php" method="post" class="address-form">
                    <div class="row">
                        <div class="input-field col s12 center">
                            <input id="username-email" name="username-email" placeholder="Fetch123@gmail.co.uk" type="text" class="validate">
                            <label for="username-email">Email</label>
                            <span class="helper-text error"><?php echo $email_err; ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 center">
                            <input id="passwd" name="passwd" placeholder="Enter Password" type="password" class="validate">
                            <label for="passwd">Password</label>
                            <span class="helper-text error"><?php echo $password_err; ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <button id="sign-in" class="waves-effect waves-light btn-large center"><i class="material-icons right ">redeem</i>Login</button>
                    </div>
                    <div class="row">
                        <p class="main-text-alt">Don't have account? No problem! Sign up <a href="sign-up.php">here!</a></p>
                    </div>
                </form>
            </div>
        </div>

    </section>






    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js "></script>

    <script src="scripts/script.js "></script>
</body>

</html>