<?php 

require "connect.php";

if(!isset($_GET['id'])) {
	header("Location: index.php");
} else {
	$sql = 'SELECT * FROM `users` WHERE `id` = ' . $_GET['id'];
	$query = mysqli_query($connect, $sql);

	$row = mysqli_fetch_assoc($query);
}
?>

<a href="index.php">Go back</a><br><br>

<table border="1px">
	<tr>
		<td>ID</td>
		<td>Username</td>
		<td>Email</td>
		<td>Language</td>
	</tr>

	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['username']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['language']; ?></td>
	</tr>
</table>
