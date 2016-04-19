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
    session_start()
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

        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->

        <!--<h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>-->
      </div>
      <div id="content">
        <!-- insert the page content here -->
		<h1>Select a file to upload</h1>
    <form method="post" action="media_upload_process.php" enctype="multipart/form-data" >
		<h1> Add a Media </h1>

      Enter Title: <input type="text" name = "title"></input>
   
      <p style="margin:0; padding:0">
      <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
       Add a Media: <label style="color:#663399"><em> (Each file limit 10M)</em></label><br/>
       <input  name="file" type="file" size="50" />
      
      <input value="Upload" name="submit" type="submit" />
      </p>
     
                  
    </form>
	<h1> Add a Trail </h1>
	
	
	    <form method="post" action="trail_upload_process.php" enctype="multipart/form-data" >

      Enter Title: <input type="text" name = "title"></input>
	  Enter Comment: <input type="text" name = "title"></input>
   
      <p style="margin:0; padding:0">
      <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
        Add a Trail: <label style="color:#663399"><em> (Each file limit 10M)</em></label><br/>
       <input  name="file" type="file" size="50" />
      
      <input value="Upload" name="submit" type="submit" />
      </p>
     
                  
    </form>

		
      </div>
    </div>
    <div id="footer">
      Copyright &copy; Soham Parekh 2016
    </div>
  </div>
</body>
</html>
