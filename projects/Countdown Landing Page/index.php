<?php

	if(isset($_POST['submit'])){
		$from = $_POST['email'];
		$to = 'kelvinchowjunjie120@hotmail.com'
		$subject = 'Email signup';
		$body = 'Please sign up to the mailing list';

		if(!$_POST['email']){
			$emailError = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Please enter a valid email address</div>';
		}

		if (!$emailError){
			if (mail ($to,$subject, $body, $from)){
				$result = '<div class="text-success"><i class="fa fa-check-square" aria-hidden="true"></i> &nbsp;Thank you, we\'ll keep you updated</div>';
			}
			else{
				$result = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp;Sorry, there has been an error, please try again.</div>';
			}
		}
	}


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

</head>

<body>
	<section id="logo">
		<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="img/my-logo.png" class="img-fluid"/>
					</div>
				</div>
		</div>

	</section>

	<section id="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>We're working hard, we'll be ready to launch in...</p>
				</div>
			</div>
		</div>
	</section>

	<section id="counter">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="countdown"></div>
				</div>
			</div>
		</div>
	</section>

	<section id="icons">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline">
						<a href="http://twitter.com" target="blank"><li class="list-inline-item"><i class="twitter fa fa-twitter-square fa-3x" aria-hidden="true"></i></li></a>
						<a href="http://facebook.com" target="blank"><li class="list-inline-item"><i class="facebook fa fa-facebook-square fa-3x" aria-hidden="true"></i></li></a>
						<a href="http://google.com" target="blank"><li class="list-inline-item"><i class="google fa fa-google-plus-square fa-3x" aria-hidden="true"></i></li></a>
						<a href="http://instagram.com" target="blank"><li class="list-inline-item"><i class="instagram fa fa-instagram fa-3x" aria-hidden="true"></i></li></a>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="signup">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form class="form-inline" role="form" method="post" action="#signup">
						<input type="email" class="form-control form-control-sm" name="email" placeholder="enter your email">
						<button type="submit" class="btn btn-signup btn-sm" name="submit" values="send">Find out more</button>
					</form>

					<?php
						echo $emailError;
					?>
					<?php echo $result;?>
				</div>
			</div>
		</div>
	</section>

<!-- jQuery, Tether, Bootstrap JavaScript -->


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>

		<script>
		$(function() {
		    $('.countdown').countdown({
		        date: "December 27, 2017 15:03:26"
		    });
		});

		</script>

</body>

</html>