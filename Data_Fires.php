// Include the Fire class
include_once('FireTarget.php');

// Create a Fire object
$fire = new Fire($fireID, $location, $status, $size, $ID);

// Call the displayFire method to display the fire information
$fire->displayFire();
