<?php
session_start();

$sname = $_SESSION[ "sname" ];
?>
<?php include('adminhead.php');  ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h3> Video section </h3>
			
			<a href="addvideos.php"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%">Add Videos</button></a>
			<a href="managevideos.php"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%">Manage Videos</button></a>
			</div>
	</div>
	<?php include('allfoot.php');  ?>