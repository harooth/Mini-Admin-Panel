<?php 

require "connect.php";

$sql = 'SELECT * FROM `users` WHERE `id` = ' . $_GET['id'];
$query = mysqli_query($connect, $sql);
$result = mysqli_fetch_assoc($query);
?>

<a href="index.php">Go back</a><br><br>

<form action="action.php?id=<?php echo $_GET['id']; ?>" method="post">
	<input type="text" name="username" value="<?php echo $result['username']; ?>"><br>
	<input type="text" name="email" value="<?php echo $result['email']; ?>"><br>
	<input type="text" name="lang" value="<?php echo $result['language']; ?>"><br>
	<button type="submit" name="edit">Submit Data</button>
</form>