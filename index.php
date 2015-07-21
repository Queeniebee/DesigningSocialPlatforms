<!DOCTYPE html>
    <html>
    	<head>
    		<title>Trivia Game!</title>
    		<meta charset="utf-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
     
    		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    	</head>
    	<body>
    		<?php
    			// If the submit button has been pressed
    			if(isset($_POST['submit']))
    			{
    				// Print greeting to browser
    				echo "<h1>Hello " . $_POST['firstname'] . "</h1>";
    			} else {
						echo "<h2>Please enter your name</h2>";

				}
    		?>
     
    		<!-- HTML form -->
	<section class="container-fluid">
	<div class="row">
    		<form method="post" action="index.php">
    			<div class="form-group">
    				<label>What is your first name?</label>
    				<input name="firstname" type="text" class="form-control" />
    			</div>
    			<input name="submit" type="submit" value="Go" class="btn btn-primary" />
    		</form>
	</div>
		<div class="row">
		   		<form method="post" action="index.php">
    				<label>Do you like what you are doing?</label><br />
				<input name="answer" type="radio" value="yes" />Yes<br />
				<input name="answer" type="radio" value="yes" />No<br />
    			<input name="submit" type="submit" value="Send" class="btn btn-primary" />

    		</form>
		</div>
    		</section>
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    		
    	</body>
    </html>