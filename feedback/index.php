<!DOCTYPE html>
<html>
	<head>
		<title>Site Index</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="theme-color" content="#333333">
		<link rel="stylesheet" href="design/style1.css">
		<link rel="stylesheet" href="design/style2.css" media="screen and (max-width: 600px)">
		<style>
			@font-face
			{
				font-family: chalk;
				src: url(marker.ttf);
			}
			@font-face
			{
				font-family: marker;
				src: url(marker.ttf);
			}
		</style>
	</head>
	<body>
		<div class="black_board" style="font-size: 40px">
			Feedback
		</div>
		
		
		</div>
		
		<div class="black_board">
		<form action="form_data.php" method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" class="in" name="Name" style=""/></td>
				</tr>
				<tr>
					<td>Comment:</td>
					<td><input type="text" class="in" name="comment" style="height: 8vh;"/></td>
				</tr>
			</table>
			<button type="submit" style="font-family: chalk;border-radius: 30px;">Submit</button>
		</form>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="black_board" style="font-size: 40px">
			<a href="../index.php" style="font-family: marker">HOME</a>
		</div>
		
	</body>
</html> 