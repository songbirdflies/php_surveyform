<!DOCTYPE html>
<html lang="en">
	<head>
      <meta charset="UTF-8">
	  <title>Survey Form Result</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	</head>

  	<body>
  		<div id="form">
	  		<h3><u>Submitted Information</u></h1>
	  		<p>Name:<?php echo $_POST['name']; ?></p>
	  		<p>Location: <?php echo $_POST['location']; ?></p>
	  		<p>Favorit Language: <?php echo $_POST['language']; ?></p>
	  		<p>Comment: <?php echo $_POST['comment']; ?></p>
  		</div>
  	</body>
</html>