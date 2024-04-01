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
    border: 1px solid gray;
    }

</style>

<div class="container-fluid" style="background-color: #1a658b;">
	
	
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
        <!-- Indicators -->
        <ol class="left carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
          
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/1.png" alt="..." style="height:280px; width:1600px">
            </div>
        
            <div class="item">
                <img src="images/2.jpg" alt="..." style="height:280px; width:1600px">
            </div>
        
            <div class="item">
                <img src="images/3.png" alt="..."style="height:280px; width:1600px">
            </div>

        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
  
    </div>
</div>

<div class="container">
	<div class="row">
	<div class="col-lg-12">
	
<center style="margin: 0px; padding: 60px;">

<h2> Welcome to Daily Jobs Alerts   </h2>
	<hr>

	<p>
    This job portal is a responsive website which offers users to search different jobs using filters. Admin can post the jobs on the website and will provide all the details of the job: Title, Location, domain, Experience required, description of the job, timings and link of the website to apply or Email address etc. Admin can specify the categories (domain) of the job like Software Engineering, Teaching, Administration, Marketing, Medical etc. User can view all the jobs without logging in and can apply for a job but to apply for jobs he/she must have to register with portal.



	
	</p>
	
</center>	
	</div>
	</div>
	</div>

<div class="container">
<div class="col-sm-12">
    <div class="form-area">  
        <form method="post" action="search.php">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px;">Search Record</h3>
            
                 <div class="form-group">
      
      <input type="text" class="form-control" placeholder="Type Desired Record" name="record">
    </div>
                
    <input type="submit" name="search" value="Search" class="btn btn-info btn-block">
        </form>
    </div>
</div>
 
</div>
</div>
    </div>


<div class="container">
    <div class="row">
    <div class="col-lg-12">
    <center><h2> All Featured Jobs </h2></center>
   
   <hr>
   <br><br>


<?php
        
        $xyz= "select * from jobs";
        
        $sql = mysqli_query($link, $xyz);
        
        while ($rows= mysqli_fetch_array($sql)) {
            $id         = $rows['id'];
            $name       = $rows['title'];
        
        ?>


<div class="col-md-4" style="margin-bottom:50px">
    <figure class="card card-product" style="border: 1px solid !important; background-color: #cccccc57 !important; border-radius: 10px !important;">
        <div class="img-wrap"> 
            <img src="images/96555_01.png" width="200px" height="200px" style="margin:20px 74px;">
        </div>
        <figcaption class="info-wrap">
            <h4 class="title text-dots" align="center"><?php echo $name; ?></h4>
        </figcaption>

 <a href="jobs.php?view=<?php echo $name; ?>" class="btn btn-info btn-block">View Details</a>
        
    </figure> <!-- card // -->
</div> <!-- col // -->

        <?php } ?>

<!--container end-->
</div></div></div>

<br>
<br>
<br>











<?php include ('footer.php'); ?>