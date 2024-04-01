<?php

include('header.php');
include('sidebar.php');


if (isset($_POST['submit'])) {

$name = 	$_POST['name'];

$subject = $_POST ['subject'];
$msgs =   $_POST ['message'];

$insert = "insert into feed_back (name, subject, msgs) values ('$name', '$subject', '$msgs')";	

$sql = mysqli_query ($link, $insert);

if ($sql) {
	
	echo "<script> window.alert ('Thanks Your Feed back has been Received..!!') </script>";
}

else {
	
	echo "not";
}


}	


?>

      
<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm" style="    margin: 70px 0px 70px 0px; color: #000;">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Give Your Feed Back</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" value="<?php echo $_SESSION['name']; ?>" class="form-control" readonly required>
              </div>
            </div>
			
	
			
			
			            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Subject</label>
              <div class="col-md-9">

<input id="name" name="subject" type="text" class="form-control" required>


              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" required></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
			<div class="col-md-3"></div>
              <div class="col-md-9 text-right">
                <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>



<br>
<br>
<br>






<?php include('footer.php'); ?>