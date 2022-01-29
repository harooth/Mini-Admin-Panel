<?php 
require "connect.php";

$username = $_POST['username'];
$email = $_POST['email'];
$lang = $_POST['lang'];

if(isset($_POST['add']))
{
	$sql = "INSERT INTO `users`
		(`username`, `email`, `language`) 
			VALUES 
		('$username', '$email', '$lang')";
	$query = mysqli_query($connect, $sql);
}

if(isset($_POST['edit']))
{
	$sql = "UPDATE `users` SET `username`='$username',`email`='$email',`language`='$lang'
	 WHERE `id` = " . $_GET['id'];
	$query = mysqli_query($connect, $sql);
}

header("Location: index.php");
?>