<?php
session_start();

if ( $_SESSION[ "umail" ] == "" || $_SESSION[ "umail" ] == NULL ) {
	header( 'Location:AdminLogin' );
}
$userid = $_SESSION[ "umail" ];
?>
<!DOCTYPE  HTML>
<?php include('adminhead.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<!--Welcome page for admin-->
			<h3> Welcome Admin</h3>
			
			
			<a href="studentdetails.php"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-graduation-cap"></i> Student Details</button></a>
			<a href="assessment.php"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-pencil-square"></i> Assessment Section</button></a>
			<a href="examDetails.php"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-file"></i> Publish Result</button></a>
			<a href="resultdetails.php"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-indent"></i> Edit Result</button></a>
			<a href="qureydetails.php"> <button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-question"></i> Student's Query</button>
			<a href="videos.php"> <button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-video-camera"></i> Videos</button>
			  

			

			<a href="logoutadmin"><button  href="" type="submit" class="btn btn-danger" style="border-radius:0%">Logout</button></a>

		</div>
	</div>
	<?php include('allfoot.php'); ?>