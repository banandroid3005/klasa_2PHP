<?php

class OkragSferaKula
{
    private ?int $r = null;

    public function __construct(int $a)
    {
        $this->r = $a;
    }

    public function obwod():string
    {
        return number_format(2 * pi() * $this->r,2,","," ");
    }

    public function pole(float $p):string
    {
        return number_format(4 * pi() * $this->r * $this->r,2,","," ");
    }

    public function objetosc(float $v):string
    {
        return number_format((4 * pi() * $this->r ** 3)/3,2,","," ");
    }

}

?>