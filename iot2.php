<!DOCTYPE html>	
<html>	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content= "width=device-width, initial-scale=1">
		<title>MONITORING DRUNK AND DRIVE</title>	
		<link rel="stylesheet" href="iot2.css"/>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@200&display=swap" rel="stylesheet">
	</head>

	<body> 
	<header>
	<nav id="header-nav" class="navbar navbar-expand-lg" role="navigation">
	<div class="container">
		<div class="navbar-header">
		<div class="navbar-brand">
			<a href="index.html"><center><h1 id="page-title">MQ3 Data Collector</h1></a></center>
		</div>
	
	
	</div>
		<div id="collapsable-nav" class="collapse navbar-collapse">
			<ul id="nav-list" class="nav navbar-nav d-md-none">
		
			</ul>
		</div>
		</div>
	</nav>
</header>
		<div class="container">
		<div class="row">
		  <section>
			  <h2 id="lord">Real time readings:</h2> 
			  <?php
		echo "<html><body><center><table>\n\n";

		// Open a file
		$file = fopen("C:\Users\aksha\Downloads\addresses.csv", "r");

		// Fetching data from csv file row by row
		while (($data = fgetcsv($file)) !== false) {

			// HTML tag for placing in row format
			echo "<tr>";
			foreach ($data as $i) {
				echo "<td>" . htmlspecialchars($i)
					. "</td>";
			}
			echo "</tr> \n";
		}

		// Closing the file
		fclose($file);

		echo "\n</table></center></body></html>";
		?>
		  </section>
		</div>

    <div class="row">
      <section>
        <h2 id="percy">Detected at node:</h2> 
        <p id="p2">
 
        </p>
      </section>
  </div>

  <div class="row">
    <section3>
      <h2 id="harry">Timestamp:</h2>  
      <p id="p3">

      </p>
    </section3>
  </div>
  </div>
 

  </body>
</html>
