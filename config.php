<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "Vitist00"; /* Password */
$dbname = "crm"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}