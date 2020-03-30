<!DOCTYPE html>
<html>
<head>
	<?php
		include('mysqli_connect.php');
		
		$username = $_SESSION['uname'];
		if (isset($_POST['uname']) && isset($_POST['login'])) 
		{
			$username = $_POST['uname'];
			$username_query = mysqli_query($dbc,"SELECT * FROM users WHERE username = '$username'");
			$count = mysqli_num_rows($username_query);
			if($count == 0) {
				#Username doesn't exist
				echo "
					<script>
					  window.history.back();
					</script>";
			}
			else
			{
				#Username already exists
				$password = $_POST['psw'];
				$psw_query = mysqli_query($dbc,"SELECT * FROM users WHERE username = '$password'");
				$count = mysqli_num_rows($psw_query);
				if($count == 0) {
					echo "
					<script>
					  window.history.back();
					</script>";
				}
				else {
					$_SESSION['uname'] = $username;
				}
			}
		}
		elseif (isset($_POST['uname']) && isset($_POST['signup'])) {
			$username = $_POST['uname'];
			$username_query = mysqli_query($dbc,"SELECT * FROM users
											   WHERE username = '$username'");
			$count = mysqli_num_rows($username_query);
			if($count == 0) {
				if(isset($_POST['psw']) && isset($_POST['email'])) {
					$password = $_POST['psw'];
					$email = $_POST['email'];
					$r = "insert into users (username, password, email) values ('$username','$password','$email')";
			
					mysqli_query($dbc, $r);
					$_SESSION
				}
				else {
					echo "
					<script>
					  window.history.back();
					</script>";
				}
			}
			else {
				echo "
					<script>
					  window.history.back();
					</script>";
			}
		}
		
	echo "<html lang='en'>
	<meta charset='utf-8'/>
	<link rel='stylesheet' type='text/css' href='cov.css'>
</head>
<body>
	<div id='topbar'>
		<p>$username</p>
		<p><a href='addmessage.php'>Add a Message</a></p>
	</div><!--topbar-->
	<div id='container'>
	<div>";
			$r = "select id, content, votesup, votesdown from messages";
			$result = mysqli_query($dbc, $r);

			
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$id = $row['id'];
					echo "<div class='message'> 
						<p>" . $row['content'] . "</p>
						<p> " . $row['votesup'] .
							"<button id='vu' onclick='upvote($id)'>👍</button>" .
							 $row['votesdown'] .
							"<button id='vd' onclick='downvote($id)'>👎</button>
						</p>
					</div>";
				}
			} else {
				echo "<p>No messages</p>";
			}
			
		echo"</div>
	</div><!--container-->
	<script>
		function upvote(selector) {
			
		}
		function downvote(selector) {
			
		}
	</script>
</body>
</html>";
	mysqli_close($dbc);
?>