<?php

abstract class Rocket{
    protected $rocketCharge;
    public function __construct(int $rocketCharge){
        $this->rocketCharge = $rocketCharge;
    }
    abstract protected function activatingRockets();
}

class Jetpack extends Rocket{
    public function activatingRockets(){
        if($this->rocketCharge == 100){
            echo "Jetpack full-charged. Ready to fly.\n";
        } else if ($this->rocketCharge < 100 and $this->rocketCharge > 0){
            echo "Warning! The jetpack's charge is not at 100% ($this->rocketCharge%). The flight may be interrupted.\n\n";
        } else if ($this->rocketCharge == 0){
            echo "No battery! Jetpack activation failed.\n Please charge your Jetpack.\n\n";
        } else{
            echo "(JETPACK CHARGE POWER NOT)Please, insert a value between 0 and 100.\n\n";
        }
        
    }
}
class LegRocket extends Rocket{
    public function activatingRockets(){
        echo "Leg Rockets Activated.\n";
    }
}

