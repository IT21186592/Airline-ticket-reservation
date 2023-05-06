<?php
session_start();
include 'config.php';

if (isset($_POST ['submit']))
{
#set feilds name 
      $d_loc = $_POST["deptlocation"];
      $d_date = $_POST["depDate"];
	  $d_time = $_POST["depTime"];
      $a_loc = $_POST["arrlocation"];
      $a_date = $_POST["arrDate"];
	  $a_time = $_POST["arrTime"];
	  $staff_id = $_POST["staffID"];
	  
$sql = "INSERT INTO flight(fid,d_loc,d_date,d_time,a_loc,a_date,a_time,s_id) 
        VALUES('','$d_loc','$d_date','$d_time','$a_loc,'$a_date','$a_time','$staff_id')";
		
#check connection 
if(mysqli_query($connection,$sql))
{
   
   echo"<script>alert('connection succesfull')</script>";
}
else{
   echo"<script>alert('Error in your connection')</script>";
   die($connection->connect_error);
}
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Sri Lankan Airlines | Admin section - Flights</title>
   <link rel="stylesheet" href="../styles/Admin.css">
</head>
<body>
<!--header-->
   <section class="sub-header">
     <nav>
        <a href="Home page.html"><img src="../images/logo.png"></a>
		<!-- nav bar -->
		<div class="nav-links" >
		    <ul>
			    <li><a href="Admin manage feedback.html">MANAGE FEEDBACK</a></li>
				<li><a href="Admin manage users.html">MANAGE USERS</a></li>
				<li><a href="Admin manage payments.php">MANAGE PAYMENTS</a></li>
				<li><a href="Admin manage flights.html">FLIGHTS</a></li>
			</ul>	
		</div>		
	 </nav>
	 <h1>Add Flights</h1>
   </section>

<!--- Add flight page content --->    
    
   <section class="admin-content">
   
     <!--- Admin buttons --->
     <div class="flight-btn">
	    <a href="Admin add flights.php" class="admin-btn"> Add flights </a>
		<a href="Admin manage flights.html" class="admin-btn"> Manage flights </a>
     </div>
     	 
     <div class="content">
	 
	     <!--- add flight form --->
	    <form method="POST" class="new-flight" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" >
		
		    <!--- <label class="input-label">Enter flght ID: </label>
		    <input type="text" name="flightID" placeholder="Enter flight ID" class="txt-input" required>-->
			
			<label class="input-label">Enter departing Location: </label>
		    <input type="text" name="deptlocation" placeholder="Enter Departing location" class="txt-input" required>
		
		    <label class="input-label">Enter departure date: </label>
		    <input type="text" name="depDate" placeholder="Enter Departure date" class="txt-input" required>
		
		    <label class="input-label">Enter departure Time: </label>
		    <input type="text" name="depTime" placeholder="Enter Departure time" class="txt-input" required>
		
			<label class="input-label">Enter arriving Location: </label>
		    <input type="text" name="arrlocation" placeholder="Enter arriving location" class="txt-input" required>
		
		    <label class="input-label">Enter arrive date: </label>
            <input type="text" name="arrDate" placeholder="Enter arrive date" class="txt-input" required>
		
		    <label class="input-label">Enter arriving time: </label>
		    <input type="text" name="arrTime" placeholder="Enter arriving time" class="txt-input" required>
		
		    <label class="input-label">Enter Your staff ID: </label>
		    <input type="text" name="staffID" placeholder="Enter your staff ID" class="txt-input" required>
		
		    <button type="reset" class="admin-btn"> Clear </button>
		    <button type="submit" name="submit" class="admin-btn"> Add Flight </button>
		</form>
     </div>	
	 
   </section>
   
</body>
</html>
   
