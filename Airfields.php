class Airfield {
    private $AFID;
    private $runways;
    private $hangers;
    private $L_lat;
    private $L_long;
    private $Image;

    public function __construct($AFID, $runways, $hangers, $L_lat, $L_long, $Image) {
        $this->AFID = $AFID;
        $this->runways = $runways;
        $this->hangers = $hangers;
        $this->L_lat = $L_lat;
        $this->L_long = $L_long;
        $this->Image = $Image;
    }

    public function displayAirfield() {
        echo "Fire Fighting Airfields<br>";
        echo "Airfield ID Code: " . $this->AFID . "<br>";
        echo "Number of Runways: " . $this->runways . "<br>";
        echo "Number of Hangers: " . $this->hangers . "<br>";
        echo "Location: Latitude " . $this->L_lat . ", Longitude " . $this->L_long . "<br>";
    }
}
