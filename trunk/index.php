<?php 

	// process form submission
	if(isset($_POST['submit'])) {

		// check to see if JavaScript is disabled
		if(isset($_POST['js_check']) && $_POST['js_check'] == 0) {

			// sanatize and validate user input
			

			// process the form as usual...
			

		}else{ // we have js, check for slideLock validation

			// alter the POST array key and the return value based on your settings
			if(isset($_POST['sliderInput']) && $_POST['sliderInput'] == 10) {

				// sanatize and validate user input
				

				// process the form as usual...
				

			}else{

				// validation has failed, inform user
				

			}

		}

	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>slideLock</title>
	<meta name="description" content="">
	<meta name="author" content="Sean Mullin, http://parametercontraption.com">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<link rel="shortcut icon" href="images/design/favicon.ico">
	<link rel="apple-touch-icon" href="images/design/apple-touch-icon.png">
	<link rel="stylesheet" media="screen" href="css/screen.css">
	<link rel="stylesheet" media="all" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css" />
    <link rel="stylesheet" media="screen" href="css/slideLock.css">
    <script src="js/modernizr-1.7.min.js"></script>
</head>
<body>
	<header>
    	<h1>slideLock Demo</h1>
    </header>
    <section id="content">
    	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" id="testForm">
        	<fieldset>
            	<legend>Test Form</legend>
                <?php if(isset($message)) foreach($message as $m) print $m; ?>
                <p><label for="name">Name:</label><input type="text" name="name" id="name" placeholder="Your Name" required /></p>
                <p>
                	<label for="color">Favorite Color:</label>
                	<select name="color" id="color" required>
                    	<option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                    </select>    
                </p>
                <p><label for="comments">Comments:</label><textarea name="name" id="name" required></textarea></p>
                <input type="submit" name="submit" id="submit" value="Submit" />
            </fieldset>
        </form>
    </section>
    <footer>
    	<p>&copy; 2011 <a href="http://parametercontraption.com">Parameter Contraption</a> | Release under a <a href="http://www.opensource.org/licenses/mit-license.php">MIT License</a></p>
    </footer>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
<script src="js/jquery-slideLock-3.0.js"></script>
<script>
	// set options for slideLock here
	$(document).ready(function() {
							   
		$("#testForm").slideLock();
							   
	});
</script>
</html>