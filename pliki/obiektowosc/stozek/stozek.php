<?php
include_once 'przeciw.php';

class Stozek extends Przeciw{

    private  $promien;
    private  $wysokosc;

    public function __construct($r,$h){
        $this->promien = $r;
        $this->wysokosc = $h;
    }

    private function PolePodstawy(){
        return pi() * $this->promien ** 2;
    }

    private function PoleBoczne(){
        return pi() * $this->promien * $this->PPK($this->promien,$this->wysokosc);
    }
    public function PoleCalkowite(){
        return $this->PoleBoczne() + $this->PolePodstawy();
    }
    public function Objetosc(){
        return (pi() * ($this->promien ** 2) * $this->wysokosc)/3;
    }

}

?>