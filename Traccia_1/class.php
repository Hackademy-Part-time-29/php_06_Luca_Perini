<?php
//TRACCIA 1

abstract class Category {
    abstract protected function getMyCategory();
}

class Actuality extends Category {
    public function getMyCategory() {
        echo "Actuality\n";
    }
}

class Sport extends Category {
    public function getMyCategory() {
        echo "Sport\n";
    }
}

class Gossip extends Category {
    public function getMyCategory() {
        echo "Gossip\n";
    }
}

class History extends Category {
    public function getMyCategory() {
        echo "History\n";
    }
}


