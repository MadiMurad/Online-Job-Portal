<?php 
include('header.php');
include('sidebar.php'); 

?>
		<div class="container">
			<br />
			<div class="row">
			<h2 align="center">Selected Job Details</h2>

		<hr>
           
      <?php 
          $qry = "SELECT * FROM jobs where title='".$_GET['view']."'";
          $run = mysqli_query($link, $qry);

          while($rows = mysqli_fetch_array($run))
          {
           $id=  $rows ['id'];
 
 $a = $rows ['title']; 
 $cc = $rows ['company'];
 $detail = $rows ['detail'];  
 $b = $rows ['location']; 
 $c = $rows ['area']; 
 $d = $rows ['positations'];
 $e = $rows ['role']; 
 $f = $rows ['salary']; 
 $g = $rows ['post_date']; 
 $h = $rows ['last_date']; 
 $i = $rows ['experance']; 
 $j = $rows ['gender']; 
 $k = $rows ['age_limit']; 
 $l = $rows ['education']; 
 $m = $rows ['description']; 


?>


<center>
<table class="table table-bordered" style="font-size: 20px;">
	
	<tr>
		<th>Job ID</th>
		<td><?php echo $id; ?></td>
	</tr>

	<tr>
		<th>Job Title</th>
		<td><?php echo $a; ?></td>
	</tr>


	<tr>
		<th>Company Tittle</th>
		<td><?php echo $cc; ?></td>
	</tr>

	<tr>
		<th>Company Details</th>
		<td><?php echo $detail; ?></td>
	</tr>


	<tr>
		<th>City</th>
		<td><?php echo $b; ?></td>
	</tr>


	<tr>
		<th>Job Category</th>
		<td><?php echo $c; ?></td>
	</tr>

	<tr>
		<th>Total Positations</th>
		<td><?php echo $d; ?></td>
	</tr>


	<tr>
		<th>Role</th>
		<td><?php echo $e; ?></td>
	</tr>


	<tr>
		<th>Salary</th>
		<td><?php echo $f; ?></td>
	</tr>

	<tr>
		<th>Post Date</th>
		<td><?php echo $g; ?></td>
	</tr>

	<tr>
		<th>Last Date</th>
		<td><?php echo $h; ?></td>
	</tr>

	<tr>
		<th>Required Experance</th>
		<td><?php echo $i; ?></td>
	</tr>


	<tr>
		<th>Gender</th>
		<td><?php echo $j; ?></td>
	</tr>

<tr>
		<th>Age Limit</th>
		<td><?php echo $k; ?></td>
	</tr>

<tr>
		<th>Qualification</th>
		<td><?php echo $l; ?></td>
	</tr>



<tr>
		<th>Job Details</th>
		<td><?php echo $m; ?></td>
	</tr>


<tr>
		<th></th>


		<td>
			<?php 


if ($_SESSION['name'])
{
  echo '
<a href="apply.php?='.$id.'" class="btn btn-primary">Apply Now</a>
	';		

  }

  else {

  }	
			?>		



		</td>
	</tr>



</table>



</center>







            </div> <!-- col-6 / end -->
            
                <?php  }?>
            
            <br>
            <br>
            
	            
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
</div> <!-- container / end -->

</div>
<?php	include ('footer.php'); ?>

