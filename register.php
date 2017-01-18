<?php include'include/header.php';?>
<?php include 'top_header.php';?>

<div class="container">
	<div class="register">
		<h1>Register</h1>
		  	  <form method="post" action="include/adduser.php"> 
				 <div class="col-md-6  register-top-grid">
					
					<div class="mation">
						<span>First Name</span>
						<input type="text" name="fname" required="required"> 
					
						<span>Last Name</span>
						<input type="text" name="lname" required="required"> 
					 
						 <span>Email Address</span>
						 <input type="email" name="email" required="required"> 

						  <span>Contact Number</span>
						 <input type="number" name="c_num" required="required"> 
					</div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
					   </a>
					 </div>
				     <div class=" col-md-6 register-bottom-grid">
						   
							<div class="mation">
								<span>Username</span>
								<input type="text" name="username" required="required"> 
								<span>Password</span>
								<input type="password" name="password" required="required">
								
							</div>
					 </div>
					 <div class="clearfix"> </div>
				
				<div class="register-but">
					   <input type="submit" class="btn btn-primary" value="SUBMIT">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
</div>
	<?php include'include/footer.php';?>