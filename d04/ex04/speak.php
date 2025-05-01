<?php
	session_start();
	if(isset($_SESSION['loggued_on_user']) && isset($_POST['msg']))
	{
		$file = fopen('private/chat', "a");
		$content_msg['time'] = time();
		$content_msg['login'] = $_SESSION['loggued_on_user'];
		$content_msg['msg'] = $_POST['msg'];
		fwrite($file, serialize($content_msg));
		flock($file, LOCK_SH);
		fclose($file);
	}
	else if(!isset($_SESSION['loggued_on_user']))
	{
		echo "ERROR\n";
		exit();
	}	
?>


<!DOCTYPE html>
<html>
<body>
	<form action="speak.php" method="POST" style="display: flex; justify-content: space-between;">
		<input style="height:30px; flex: 1;" type="text" name="msg" placeholder="typing..."/>
		<button style="margin-right:2px; background-color: lightgreen;" type="submit" >Send</button>
	</form>
</body>

<script language="javascript">top.frames['chat'].location = 'chat.php';</script>

</html>
