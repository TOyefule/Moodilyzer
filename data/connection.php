<?php
$db_host = 'mysql.DATABASE.com';
$db_user = 'user';
$db_pass = 'password';
$db_name = 'db';
$conn = mysqli_connect($db_host, $db_user, $db_pass) or die("Unable to connect to database.");
mysqli_select_db($conn, $db_name) or die("Unable to open database.");
if ($conn) {
  print 'success';
}
print 'fail';


