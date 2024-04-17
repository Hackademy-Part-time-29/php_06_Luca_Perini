<?php
//TRACCIA 4
trait Calculator {
    public function sum($a, $b) { 
        return $a + $b; 
    } 
    public function sub($a, $b) { 
        return $a - $b; 
    } 
    public function mul($a, $b) { 
        return $a * $b; 
    } 
    public function div($a, $b) { 
        return $a / $b; 
    } 
    public function sqr($a){ 
        return sqrt($a); 
    }
}
class Rettangolo {
    use Calculator;
    private $base;
    private $altezza;
    public function __construct($base, $altezza) {
        $this->base = $base;
        $this->altezza = $altezza;
    }
    public function calcolaArea() {
        return $this->mul($this->base, $this->altezza);
    }
    public function calcolaPerimetro() {
        return $this->sum($this->mul(2, $this->base), $this->mul(2, $this->altezza));
    }
    public function calcolaDiagonale() {
        $baseQuadrato = $this->mul($this->base, $this->base);
        $altezzaQuadrato = $this->mul($this->altezza, $this->altezza);
        $sommaQuadrati = $this->sum($baseQuadrato, $altezzaQuadrato);
        return $this->sqr($sommaQuadrati);
    }
}
$rettangolo = new Rettangolo(5, 3);
echo "Area: " . $rettangolo->calcolaArea() . "\n";
echo "Perimetro: " . $rettangolo->calcolaPerimetro() . "\n";
echo "Diagonale: " . $rettangolo->calcolaDiagonale() . "\n";