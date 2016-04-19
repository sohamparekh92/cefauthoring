<!DOCTYPE HTML>
<html>

<head>
  <title>CEF Trails Authoring</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style2.css" title="style" />
  <style>
		 body {
			background-color: black;
		}
  </style>
</head>

<body>
  <?php 
    session_start();
    include_once "function.php";
  ?>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
    			<div class="right">				
    				<img src="images/cef_logo.png" alt="Clemson" style="width:100px;height:100px;">
             <h2> Welcome
              <?php
                echo $_SESSION['username'];
              ?>
            </h2>
    			</div>
        </div>
      </div>

      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="home.php">Home</a></li>
          <li><a href="browse.php">Browse</a></li>
          <li><a href="upload.php">Upload</a></li>
          <li><a href="poi.php">Points of Interest</a></li>
          <li><a href="trailsample.php">Trails</a></li>
          <li><a href="reporteditems.php">Reported Items</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
      </div>
      <div id="content">		
	    <h1> Add a Point of Interest </h1>	
        <form method="post" action="setpoi.php" enctype="multipart/form-data" >
          Enter Name: <input type="text" name = "name"></input><br>
          Enter Description: <input type="text" name = "description"></input><br>
          Enter Longitude: <input type="text" name = "longitude"></input><br>
          Enter Longitude: <input type="text" name = "latitude"></input><br>
          <input type="submit" value="Add POI">
        </form>		
       <table style="width:100%">
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Longitude</th>
          <th>Latitude</th>
        </tr>
        <tr>
          <?php
            $query = "Select name, description , longitude, latitude from Points_Of_Interest;";
            $result = mysql_query($query) or die("Could not access points of interest");
            while($row = mysql_fetch_array($result))
            {
              echo "<tr>";
              echo "<td>".$row[0]."</td>";
              echo "<td>".$row[1]."</td>";
              echo "<td>".$row[2]."</td>";
              echo "<td>".$row[3]."</td>";
              echo "</tr>";
            }
          ?>
        </tr>
      </table> 
      </div>
    </div>
    <div id="footer">
      Copyright &copy; Soham Parekh 2016
    </div>
  </div>
</body>
</html>
