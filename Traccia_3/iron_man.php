<?php
require_once("power.php");
require_once("shields.php");

class IronMan{
    public $power;
    public $shield;
    public function __construct(Power $power, Shield $shield){
        $this->power=$power;
        $this->shield=$shield;
    }
}

$soldier1 = new IronMan(new Power(), new ArmShield(120, 340));
$soldier1->power->powerOn();
$soldier1->shield->activatingShields();