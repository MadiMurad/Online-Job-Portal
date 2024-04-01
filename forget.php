<?php

include('connection.php');
include('header.php');
include('sidebar.php'); 


?>


 <style>

.red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
	padding: 10px 40px 60px;
	margin: 10px 0px 60px;
	border: 1px solid GREY;
	}

</style>
 
 
<div class="container">
<div class="row">
<div class="col-lg-12" style="margin-top:50px">
<h3> Forget Password </h3>
<hr>

    <div class="col-md-12">
    <div class="form-area">  
        <form method="post" action="forget.php">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px;">Registered Email</h3>
            
    				<div class="form-group">
<input type="text" class="form-control" id="name" name="p_book" placeholder="Enter Email" required>
					</div>
				
    <input type="submit" name="search" value="Submit" class="btn btn-info btn-block">
    <a href="index.php" class="btn btn-primary btn-block">Job Seeker Login</a>
        </form>
    </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    

<?php

if (isset ($_REQUEST['search'])){

$title = $_POST['p_book'];
  
    
    
    

		$xyz= "select * from employee where email like '%$title%'";

		
		$sql = mysqli_query($link, $xyz);
		
		$sql2 = mysqli_num_rows ($sql);
		
		if (!$sql2 > 0) {
			
			echo "<h3 align='center'> Record not found..!</h3>";
		}


    
		else {
		
            echo'
            
            <h2> Filter Record </h2>
            <hr>
       
            
            ';
            
            
            
		while ($row= mysqli_fetch_array($sql)) {

		?>

		<h3 align="center" class="alert-success">Password: <?php echo $row['password']; ?> </h3>		
				
		
				
				<?php }}} ?>
 
</div> <!-- row.// -->

</div>
</div> 
<?php
include('footer.php');
?> 