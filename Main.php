<!DOCTYPE html>
<html lang="en">

<head>

 <title>The Cab</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="database.php">
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 <style>

  body {font: 400 17px Century Gothic; line-height: 1.8; }
  
  .container-fluid {padding: 35px 50px; padding-bottom: 15px !important; }
  
  .navbar { margin-bottom: 0; background-color: #000000; z-index: 9999; border: 0; font-size: 14px !important; line-height: 1.5; letter-spacing: 5px; border-radius: 0; font-family: Century Gothic;}

  .navbar li a, .navbar .navbar-brand {color: #FFFFFF !important;}

  .navbar-nav li a:hover, .navbar-nav li.active a {color: #F4511E !important; background-color: #FFFFFF !important; font-weight: bold !important;}
	 
  .navbar-default .navbar-toggle {border-color: transparent; color: #FFFFFF;}
	 
   div#search { margin-top: 7.5% !important; padding-top: 1.5% !important; } 
   div#select { margin-top: 1% !important; padding: 1% 0 2% 10% !important; } 
	 
.find_section{ background:#808080; height:100px;}
	 
.find_section div span:hover {text-decoration:none;}
	 
.find_section div span {color:#FFFF00; font-weight:600; font-size:35px;  padding-bottom: 20px; }
	 
.search_form{ background:#CCCCCC; padding:30px 0 22px 0; margin-top: 1% !important;}
	 
.search_form .searchLeft{ float:left; position:relative;}
	 
.search_form .searchRight{float: left;  border:1px solid #D7D5D5; background:#FFFFFF; height:63px; border-radius:30px; padding:0 22px 0 32px;}	
	
.searchRight .selectcity{ padding:22px 0 17px 0; border-right:1px solid #D7D5D5; }

.searchRight .searcharea select{min-width:140px;}
		 
.searchRight .selectcity select{border:none; font-size:15px; color:#666666 !important; font-weight:600; font-style:italic;}
	 
.searchRight .search_btn{ float:right;  padding:15px 0px 0px 8px; }
	 
.search_btn .search_sub{ font-size:20px; border:none; background:#000000; border-radius:30px; color:#FFBB99; padding:4px 25px; cursor:pointer;}
	 
.searchLeft span{ font-size:33px; color:#0000; display:inline-block; padding:20px 6px 0 0; float:left;}
	 
.search_form .searchRight { height: initial; float: none; }
  
  </style>
  
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
   
    <form name="frm" class="form-inline" method="POST" action="Result.php">
     
         <div class="searchRight">
   		
    		<div class="selectcity form-group">
			         
            <script type= "text/javascript" src="Main.js"></script>  

            <select id="cities" name="cities" value="cities" class="drbdn" style="font-size: 18px;">     </select>	

        </div>
            
            <div class="selectcity searcharea form-group">
                       	
            	 <select id="areas" name="areas" value="areas" class="drbdn" style="font-size:18px;">     </select>
           	
            </div>
                         
            <div class="search_btn">
               <input type="submit" value="Search!" class="search_sub"> 
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



</body>
</html>
