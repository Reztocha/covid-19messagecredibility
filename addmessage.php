<?php
	include('mysqli_connect.php');
	$message = $_POST['message'];
?> 
<!DOCTYPE html>
<html>
<head>
	<html lang="en">
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="cov.css">
</head>
<body>
	<div id="container">
		<div class="centered">
			<?php
				$r = "insert into messages (content) values ('$message')";
		
				mysqli_query($dbc, $r);
				
				echo "<p>You have entered your message for voting.</p>";

				mysqli_close($dbc);
				
			?>
		</div>
		
	</div><!--container-->
</body>
</html>