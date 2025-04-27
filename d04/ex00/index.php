<?php
	session_start();
	if(isset($_GET['login']))
		$_SESSION['login'] = $_GET['login'];
	if(isset($_GET['passwd']))
		$_SESSION['passwd'] = $_GET['passwd'];
?>

<html>
<body>
	<form method="GET">
		<h2>index.php</h2>
		Username: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" /> <br />
		Password: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" /><br />
		<button type="submit" value="OK" >submit</button>
	</form>

</body>

</html>
