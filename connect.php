<?php
require_once 'login.php';

$db_server=@mysqli_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . 
	@mysqli_error());

$db_database=@mysqli_select_db($db_server,"explains")
or die("Unable to select database: " . @mysqli_error());

$query = "SELECT * FROM accounts";
$result = mysqli_query($db_server,$query);
if (!$result) die ("Database access failed: " . mysqli_error($db_server));

?>