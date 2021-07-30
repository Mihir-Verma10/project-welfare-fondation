<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>WelFare Foundation</title>

		
		<!-- WEB FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		
		<!-- BOOTSTRAP -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- CUSTOM STYLING -->
		<link href="css/styles.css" rel="stylesheet">
	</head>

	
    <style type="text/css">
    .h1 {
                
                font-size: 100px;
                color:white;
                
                font-weight: bold;
               
                
            font-family: Brush Script MT;
            }
    
    
    </style>
	
<body>
	<!-- HEADER -->
		<section id="header">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8">
						<p class="h1">Welfare Foundation</p>
                        
						<h1 class="white-text">Donate for Cause</h1>
						<h5 class="white-text">Your generosity gives children a smile, support our work!</h5>
						<div id="countdown" class="white-text"></div>
					</div>
				</div>
			</div>
			<div class="animation">
			<a class="arrow-down-animation" data-scroll href="#about"><i class="fa fa-angle-down"></i></a>
			</div>
		</section>
	<!-- HEADER ENDS -->
		
	<!-- ABOUT -->
		<section id="about">
			<div class="container">
				<div class="row text-center">
					<!-- Section 1 -->
					<div data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="col-md-4">
						<i class="fa fa-book"></i>
						<h3>Child Education</h3>
						<div class="colored-line-small-center"></div>
						<p>According to recent estimates – 25% of children that are of age to attend primary school in rural zones are not educated versus 16% of children of the same age living in urban areas.</p>
					</div>
					<!-- Section 2 -->
					<div data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="col-md-4 middle">
						<i class="fa fa-heart-o"></i>
						<h3>Health Demographic</h3>
						<div class="colored-line-small-center"></div>						
						<p>Despite these inadequacies, the health of rural children appears to be deteriorating with regard to crime, substance abuse, and infection with the human immunodeficiency virus or AIDS.</p>						
					</div>
					<!-- Section 3 -->
					<div data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="col-md-4">
						<i class="fa fa-lemon-o"></i>
						<h3>Rural Eating Habits</h3>
						<div class="colored-line-small-center"></div>
						<p>The proper lifestyle of a child includes proper eating habits should be monitored properly in the rural areas where economically, socially and educationally backward for physical developments.</p>						
					</div>
				</div>
			</div>			
		</section>
	<!-- ABOUT ENDS -->
	
	<!-- SUBSCRIBE -->
		<section id="subscribe">
			<div class="container">
				<i data-sr="ease-in over 1s, reset" class="fa fa-money icontop"></i>
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<h2 data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="white-text"><b>Donate Now !!</b></h2>
						<h5 data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="white-text">Help our organization with sharing the page.</h5>
						
						<div><a href='http://localhost/Welfare-Foundation-main/signup.php'><button>donate</button></a>
							<script>
							  (function(){
								var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
								if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
								s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
								rzp && rzp.init && rzp.init()}})();
							</script>
						</div>
					</div>
				</div>
			</div>	
		</section>
	<!-- SUBSCRIBE ENDS -->
	
	<!-- CONTACT US -->
		<section id="contact">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<!-- CONTACT FORM -->
                        <img src="logo.png" height = "250" width = "250" class="img">
						</div>
					<!-- AFTER SENDING MESSAGE -->
								
				</div>
			</div>
		</section>
	<!-- CONTACT ENDS -->
	
	<!-- FOOTER -->
		<footer id="footer">
			<div class="container">
				<div class="row text-center">	
					<p>
						&copy; 2021 WelFare Foundation | Design By KIPS
						<span class="social">
							<a href="https://www.facebook.com/unikips/"><i class="fa fa-facebook-square"></i></a>
							</span>
					</p>
				</div>
			</div>		
		</footer>
	<!-- FOOTER ENDS -->	

	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<!-- SMOOTH SCROLL -->
		<script src="js/smooth-scroll.min.js"></script>
		<!-- PARALLAX IMG -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- SCROLL REVEAL -->
		<script src="js/scrollReveal.min.js"></script>
		<!-- FUNCTIONS -->
		<script src="js/functions.js"></script>

</body>
</html>