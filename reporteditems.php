<!DOCTYPE HTML>
<html>

<head>
  <title>CEF Authoring</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style2.css" title="style" />
  <style>
		 body {
			background-color: black;
		}
    #myItems{
    width: auto;
    height:auto;
    border: 5px solid #bed5cd;
    overflow-x: scroll;
    overflow-y: scroll;
    white-space: nowrap;
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

          <div id="content">
              <!-- insert the page content here -->
      		<h1>Reported Items</h1>

          <?php
            $query = "Select * from reported_items;";
            $result = mysql_query($query) or die("Could not access reported items".mysql_error());
            echo "<div id='myItems'>";
            while($row = mysql_fetch_array($result))
            {        
              echo "<img src='".$row[2]."' alt='".$row[1]."' style='width:248px;height:442px;'>";
              echo "<h4 style='color:red;'> Item name: ".$row[1]."</h4>";
            }
            echo "</div>";
          ?>
          <div id="upload result">
          <?php 
            if(isset($_REQUEST['result']) && $_REQUEST['result']!=0)
            {   
              echo upload_error($_REQUEST['result']);
            }
          ?>
          </div>
          <br/><br/>
          <?php

            $query = "SELECT * from media where username = '".$_SESSION["username"]."';"; 
            $result = mysql_query( $query );
            if (!$result){
               die ("Could not query the media table in the database: <br />". mysql_error());
            }
          ?>
        </div>


      </div>
    </div>
    <div id="footer">
      Copyright &copy; Soham Parekh 2016
    </div>
  </div>
</body>
</html>
