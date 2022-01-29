<?php 

require "connect.php";	

$sql = 'DELETE FROM `users` WHERE `id` = ' . $_GET['id'];
$query = mysqli_query($connect, $sql);
header("Location: index.php");

?>