class Aircraft {
    private $IDNumber;
    private $model;
    private $type;
    private $flightSpd;
    private $fuelReq;
    private $missionRng;
    private $waterCap;

    public function __construct($IDNumber, $model, $type, $flightSpd, $fuelCap, $missionRng, $waterCap) {
        $this->IDNumber = $IDNumber;
        $this->model = $model;
        $this->type = $type;
        $this->flightSpd = $flightSpd;
        $this->fuelReq = $fuelCap;
        $this->missionRng = $missionRng;
        $this->waterCap = $waterCap;
    }

    public function displayAircraft() {
        echo "Aircraft Model: " . $this->model . "<br>";
        echo "Aircraft Type: " . $this->type . "<br>";
        echo "Flight Speed: " . $this->flightSpd . "<br>";
        echo "Fuel Capacity: " . $this->fuelReq . "<br>";
        echo "Mission Range: " . $this->missionRng . "<br>";
        echo "Water Capacity: " . $this->waterCap . "<br>";
    }
}
