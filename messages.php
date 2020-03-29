<!DOCTYPE html>
<html>
<head>
	<?php
		include('mysqli_connect.php');
		
		$username = $_POST['uname'];
		
		if (isset($_POST['uname']) && isset($_POST['login'])) 
		{
			

			if (!empty($username)) 
			{
				$username_query = mysqli_query($dbc,"SELECT * FROM users
											   WHERE username = '$username'");
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
				}
			}
		}
		elseif (isset($_POST['uname']) && isset($_POST['signup'])) {
			
		}
	echo "<html lang='en'>
	<meta charset='utf-8'/>
	<link rel='stylesheet' type='text/css' href='cov.css'>
</head>
<body>
	<div id='topbar'>
		<p>$username</p>
		<p><a href='addmessage.html'>Add a Message</a></p>
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