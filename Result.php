<!DOCTYPE html>
<html lang="en">

<head>

 <title>The Cab</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="Result.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body id="page-top">

<nav class="navbar navbar-default navbar-fixed-top navbar-default">
  <div class="container-fluid">
  
    <div class="navbar-header">
       <a class="navbar-brand" href="#page-top">LOGO IMAGE</a>
    </div>

  <div class="nav navbar-nav  navbar-right">
    <ul class="nav navbar-nav">
          <li><a href="Home.html">About</a></li>
          <li><a href="Home.html">Contact</a></li>
   </ul>
    <ul class="nav navbar-nav">
      <li><a href="Profile.html"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
      <li><a href="Home.html"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
    </ul>
  </div>

  </div>
  
</nav>

<div class="find_section">
 
  <div class="container" id="search">
  <div class="row">
   
    <div class="col-lg-12 text-center">
            <span>MONTHLY CAB</span>
    </div>

    </div>
  </div>

</div>

<div class="search_form">
  <div class="container" id="select">
  <div class="row">
  
  <div class="col-xs-12 col-md-3">
   
    <div class="searchLeft">
      <h2 style="font-size: 40px; font-weight:600; color:#FF7733; ">FIND A CAB</h2>
    </div>
    
  </div>
  
<div class="col-xs-12 col-md-6">
   
    <form name="frm" class="form-inline">
     
         <div class="searchRight">
   		
    		<div class="selectcity form-group">
			         
            <script type= "text/javascript" src="Main.js"></script>  

            <select id="cities" name="cities" value="<?php echo $cities;?>" class="drbdn" style="font-size: 18px;" disabled>     </select>	

        </div>
            
            <div class="selectcity searcharea form-group">
                       	
            	 <select id="areas" name="areas" value="<?php echo $areas;?>" class="drbdn" style="font-size:18px;" disabled>     </select>
           	
            </div>
                         
            <div class="search_btn">
               <input type="submit" name="" value="Search!" class="search_sub" disabled> 
            </div>
    </div>

  <script language="javascript">
  
  populateCities("cities", "areas");
  populateCities("cities2");
  
  </script>  
    
</form>

</div>
    
  </div>
  </div>
</div>


<div class="searchresult" id="searchresult">

  <div class="container">

<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$cities = $_POST['cities'];
$areas = $_POST['areas'];


try
{

$query3 = "SELECT * FROM cab WHERE city='$cities' AND area='$areas'";
$result3=mysqli_query($conn,$query3) or die("Error: ".mysqli_error($conn));


if ($result3->num_rows > 0) {

    echo "<table cellspacing='0' cellpadding='0' width='100%'' align='center' border='1px solid black'>";
    echo"<tr><th style='color:#FF0000; background-color:#80FF80;   padding:15px;
    text-align:center; '>Name</th><th style='color:#FF0000; background-color:#80FF80;   padding:15px;
    text-align:center; '>Phone</th><th style='color:#FF0000; background-color:#80FF80;   padding:15px;
    text-align:center; '>Email</th><th style='color:#FF0000; background-color:#80FF80;   padding:15px;
    text-align:center; '>Website</th><th style='color:#FF0000; background-color:#80FF80;   padding:15px;
    text-align:center; '>Seats Remaining</th><th style='color:#FF0000; background-color:#80FF80;   padding:15px;
    text-align:center; '>Ratings</th></tr>";
    
    while($row = mysqli_fetch_assoc($result3)) {
       echo"<tr><td style='color:#FFFFFF; background-color:#000000;  padding:15px;
    text-align:center; '>{$row['comp_name']}</td><td style='color:#FFFFFF; background-color:#000000;   padding:15px;
    text-align:center; '>{$row['phone']}</td><td style='color:#FFFFFF; background-color:#000000;   padding:15px;
    text-align:center; '>{$row['email']}</td><td style='color:#FFFFFF; background-color:#000000;   padding:15px;
    text-align:center; '>{$row['website']}</td><td style='color:#FFFFFF; background-color:#000000;   padding:15px;
    text-align:center; '>{$row['seats']}</td><td style='color:#FFFFFF; background-color:#000000;   padding:15px;
    text-align:center; '>{$row['ratings']}</td></tr>";
    }
    echo "</table>";
} 

else {
    echo "<p style='text-align:center;'><b>No Results</b></p>";
}

} //closiing try

catch( Exception $e)
{ echo "Exception Occured. Try Again.";}

$conn->close();

?>


  </div>

</div>




</body>

<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center" style="background-color:#000000;padding-bottom:3% !important;padding-top:3% !important;">
  <h4 style="color:#FFFFFF;">Follow Us</h4>
  <a class="w3-button w3-large w3-deep-orange" href="https://www.facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-deep-orange" href="https://www.twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-deep-orange" href="https://www.plus.google.com" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-deep-orange" href="https://www.instagram.com" title="Google +"><i class="fa fa-instagram"></i></a>
</footer>

</html>
