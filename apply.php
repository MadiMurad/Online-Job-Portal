<?php

include('header.php');
include('sidebar.php');

$record = "select * from jobs";

$sql = mysqli_query ($link, $record);

while ($rows= mysqli_fetch_array($sql)) {



	$id = $rows ['id']; 
 $title = $rows ['title']; 
 $location = $rows ['location']; 
 $area = $rows ['area']; 




}	







if (isset ($_POST['submit'])) 
	
	{
		$name 	= $_POST['name'];
		$a 	  = $_POST['title'];
		$b 	  = $_POST['location'];
		$c 	  = $_POST['area'];
		$g    = $_POST['pdate'];
		$m 	  = $_POST['experance'];
		$i    = $_POST['gender'];
		$j    = $_POST['limit'];
		$k    = $_POST['education'];
		
 $img=$_FILES['file']['name'];
    $tmpname=$_FILES['file']['tmp_name'];
    move_uploaded_file($tmpname, "uploads/$img");
		
		
	$insert = "insert into cvs (user_name, title, location, area, post_date, experance, gender, age_limit, education, files, status) values ('$name', '$a', '$b', '$c', '$g', '$m', '$i', '$j', '$k', '$img', 'Applied')";
		
		
		$sql = mysqli_query ($link, $insert);
		
		if ($sql) {
			
			echo "<script> window.alert('Your record submitted')</script>";
			exit();
			
		}
		
		else {
			
			echo"not";
			echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
	}



?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">

<form method="POST" class="col-md-12" enctype="multipart/form-data">

<h3 align="center"> Apply on Job</h3>
<hr>
<br>

<div class="form-group">
<label> Name </label>

<input type="text" name="name" class="form-control" required value="<?php echo $_SESSION['name']; ?>">
</div>

<div class="form-group">
<label> Post Title </label>

<input type="text" name="title" class="form-control" required value="<?php echo $title; ?>">
</div>


<div class="form-group">
<label> Location </label>

<input type="text" name="location" class="form-control" required value="<?php echo $location; ?>">
</div>


<div class="form-group">
<label> Industory </label>

<input type="text" name="area" class="form-control" required value="<?php echo $area; ?>">
</div>




<div class="form-group">
<label>Job Post Date</label>

<input type="date" name="pdate" class="form-control" required>
</div>



<div class="form-group">
<label>Total Experance</label>

<input type="text" name="experance" class="form-control" required>
</div>



<div class="form-group">
<label>Gender</label>

<input type="text" name="gender" class="form-control" required>
</div>



<div class="form-group">
<label>Age Limit</label>

<input type="text" name="limit" class="form-control" required>
</div>


<div class="form-group">
<label>Education</label>

<input type="text" name="education" class="form-control" required>
</div>

<div class="form-group">
<label>Upload CV</label>

<input type="file" name="file" class="form-control" required>
</div>

<div class="form-group">
<input type="submit" name="submit" Value="Submit" class="form-control btn btn-primary btn-md">
</div>

</div>
</div>
</div>
</div>
</div>
</div>



<?php

include ('footer.php');
?>