// Include the Airfield class
include_once('Airfield.php');

// Create an Airfield object
$airfield = new Airfield($AFID, $runways, $hangers, $L_lat, $L_long, $Image);

// Call the displayAirfield method to display the airfield information
$airfield->displayAirfield();
