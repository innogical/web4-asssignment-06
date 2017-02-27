<html>
<title>Starbuck</title>
<meta charset="utf-8">

<link rel="stylesheet" href="node_modules/bulma/css/bulma.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
<link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="stylesheets/history.css">

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.quickflip.source.js" type="text/javascript"></script>
<body>		
		<nav class="nav tab_bar">
			<div class="icon_back">
				<a href="index.php"><i class="fa fa-angle-left fa-2x"></i></a>	
			</div>
			
			<div class="nav-center">
				<h1 class="ti_headbsr">Transaction History</h1>
			</div>
		</nav>
		<div class="container bg-container">
			<div class="head_id">
				<div class="img_id" >
					<img src="img/promo1stpage.png" >
				</div>
				<?php 
include 'connect_.php';

$str = "SELECT * FROM member_cus WHERE memb_passcard= '2147483647'
		"; 
		//echo $str;
$result = $conn->query($str);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>

				<div class="id_startbuck">
					<h3><?php echo $row["memb_passcard"]; ?></h3>
					<h5>Baht205.00</h5>
					 <?php
    }
}
?>
				</div>
				<div class="detail_transtion">
					<p>Displaying your last 10 transatinos</p>
				</div>
			</div>
			
			<table>
			<?php 

$sql = "SELECT *, order_cus.* FROM member_cus, order_cus
		WHERE order_cusName = member_cus.memb_name
		ORDER BY order_dmy DESC,order_time DESC"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>


  
    <tbody>
        <tr>
            <td><?php echo $row["order_dmy"]; ?></td>
            <td><?php echo $row["order_time"]; ?></td>    
            <td><?php echo $row["order_price"]; ?>Baht</td>
        </tr>
         <?php
    }
}

$conn->close();
			 ?>
    </tbody>
</table>
				
		</div>
		
			<div class="menu_button">
					<span><a href="index.php">Home</a></span>
					<span><a href="#">Card</a></span>
					<span><a href="#">Stores</a></span>
					<span><a href="#">Messages</a></span>
					<span><a href="#" style="  margin-left: 20px;">More</a></span>
			</div>

		
</body>
</html>