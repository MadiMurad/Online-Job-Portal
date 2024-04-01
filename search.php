<?php 

include('connection.php');
include('header.php');
include('sidebar.php');
?>
 
 
 
<div class="container">
<div class="row">
<div class="col-lg-12" style="margin-top: 50px;">
<h3>Search Results </h3>
<hr>


<table id="myTable" class="table table-bordered">
		    <thead>
		        <tr>
    		        
    		        <th> Job Title </th>

<th> Location </th>
<th> Industory </th>
<th> Total Positations</th>
<th> Role </th>
<th>Total Salary</th>
<th>Job Post Date</th>
<th>Apply Last Date</th>
<th>Required Job Experance</th>
<th>Gender</th>
<th>Age Limit</th>
<th>Education</th>
<th>Job Discription</th>
					
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
<?php

if (isset ($_REQUEST['search'])){

$title = $_POST['record'];

		$xyz= "select * from jobs where id like '%$title%' OR title like '%$title%' OR area like '%$title%'";

		
		$sql = mysqli_query($link, $xyz);
		
		$sql2 = mysqli_num_rows ($sql);
		
		if (!$sql2 > 0) {
			
			echo "<h3 align='center'> Record not found..!</h3>";
		}
		else {
		
		while ($rows= mysqli_fetch_array($sql)) {

		?>

<td> <?php echo $rows ['title']; ?> </td>

<td> <?php echo $rows ['location']; ?> </td>
<td> <?php echo $rows ['area']; ?> </td>
<td> <?php echo $rows ['positations']; ?> </td>
<td> <?php echo $rows ['role']; ?> </td>
<td> <?php echo $rows ['salary']; ?> </td>
<td> <?php echo $rows ['post_date']; ?> </td>
<td> <?php echo $rows ['last_date']; ?> </td>
<td> <?php echo $rows ['experance']; ?> </td>
<td> <?php echo $rows ['gender']; ?> </td>
<td> <?php echo $rows ['age_limit']; ?> </td>
<td> <?php echo $rows ['education']; ?> </td>
<td> <?php echo $rows ['description']; ?> </td>
				
				</tr>
				
				<?php }}} ?>
    </tbody>
    </table>
</div> <!-- row.// -->

</div>
</div>

<!--container end-->
<br>
<br>
<br>


    <?php 
include ('footer.php');
 ?>

