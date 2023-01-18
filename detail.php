<?php 
    
    include "header.php";
    include "../../connection.php";
    $conn = Conn();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Course detail</title>
	
</head>
<body>
	<main>

		<?php 
			$current_id = $_GET['pk'];

			$sqlString ="SELECT * FROM tbl_schedule as s 
				INNER JOIN tbl_course as c, 
				tbl_instructor as ins,
				tbl_shift as sh
				WHERE c.id = s.course_id AND 
				ins.id = s.instructor_id AND 
				sh.id = s.id AND s.id = $current_id";

				$result = $conn->query($sqlString);


		?>


		<style type="text/css">
			.card {
			    position: relative;
			    display: flex;
			    flex-direction: column;
			    min-width: 0;
			    word-wrap: break-word;
			    background-color: #fff;
			    background-clip: border-box;
			    border: 1px solid rgba(0,0,0,.125);
			    border-radius: .25rem;
			}
			.card-title{
				font-family: 'Roboto', sans-serif !important;				
			}
			.card-text{
				
				font-family: 'Roboto', sans-serif;		
			}
			.card-text-1{
				font-family: 'Preahvihear', cursive;
						
			}
		</style>
		<div class="container"> 
			<div class="card">
				<div class="card-body" style="background-color: white; border-radius: 5px 5px;">
					<div class="row">
						<?php 
							while($row = $result->fetch_assoc()) {	
								
						?>
							<div class="col-md-4">
								<img src="../../<?php echo $row['course_image'] ?>" class="card-img-center" alt="" style="width: 100%;" alt='<?php echo $row['title']; ?>'> 
								<div>
									<p style="color:blue;">
										<?php echo $row['description']; ?>
									</p>
								</div>
							</div>

							<div class="col-md-8" style="border-left: 1px solid gray;">
								<div class="card-body">
										
					   					<h5 class="card-title" style="font-family: 'Roboto', sans-serif; font-size: 2.25rem;">
					   						<?php echo $row['title']; ?>
					   					</h5>
					   					<hr>
					    				<p style=" display: inline;">Price : </p><p style="color:red; display: inline;">$<?php echo $row['price'] ?> </p><p style=" display: inline;">/ 45 Hours </p>
										<hr>
					    				<p class="card-text-1">
					    					<span class="glyphicon glyphicon-calendar"></span>
					    				ថ្នាក់ចាប់ផ្តើម <?php echo $row['​start_class']; ?> </p>
					    				<p class="card-text-1">
					    					<span class="glyphicon glyphicon-calendar"></span> ចាប់ផ្ដើមចូលរៀនថ្ងៃទី <?php echo $row['end_class']; ?> </p>
					    				<hr>
										<img src="/student_management/media/teacher.png" class="card-img-center" alt=""><br>
					    				<p class="card-text-1" style=" display: inline;">លោក/អ្នកគ្រូ </p><p style=" display: inline;" >: <?php 
					    					echo $row['first_name']. " ". $row['last_name'];
					    				?></p>
					    				<p class="card-text">Tel : <a href="tel:<?php echo $row['telephone_number'] ?>"><?php echo $row['telephone_number'] ?> </p>
					    				<hr>
					    				<a href="register.php?pk=<?php echo $current_id; ?>&course_title=<?php echo $row['title']; ?>" class="btn btn-primary">Register</a>
					  				</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php 
		mysql_close($conn);
	?>
</body>
</html>
