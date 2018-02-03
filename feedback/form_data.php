<!DOCTYPE html>
<html>
	<head>
		<title>Submitted</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="design/style1.css">
		<link rel="stylesheet" href="design/style2.css" media="screen and (max-width: 600px)">
		<meta http-equiv="refresh" content="3;url=index.php">
		<style>
			@font-face
			{
				font-family: chalk;
				src: url(chalk.otf);
			}
			@font-face
			{
				font-family: marker;
				src: url(marker.otf);
			}
		</style>
	</head>
	<body>
		<div class="black_board" style="font-family: Sans-serif;text-align: left">
		<?php
			date_default_timezone_set("Asia/Kolkata");
			echo '<b>Name:</b> '.$_POST['Name'].'<br>';
			echo '<b>Comment:</b> '.$_POST['comment'].'<br>';
			echo '<b>Client IP:</b> '.$_SERVER['REMOTE_ADDR'];
			
			$default1='<div class="comm"><table><tr><td><b>Name:</b></td><td> ';
			$default2='<tr><td><b>Comment:</b></td><td> ';
			$default3='<tr><td><b>Client IP:</b></td><td> ';
			$default4='<tr><td><b>Date:</b></td><td> ';
			$default6='</table></div><br>'.PHP_EOL;
			
			$myfile=fopen("data.html","a");
			fwrite($myfile,$default1.$_POST['Name'].'</td></tr>');
			fwrite($myfile,$default2.$_POST['comment'].'</td></tr>');
			fwrite($myfile,$default3.$_SERVER['REMOTE_ADDR'].'</td></tr>');
			fwrite($myfile,$default4.date("d/m/y l h:i:sa").'</td></tr>'.$default6);
			fclose($myfile);
		?>
		<br><br>Thanks for your feedback.
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