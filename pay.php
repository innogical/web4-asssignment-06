<html>
<title>Starbuck</title>
<meta charset="utf-8">
<link rel="stylesheet" href="node_modules/bulma/css/bulma.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
<link rel="stylesheet" href="stylesheets/screen.css"/>
<link rel="stylesheet" href="stylesheets/pay.css"/>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.quickflip.source.js" type="text/javascript"></script>
<body>

<script>
  $(function() {
      $('.quickFlip').quickFlip();

      // $('.quickFlip3').quickFlip({
      //     vertical : true
      // });
			//
      // $('.quickFlip2').quickFlip();
  });
</script>
	<nav class="nav tab_bar">


			<div class="nav-center">
				<h1 class="ti_headbsr">My Cards</h1>

			</div>
		</nav>
	
		<div class="container bg-container">
			<div class=" quickFlip">
				

				<div class="redPanel">
						<div class="silde_left">
								<img src="img/starbucks-coffee-black-vector-logo-400x400.png"/>
						</div>

						<div class="p_user"><p>Your starbuck number is </p>
							<p>6080152441596222</p>
						</div>
						<div class="horizal_img">
							<img src="img/barcode.gif" alt="">
						</div>
					</div>
		</div>
	<a href="#"><div class="btn-touch_pay" onclick="reload();"><h4>Touch when done</h4></div></a>
	<script>
		function reload() {
			// body...
			location.reload();
		}

	</script>
<br>	

<h5 class="subtitle is-5 scan_now">Scan now</h5>


	<div class="menu_button">
		<span><a href="index.php">Home</a></span>
		<span><a href="#">Card</a></span>
		<span><a href="#">Stores</a></span>
		<span><a href="#">Messages</a></span>
		<span><a href="#" style="  margin-left: 20px;">More</a></span>




	</div>


		</div>

</body>
</html>
