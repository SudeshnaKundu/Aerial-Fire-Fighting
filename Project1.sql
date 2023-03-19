

CREATE TABLE Aircraft (
    ACModel VARCHAR(255) NOT NULL,
    ACType VARCHAR(255),
    FlightSpeed INT,
    FuelCapacity INT,
    MissionRange INT,
    WaterCapacity INT,
    PRIMARY KEY (ACModel)
);

CREATE TABLE Airfield (
    AFID VARCHAR(255) NOT NULL,
    Runways INT,
    Hangers INT,
    LOC_LAT INT,
    LOC_LONG INT,
    Imag VARCHAR(255),
    PRIMARY KEY (AFID)
);

CREATE TABLE Location (
    LocationID VARCHAR(255) NOT NULL,
    Vegetation ENUM('Low', 'Medium', 'High'),
    Terrain ENUM('Flat', 'Hilly', 'Mountainous'),
    LOC_LAT INT,
    LOC_LONG INT,
    PRIMARY KEY (LocationID)
);

CREATE TABLE AvailableAircraft (
    ACID VARCHAR(255) NOT NULL,
    ACModel VARCHAR(255) NOT NULL,
    AFAssigned VARCHAR(255),
    ACStatus ENUM('Available', 'Unavailable'),
    PRIMARY KEY (ACID),
    FOREIGN KEY (ACModel) REFERENCES Aircraft(ACModel),
    FOREIGN KEY (AFAssigned) REFERENCES Airfield(AFID)
);

CREATE TABLE FireTarget (
    FireNumber VARCHAR(255) NOT NULL,
    FireID VARCHAR(255),
    FireLocation VARCHAR(255) UNIQUE,
    FireStatus ENUM('Active', 'Controlled', 'Extinguished'),
    FireSize ENUM('Small', 'Medium', 'Large'),
    PRIMARY KEY (FireNumber),
    FOREIGN KEY (FireID) REFERENCES AvailableAircraft(ACID)
);