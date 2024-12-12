<?php

class Prostopadloscian{

    private ?float $wl1  = null;
    private ?float $wl2  = null;
    private ?float $wl3  = null;

    public function __construct(float $a,float $b,float $c){
        $this->wl1 = $a;
        $this->wl2 = $b;
        $this->wl3 = $c;
    }

    public function przekatnaBryly():float{
        return sqrt(($this->wl1 ** 2) + ($this->wl2 ** 2) + ($this->wl3 ** 2));
    }

}

?>