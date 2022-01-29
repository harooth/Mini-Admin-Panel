<?php require "connect.php"; ?>

<a href="add.php">Add data</a><br><br>
<table border="1px">
	<tr>
		<td>ID</td>
		<td>Username</td>
		<td colspan="3" style="text-align: center;">Action</td>
	</tr>
<?php

$sql = 'SELECT * FROM `users`';
$query = mysqli_query($connect, $sql);

while($row = mysqli_fetch_assoc($query))
{
?>

<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['username']; ?></td>
	<td><a href="single.php?id=<?php echo $row['id']; ?>">View more</a></td>
	<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
	<td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
</tr>


<?php
}
?>
</table>