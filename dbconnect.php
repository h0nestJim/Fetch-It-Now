<?php
define('DB_SERVER', 'db5000729802.hosting-data.io');
define('DB_USERNAME', 'dbu862198');
define('DB_PASSWORD', '#x$Tm%bWY+!bJ5eb');
define('DB_NAME', 'dbs666463');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
    die('Error: Could not connect. ' . mysqli_connect_error());
}
