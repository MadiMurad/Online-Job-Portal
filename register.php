<?php include('connection.php');
include('header.php');
include('sidebar.php'); 

if (isset($_POST['submit']))
{
	
	$name= $_POST['name'];

	$email= $_POST['email'];
	$password= $_POST['password'];
	$mobile = $_POST['mobile'];
	$city= $_POST['city'];
	$user_type= $_POST['user_type'];
	
	
	$xyz="insert into employee (name, email, password, contact, city, user_type) values ('$name', '$email', '$password', '$mobile', '$city', '$user_type')";
	
	
	
	$sql= mysqli_query($link, $xyz);

	
	if ($sql) {
		
		echo "<script> alert (' Your data has been submitted', '".$name."')</script>";
		
		
	}
	
	else {
		
		 echo "not";
		
	}
	
	
}




?>
  

 

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			



<form class="form-horizontal" method="post" enctype="multipart/form-data">

<fieldset style="margin:50px">

<!-- Form Name -->
<legend>Create an Account</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"> Full Name</label>  
  <div class="col-md-4">
  <input name="name" type="text" placeholder="Enter your Name" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input name="email" type="email" placeholder="Enter Email" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password</label>  
  <div class="col-md-4">
  <input name="password" type="password" placeholder="Enter Password" class="form-control input-md" required>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Mobile Number</label>  
  <div class="col-md-4">
  <input name="mobile" type="number" placeholder="Enter Mobile Number" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">City</label>  
  <div class="col-md-4">
  <input name="city" type="text" placeholder="Enter City Name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">User Type</label>  
  <div class="col-md-4">

<select name="user_type" class="form-control" required="">
	<option value="" selected="">Choose Type</option>
	<option value="Employee">Employee</option>
	<option value="User">User</option>
</select>

 
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <center><input name="submit" type="submit" placeholder="Submit" class="btn btn-success btn-block">
    </center>
  </div>
</div>




</fieldset>
</form>
	
		</div>
	</div>
</div>

<?php include('footer.php'); ?>


