<html>
<title>Starbuck</title>
<meta charset="utf-8">
<link rel="stylesheet" href="node_modules/bulma/css/bulma.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
<link rel="stylesheet" href="stylesheets/screen.css"/>
<link rel="stylesheet" href="stylesheets/popup.css"/>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.quickflip.source.js" type="text/javascript"></script>

<body>

<script>
  $(function() {
      $('.quickFlip').quickFlip();

     
  });
</script>
	<nav class="nav tab_bar">


			<div class="nav-center">
				<h1 class="ti_headbsr">My Cards</h1>

			</div>
		</nav>
		<div class="rewards">
			<i class="fa fa-star" style="float:left;color:#6cb23f;margin-top:4px;"></i>
				<h1>Green level</h1> <br>
				<h4>STARS YOU'VE EARNED <span>101</span></h4>

				<br>

				<p>Your membership expiry date is 2017-03-29,</p><br>
				<p>19 more Stars to reach Gold level</p>
			<button type="button" name="Reward" value="reward" class="reward" ><a href="benafit.php">Reward</a></button>
		</div>
		<div class="container bg-container">
			<div class=" quickFlip">
			<div class="blackPanel">
				<div class="quickFlipCta">
						<img src="img/promo1stpage.png" >
				</div>




			</div>

			<div class="redPanel">
					<div class="silde_left">
							<img src="img/starbucks-coffee-black-vector-logo-400x400.png"/>
					</div>

					<form  action="index_api.php" method="post" class="form_input_num">
						<input type="text" name="num_pass" placeholder="number card" maxlength="10"><br>
						<input type="text" name="num_secure" placeholder="number Security" maxlength="6"><br>
						<a href="#" class="quickFlipCta">Back</a>
						<input type="submit" name="submit" onclick="Invalid();">
					</form>

	<script>
	function Invalid() {
		alert("Invalid Card Number");
	}
			
		</script>					
					<div class="horizal_line"></div>
				</div>
	</div>
	<a href="pay.php"><div class="btn-touch_pay" ><h4>Touch to Pay</h4></div></a>

<div class="text_detail_item">
	<h1>Baht 205.00</h1>
	<h2>As of 2560-02-22 19:43</h2>
</div>
<div class="sign_in">
	<h4>Register</h4>
	<h4>60801524415962</h4>
</div>
<br>
<div class="con_btn">
	<button type="button" name="button" class="btn-chos" id="myBtn">Manage</button>
	<button type="button" name="button" class="btn-chos">Add a Card</button>
</div>



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    	<button onclick="reload()" >Refresh Balance</button><br>
    	<button onclick="window.location.href='history.php'">Transition History</button><br>
    	
  </div>

</div>
<script>
	function reload(){
		location.reload();
	}

</script>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


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
