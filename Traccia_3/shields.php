<?php
abstract class Shield{
    protected $shieldPower;
    protected $shieldCharge;
    public function __construct(int $shieldPower, int $shieldCharge){
        $this->shieldPower = $shieldPower;
        $this->shieldCharge = $shieldCharge;
    }
    abstract protected function activatingShields();
}

class BodyShield extends Shield{
    public function activatingShields(){
        echo "Body Shields Activated.\n";
        echo "Body Shields Power ----> $this->shieldPower.\n";
        echo "Body Shields Charged, total power ----> $this->shieldCharge.\n\n";
    }
}
class LegShield extends Shield{
    public function activatingShields(){
        echo "Legs Shields Activated.\n";
        echo "Legs Shields Power ----> $this->shieldPower.\n";
        echo "Legs Shields Charged, total power ----> $this->shieldCharge.\n\n";
    }
}
class ArmShield extends Shield{

    public function activatingShields(){
        echo "Arms Shields Activated.\n";
        echo "Arms Shields Power ----> $this->shieldPower.\n";
        echo "Arms Shields Charged, total power ----> $this->shieldCharge.\n\n";
    }
}
