<?php

/*      QR code (required)     */
/*          made by            */
/*           Tazio             */

$dblink="localhost";
$dbuser="u0311662_amzdb";
$dbpass="20092524Poom@";
$db="u0311662_amzdb";

// Create link with DB + utf8
$con = mysqli_connect($dblink, $dbuser, $dbpass, $db) or die('Cannot connect to database. '.mysqli_connect_error());
mysqli_set_charset($con, "utf8");


/* ----------2020------------- */

?>