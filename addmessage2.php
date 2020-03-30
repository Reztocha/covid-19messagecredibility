<?php
	include('mysqli_connect.php');
	$message = $_POST['message'];
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
		<p><a href='addmessage.php'>Add a Message</a></p>
	</div><!--topbar-->
	<div id='container'>
		<div class='centered'>";
				$r = "insert into messages (content) values ('$message')";
		
				mysqli_query($dbc, $r);
				
				echo "<p>You have entered your message for voting.</p>
				
				<script type='text/javascript'>location.href = 'messages.php';</script>
				";

				mysqli_close($dbc);
				
			?>
		</div>
		
	</div><!--container-->
</body>
</html>