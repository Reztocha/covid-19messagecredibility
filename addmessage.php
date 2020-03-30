<?php
	include('mysqli_connect.php');
	session_start();
echo "
<!DOCTYPE html>
<html>
<head>
	<html lang='en'>
	<meta charset='utf-8'/>
	<link rel='stylesheet' type='text/css' href='cov.css'>
</head>
<body>
	<div id='topbar'>
		<p>" . $_SESSION['uname'] . "</p>
	</div><!--topbar-->
	<div id='container'>
		<div class='centered'>
			<form action='addmessage2.php' method='post'>
				<label for='message'>What is the message you'd like to be evaluated?</label>
				<br>
				<textarea type='text' id='message' name='message'></textarea><br>
				<input type='submit' value='Submit'>
			</form>
		</div>
		
	</div><!--container-->
</body>
</html>";
?>