<?php
// Include config file
include("dbconnect.php");

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";


// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    //capture form data
    $mobile = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $f_name = trim($_POST["f_name"]);
    $s_name = trim($_POST["s_name"]);
    $address_line = trim($_POST["address_line"]);
    $postcode  = trim($_POST["postcode"]);

    //try to concatenate date forms into date for SQL
    $day = trim($_POST["day"]);
    $month = trim($_POST["month"]);
    $year = trim($_POST["year"]);

    $date = $year . "-" . $month . "-" . $day;
    //do this next line in the SQL statement?
    //changed the date to a VARCHAR in DB - review later
    //$dob = date("Y-m-d", strtotime($date));


    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {


        // Prepare an insert statement
        $sql = "INSERT INTO users (email, username, f_name, s_name, address_line, postcode, passwd, mobile, dob) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $param_email, $param_username, $param_f_name, $param_s_name, $param_address_line, $param_postcode, $param_password, $param_mobile, $param_dob);


            // Set parameters
            $param_email = $email;
            $param_username = $username;

            $param_f_name = $f_name;
            $param_s_name = $s_name;
            $param_address_line = $address_line;
            $param_postcode = $postcode;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_mobile = $mobile;
            $param_dob = $date;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {

                // Close statement
                mysqli_stmt_close($stmt);
                // Redirect to login page
                sleep(3);

                header("location: https://www.fetch-it-now.co.uk/login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        } else {
            echo mysqli_error($link);
        }
    }

    // Close connection
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

                    <li><a class="waves-effect waves-light btn nav-button" href="login.php"><i class="material-icons left">home</i>Login</a></li>
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

    <section id="header" class=coloured-section>
        <div class='container'>
            <div class="row">
                <div class="col s12 m12">
                    <h1 class="heading">Signing up to Fetch-It!</h1>
                </div>

            </div>
            <div class="row">
                <div class="col s12 m6"><img src="images/fetch-white.png"></div>
                <div class="col s12 m6">
                    <h2 class="subheading">Fetch Products from Store to Door</h2>
                    <p class="main-text">Use the sign up sheet to create an account!</p>

                </div>
            </div>
            <div class="row">
                <p class="main-text">Already have an account? Login <a href="login">here!</a></p>
            </div>
            <!--REGISTRATION FORM ---->
            <div class="row address-form ">
                <form action="sign-up.php" method="post" class="col s12 m12">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="username" name="username" placeholder="Fetch123" type="text" class="validate">
                            <label for="username">User Name</label>
                            <span class="helper-text error"><?php echo $username_err; ?></span>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="phone" name="phone" type="text" class="validate" placeholder="077...">
                            <label for="phone">Mobile Number</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12">
                            <input id="email" name="email" placeholder="myname@gmail.com" type="text" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="f_name" name="f_name" placeholder="John" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="s_name" name="s_name" placeholder="Smith" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="password" name="password" placeholder="6 characters" type="password" class="validate" value="<?php echo $password; ?>">
                            <label for="password">Create Password</label>
                            <span class="helper-text error"><?php echo $password_err; ?></span>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password" class="validate" value="<?php echo $confirm_password; ?>">
                            <label for="confirm_password">Confirm Password</label>
                            <span class="helper-text error"><?php echo $confirm_password_err; ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="address_line" name="address_line" type="text" class="validate" placeholder="15 Station Road">
                            <label for="phone">Address Line</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="postcode" name="postcode" type="text" class="validate" placeholder="TA1..">
                            <label for="postcode">Postcode</label>
                        </div>
                    </div>
                    <label id="dob-selector" for="dob-Selector">Date of Birth</label>
                    <div class="row">

                        <div class="input-field col s4">
                            <input id="day" name="day" type="number" class="validate" placeholder="01">
                            <label for="day">Day</label>

                        </div>

                        <div class="input-field col s4">

                            <select class="browser-default" id="month" name="month">

                                <option value="01">Jan</option>
                                <option value="02">Feb</option>
                                <option value="03">Mar</option>
                                <option value="04">Apr</option>
                                <option value="05">May</option>
                                <option value="06">Jun</option>
                                <option value="07">Jul</option>
                                <option value="08">Aug</option>
                                <option value="09">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>


                        </div>
                        <div class="input-field col s4">
                            <input id="year" name="year" type="number" class="validate" placeholder="2010">
                            <label id="year-label" for="year">Year</label>

                        </div>
                        <div id="age-restrict" class="message-banner-hide">
                            <p class="age-restrict">Sorry, for security you must be 18 to sign up!</p>
                        </div>
                    </div>
                    <div class="row">
                        <button id="register" class="waves-effect waves-light btn-large center"><i class="material-icons right ">redeem</i>Register!</button>

                    </div>
            </div>




            </form>


        </div>




        </div>
        </div>

    </section>



    <div id="modal" class="modal">
        <div class="modal-content">
            <h2 class="alt-heading">Thanks for signing up!</h4>
                <p class="main-text-alt">You'll be redirected to the login page now!</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok, Great!</a>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js "></script>

    <script src="scripts/script.js "></script>

</body>

</html>