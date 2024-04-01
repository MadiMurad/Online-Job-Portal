<?php

include('header.php');
include('sidebar.php');

?>


<div class="container">
	<div class="row">

<div class="col-md-12" style="margin-top: 50px; margin-bottom: 50px;">

<h3 align="center"> View Jobs Status </h3>
<hr>
<br>

<table class="table table-bordered">

<tr>
<th>Serial Number</th>
<th> Name </th>
<th> Job Title </th>
<th> Location </th>
<th> Industory </th>
<th>Job Post Date</th>
<th>Required Job Experance</th>
<th>Gender</th>
<th>Age Limit</th>
<th>Education</th>
<th>Action</th>

<th> Status </th>

</tr>

<tr>

<?php

$record = "select * from cvs where user_name= '".$_SESSION['name']."'";

$sql = mysqli_query ($link, $record);

while ($rows= mysqli_fetch_array($sql)) {
	
?>

<td> <?php echo $rows ['id']; ?> </td>
<td> <?php echo $rows ['user_name']; ?> </td>
<td> <?php echo $rows ['title']; ?> </td>
<td> <?php echo $rows ['location']; ?> </td>
<td> <?php echo $rows ['area']; ?> </td>
<td> <?php echo $rows ['post_date']; ?> </td>
<td> <?php echo $rows ['experance']; ?> </td>
<td> <?php echo $rows ['gender']; ?> </td>
<td> <?php echo $rows ['age_limit']; ?> </td>
<td> <?php echo $rows ['education']; ?> </td>
<td><a class="btn btn-primary" href="cv/<?php echo $rows ['files']; ?>">Download CV </span></td>
<td><span class="btn btn-info"> <?php echo $rows ['status']; ?> </span></td>

</tr>
<?php } ?>

</table>



</div>
</div>
</div>
</div>
</div>


<?php

include ('footer.php');

?>