<?php 
	include 'dbConnection.php';
	
	$car_name = mysqli_real_escape_string($conn, $_POST['car_name']);
	$purchase_date= $_POST['purchase_date'];
	$year= $_POST['year'];
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$price= mysqli_real_escape_string($conn, $_POST['price']);
	$image= $_FILES['image'];
	$auto_maker = $_POST['maker_id'];

  // put all this shit the the DB!
    if (isset($_POST['car_id'])) {
    	$car_id = $_POST['car_id'];

     	$sql= "UPDATE car_names SET car_name='$car_name',  purchase_date= '$purchase_date', year='$year', description='$description', price='$price' WHERE id = $car_id";

		$conn->query($sql);

   	}
   	
  	header('Location: /EastFallsCarDealership/privateListingsPage.php?message=' . urlencode('Success! Car saved.'));    
?>