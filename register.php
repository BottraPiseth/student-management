<?php 
    
    include "header.php";
    include "../../connection.php";
    $conn = Conn();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<main>
		<?php 
			$current_id = $_GET['pk'];
			$course_title = $_GET['course_title'];
		?>
		<style type="text/css">
			
			.form-select {
			    display: block;
			    width: 100%;
			    height: 35px;
			    border-radius: 4px 4px;
			    border: 1px solid #ced4da;
			   
			    background-color: #fff;
			    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
			    background-repeat: no-repeat;
			    background-position: right .75rem center;
			    background-size: 16px 12px;
			   
			    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
			    -webkit-appearance: none;
			    -moz-appearance: none;
			    appearance: none;
			}
			label{
				color: white;
			}

			select{
				position: relative;
			}
					
			.mb-3
			{
				margin-bottom: 15px;
			}

		</style>
		<div class="container">
			<div style="text-align: center; color: #f1f1f1; margin-bottom: 30px;">
				<h1><span class="glyphicon glyphicon-education"></span> Student Registration!</h1>
			</div>
			<div style="text-align: center; color: #f1f1f1; margin-bottom: 30px;">
				<h3>Your register course is: << <?php echo $course_title; ?> >></h3>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form action="../success/success.php" method="GET">
			  			<div class="mb-3">
			    			<label for="name" class="form-label">Full Name</label>
			   				<input type="name" class="form-control" name="txt_full_name" id="txt_full_name" aria-describedby="namelHelp" required="" maxlength="20" placeholder="Input Your Full Name">	

			  			</div>
			  			<div class="mb-3">
			   				<label for="phone" class="form-label">Phone Number</label>
			    			<input type="phone" class="form-control" name="txt_phonenumber" id="phone" required="" maxlength="20" placeholder="Input Your Phone Number">
			 			</div>

			 			<div class="mb-3">
			   				 <label for="email" class="form-label">Email address</label>
			    			<input type="email" class="form-control" name="txt_email" id="email" placeholder="name@example.com">
			    		</div>
			    		
				 		<hr/>
				 		<div class="mb-3" style="">
				  			
				  			<button type="submit" class="btn-lg btn-success"><span class="glyphicon glyphicon-saved"></span>Submit</button>
				  			<button type="clear" class="btn-lg btn-warning"><span class="glyphicon glyphicon-minus-sign"></span> Clear</button>
				  			<a href="detail.php?pk=<?php echo $current_id; ?>" class="btn-lg btn-danger"><span class="glyphicon glyphicon-menu-left"></span> Back</a>
				  		</div>
					</form>	
				</div>
			</div>
		</div>
	</main>
</body>
</html>
