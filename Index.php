<?php
require_once 'Airfields.php';
require_once 'Aircraft.php';
require_once 'FireTarget.php';
require_once 'Location.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Firefighting Dashboard</title>
</head>
<body>
	<h1>Firefighting Dashboard</h1>
	<h2>Fires</h2>
	<form method="get" action="Data_Fires.php">
		<label for="fire_id">Enter Fire ID:</label>
		<input type="text" id="fire_id" name="fire_id">
		<button type="submit">Get Data</button>
	</form>
	<h2>Aircrafts</h2>
	<form method="get" action="Data_Aircraft.php">
		<label for="aircraft_id">Enter Aircraft ID:</label>
		<input type="text" id="aircraft_id" name="aircraft_id">
		<button type="submit">Get Data</button>
	</form>
	<h2>Airfields</h2>
	<form method="get" action="Data_Airfields.php">
		<label for="airfield_id">Enter Airfield ID:</label>
		<input type="text" id="airfield_id" name="airfield_id">
		<button type="submit">Get Data</button>
	</form>
</body>
</html>
