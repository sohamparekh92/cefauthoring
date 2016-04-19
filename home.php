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
		      <li><a href="trailsample.php">Trails</a></li>

        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->

        <h3>Trails</h3>
        <ul>
          <li>coming soon</li>

        </ul>
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
		<h1>Available Maps</h1>
		<section id="wrapper">
		Click the allow button to let the browser find your location.

		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
			<article>

			</article>
		<script>
		function success(position) {
		  var mapcanvas = document.createElement('div');
		  mapcanvas.id = 'mapcontainer';
		  mapcanvas.style.height = '400px';
		  mapcanvas.style.width = '600px';

		  document.querySelector('article').appendChild(mapcanvas);

		  var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
		  
		  var options = {
			zoom: 15,
			center: coords,
			mapTypeControl: false,
			navigationControlOptions: {
				style: google.maps.NavigationControlStyle.SMALL
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP
		  };
		  var map = new google.maps.Map(document.getElementById("mapcontainer"), options);

		  var marker = new google.maps.Marker({
			  position: coords,
			  map: map,
			  title:"You are here!"
		  });
		}

		if (navigator.geolocation) {
		  navigator.geolocation.getCurrentPosition(success);
		} else {
		  error('Geo Location is not supported');
		}

		</script>
		</section>
      </div>
    </div>
    <div id="footer">
      Copyright &copy; Soham Parekh 2016
    </div>
  </div>
</body>
</html>














