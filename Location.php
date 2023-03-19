class Location {
    private $LID;
    private $vegetation;
    private $terrain;
    private $L_lat;
    private $L_long;

    public function __construct($LID, $vegetation, $terrain, $L_lat, $L_long) {
        $this->LID = $LID;
        $this->vegetation = $vegetation;
        $this->terrain = $terrain;
        $this->L_lat = $L_lat;
        $this->L_long = $L_long;
    }

    public function displayLocation() {
        echo "Fire Location: " . $this->LID . "\n";
        echo "Location ID: " . $this->LID . "\n";
        echo "Vegetation: " . $this->vegetation . "\n";
        echo "Terrain: " . $this->terrain . "\n";
        echo "Latitude: " . $this->L_lat . "\n";
        echo "Longitude: " . $this->L_long . "\n";
    }
}
