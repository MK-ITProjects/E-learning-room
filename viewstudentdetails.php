<?php
session_start();

?>
<?php include('adminhead.php');  ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<?php
			include( "database.php" );
			$sql = "select * from  studenttable";
			$result = mysqli_query( $connect, $sql );
			echo "<h2 class='page-header'>Student Details</h2>";
			//below will print all student details to admin
			echo "<table class='table table-striped table-hover' style='width:100%'>
			<tr>
			<th>Enrollment No.</th>
			<th>Surname</th>
			<th>Student Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Gender</th>
			<th>DOB</th>
			<th>Contact</th>
			
			</tr>";
			while ( $row = mysqli_fetch_array( $result ) ) {
				?>

			<tr>
				<td>
					<?php echo $row['Eno'];?>
				</td>
				<td>
					<?php echo $row['SName'];?> <?php echo $row['Name'];?>
				</td>
				<td>
					<?php echo $row['FaName'];?>
				</td>
				<td>
					<?php echo $row['Eid'];?>
				</td>
				<td>
					<?php echo $row['Addrs'];?>
				</td>
				<td>
					<?php echo $row['City'];?>
				</td>
				<td>
					<?php echo $row['DOB'];?>
				</td>
				<td>
					<?php echo $row['PhNo'];?>
				</td>
				
			</tr>
			<?php } ?>
			</table>
		</div>
	</div>
	<?php include('allfoot.php'); ?>