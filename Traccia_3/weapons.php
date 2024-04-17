<?php
abstract class Weapon{
    abstract protected function attack();
}

class IronFist extends Weapon{
    public function attack(){
        echo "Now using Iron Fists.\n";
        echo "_____________________________________";
    }
}

class IronKick extends Weapon{
    public function attack(){
        echo "Now using Iron Kicks.\n";
        echo "_____________________________________";
    }
}

class Minigun extends Weapon{
    public function attack(){
        echo "Minigun Equipped.\n";
        echo "_____________________________________";
    }
}
