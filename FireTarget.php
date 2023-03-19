class FireTarget {
  private $fireNumber;
  private $fireID;
  private $fireLocation;
  private $fireStatus;
  private $fireSize;

  public function __construct($number, $ID, $location, $status, $size) {
    $this->fireNumber = $number;
    $this->fireID = $ID;
    $this->fireLocation = $location;
    $this->fireStatus = $status;
    $this->fireSize = $size;
  }

  public function displayFireTarget() {
    echo "Targeted Fires\n";
    echo "Fire Number: " . $this->fireNumber . "\n";
    echo "Fire ID: " . $this->fireID . "\n";
    echo "Fire Location: " . $this->fireLocation . "\n";
    echo "Fire Status: " . $this->fireStatus . "\n";
    echo "Fire Size: " . $this->fireSize . "\n";
  }
}
