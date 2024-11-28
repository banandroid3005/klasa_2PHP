<?php
include_once 'przeciw.php';

class Stozek extends Przeciw{

    private ?float $promien;
    private ?float $wysokosc;

    public function __construct($r,$h){
        $this->promien = $r;
        $this->wysokosc = $h;
    }

    private function PolePodstawy():float{
        return pi() * $this->promien ** 2;
    }

    private function PoleBoczne():float{
        return pi() * $this->promien * $this->PPK($this->promien,$this->wysokosc);
    }
    public function PoleCalkowite():float{
        return $this->PoleBoczne() + $this->PolePodstawy();
    }
    public function Objetosc():float{
        return (pi() * ($this->promien ** 2) * $this->wysokosc)/3;
    }

}

?>