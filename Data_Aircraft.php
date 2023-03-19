// Include the class file
require_once('Aircraft.php');

// Create an object of the class
$aircraft = new Aircraft($IDNumber,$model,$type,$flightSpd,$fuelCap,$missionRng,$waterCap);

// Call the methods of the class
$aircraft->displayAircraft();

