<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
	<meta name="description" content="website description" />
	<meta name="keywords" content="website keywords, website keywords" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style2.css" title="style" />
    <title>KML Layers</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
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
    <div id="map"></div>
    <script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 41.876, lng: -87.624}
        });

        var ctaLayer = new google.maps.KmlLayer({
          url: 'https://people.cs.clemson.edu/~sohamap/ceftrails/trails/doc.kml',
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8qcgMYlYfZZzHI_WYEiZTPNj8boqBSvg&callback=initMap">
    </script>

  </body>
</html>