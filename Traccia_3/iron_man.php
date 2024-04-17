<?php
require_once("power.php");
require_once("shields.php");
require_once("rockets.php");
require_once("weapons.php");

class IronMan{
    public $soldierID;
    public $power;
    public $shield;
    public $rocket;
    public $weapon;
    static $counter = 0;
    public function __construct(string $soldierID, Power $power, Shield $shield, Rocket $rocket, Weapon $weapon){
        $this->power=$power;
        $this->shield=$shield;
        $this->rocket=$rocket;
        $this->soldierID=$soldierID;
        $this->weapon=$weapon;
        self::$counter++;
    }
    public function initializing(){
        echo "\nCreating New Soldier: $this->soldierID INITIALIZED.\n";
    }
    public static function counter(){
       echo "Initialized Soldiers: " . self::$counter . "\n";
    }
}

$soldier1 = new IronMan("Soldier1", new Power(), new ArmShield(120, 340), new Jetpack(76), new Minigun());
$soldier1->initializing();
IronMan::counter();
$soldier1->power->powerOn();
$soldier1->shield->activatingShields();
$soldier1->rocket->activatingRockets();
$soldier1->weapon->attack();

$soldier2 = new IronMan("Soldier2", new Power(), new LegShield(60, 230), new LegRocket(100), new IronFist());
$soldier2->initializing();
IronMan::counter();
$soldier2->power->powerOn();
$soldier2->shield->activatingShields();
$soldier2->rocket->activatingRockets();
$soldier2->weapon->attack();

$soldier3 = new IronMan("Fulvio", new Power(), new BodyShield(670, 510), new Jetpack(100), new IronKick());
$soldier3->initializing();
IronMan::counter();
$soldier3->power->powerOn();
$soldier3->shield->activatingShields();
$soldier3->rocket->activatingRockets();
$soldier3->weapon->attack();