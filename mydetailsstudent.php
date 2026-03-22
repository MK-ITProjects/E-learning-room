<?php
session_start();

if ( $_SESSION[ "sidx" ] == "" || $_SESSION[ "sidx" ] == NULL ) {
	header( 'Location:studentlogin' );
}

$userid = $_SESSION[ "sidx" ];
$username = $_SESSION[ "name" ];
?>
<?php include('studenthead.php'); ?>



<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">

			
			<?php
			include( 'database.php' );
			$varid = $_REQUEST[ 'myds' ];
			//selecting data from assessment table
			$sql = "select * from  studenttable where Eid='$varid'";
			$result = mysqli_query( $connect, $sql );
			//loop below will print details of assessment
			while ( $row = mysqli_fetch_array( $result ) ) {
			?>
			<fieldset>
				<legend><h3>My Details</h3></legend>
				<form action="" method="POST" name="update">
					<table class="table table-hover">

						<tr>
							<td><strong>Enrolment number : </strong>
							</td>
							<td>
								<?php echo $row['Eno']; ?>
							</td>

						</tr>
						<tr>
							<td><strong>Surname :</strong> </td>
							<td>
								<?php echo $row['SName']; ?>
							</td>
						</tr>
						<tr>
							<td><strong>Student Name :</strong> </td>
							<td>
								<?php echo $row['Name']; ?>
							</td>
						</tr>
						<tr>
							<td><strong>Father Name :</strong> </td>
							<td>
								<?PHP echo $row['FaName'];?>
							</td>
						</tr>
						<tr>
							<td><strong>Gender :</strong>
							</td>
							<td>
								<?PHP echo $row['GENDER'];?>
							</td>
						</tr>
						<tr>
							<td><strong>Address : </strong>
							</td>
							<td>
								<?PHP echo $row['Addrs'];?> </td>
						</tr>
						
						<tr>
							<td><strong>city : </strong>
							</td>
							<td>
								<?PHP echo $row['City'];?>
							</td>
						</tr>
						<tr>
							<td><strong>D.O.B. : </strong> </td>
							<td>
								<?PHP echo $row['DOB'];?>
							</td>
						</tr>
						<tr>
							<td><strong>Contact :</strong>
							</td>
							<td>
								<?PHP echo $row['PhNo'];?> </td>
						</tr>
						<tr>
							<td><strong>Email : </strong>
							</td>
							<td>
								<?PHP echo $row['Eid'];?>
							</td>
						</tr>
						
						<tr>
							<td><a href="updatedetailsfromstudent.php?eno=<?php echo $row['Eno']; ?>"><input type="button" Value="Edit" class="btn btn-info btn-sm" style="border-radius:0%;"></a></td>
							
						</tr>
					</table>
				</form>
			</fieldset>
			<?php
			}
			?>
		</div>

		<div class="col-md-2"></div>
	</div>
	<?php include('allfoot.php'); ?>