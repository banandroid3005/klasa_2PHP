<?php

class Gestosc{

    private ?float $p;
    private $substancja;

    public function __construct(float $r,string $s){
        $this->p = $r;
        $this->substancja = $s;
    }

    private function V(){
        return (4 * pi() * $this->p ** 3)/3;
    }
    public function M(){
        if($this->substancja == "Złoto"){
            return 19280 * $this->V();
        } else if($this->substancja == "Gips"){
            return 2350 * $this->V();
        } else if($this->substancja == "Rtęć"){
            return 13534 * $this->V();
        }
        else if($this->substancja == "Woda"){
            return 997 * $this->V();
        }

    }


}

?>