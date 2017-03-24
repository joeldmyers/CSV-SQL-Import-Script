<?php
	// Run on command line or in browser

	echo "<h1>SIMPLE SQL QUERY GENERATOR FROM CSV SCRIPT</h1>";


	$row = 1;

			if (($handle = fopen("example.csv", "r")) !== FALSE) {
			  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			    $num = count($data);
			    // echo "<p> $num fields in line $row: <br /></p>\n";
			    $row++;
			    
			    $query = "INSERT INTO `products` (`sku`,`description`,`color`,`detail`,`mfr`) VALUES ('";
			    $query .= $data[0]; // Sku
				$query .= "','";
			    $query .= $data[1]; // Description
			    $query .= "','";
			    $query .= $data[2]; // Color
			    $query .= "','";
			   	$query .= $data[3]; // Detail
			    $query .= "','";
			   	$query .= $data[4]; // Manufacturer
			    $query .= "');";


			    echo $query . "<br /><br />";

			  }
			  fclose($handle);
			}


?>