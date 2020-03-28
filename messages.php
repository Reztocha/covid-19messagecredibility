<!DOCTYPE html>
<html>
<head>
	<?php
		include('mysqli_connect.php');
		
	?> 
	<html lang="en">
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="cov.css">
</head>
<body>
	<div id='usr'></div>
	<div id="container">
	
	<div class="ctrmsg">
		<?php
		
			$r = "select id, content, votesup, votesdown from messages";
			$result = mysqli_query($dbc, $r);

			
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$id = $row["id"];
					echo 
					"<div class='message'>" . 
						"<p>" . $row["content"] . "</p>" .
						"<p>" . $row["votesup"] . 
							"<button id='vu' onclick='upvote($id)'>👍</button>" . 
							" " . $row["votesdown"] . 
							"<button id='vd' onclick='downvote($id)'>👎</button>" . 
						"</p>" .
					"</div>";
				}
			} else {
				echo "0 results";
			}
			
		?>
		</div>
	</div><!--container-->
	<script>
		function upvote(selector) {
			
		}
		function downvote(selector) {
			
		}
	</script>
</body>
</html>
<?php
	mysqli_close($dbc);
?>