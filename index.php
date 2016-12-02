<!DOCTYPE html>
<html lang="en">
	<head>
      <meta charset="UTF-8">
	  <title>Survey Form</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	</head>

  	<body>
  		<div id="form">
	  		<form action="result.php" method="post">
				<p>Name: <input type="text" class="form-inline" name="name"></p>
				<p>Dojo Location: <select name="location">
				<option value="Mountain View">Mountain View</option>
				<option value="Seattle">Seattle</option>
				<option value="Outer Space">Outer Space</option>
				</select></p>
				<p>Favorite Language: <select name="language">
				<option value="Javascript">Javascript</option>
				<option value="PHP">PHP</option>
				<option value="Angular">Angular Javascript</option>
				<option value="Ruby on Rails">Ruby on Rails</option>
				</select></p>
				<p>Comment (optional): <textarea class="form-control" rows="5" name="comment"></textarea></p>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>


  	</body>
</html>