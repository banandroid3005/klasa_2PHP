<?php

class Arytmetyka{
    public ?float $liczbaA = null;
    public ?float $liczbaB = null;

    public function __construct(float $a, float $b)
    {
        $this->liczbaA = $a;
        $this->liczbaB = $b;
    }

    public function suma()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
              return $this->liczbaA + $this->liczbaB;
        }
        return null;
    }
    public function roznica()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
              return $this->liczbaA - $this->liczbaB;
        }
        return null;
    }
    public function iloczyn()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
              return $this->liczbaA * $this->liczbaB;
        }
        return null;
    }
    public function iloraz()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB) && $this->liczbaB!=0){
            return $this->liczbaA / $this->liczbaB;
        }
        return "błąd";
    }
    public function reszta()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB) && $this->liczbaB!=0){
              return $this->liczbaA % $this->liczbaB;
        }
        return "błąd";
    }
    public function potega()
    {
        if(is_numeric($this->liczbaA) && is_numeric($this->liczbaB)){
              return $this->liczbaA ** $this->liczbaB;
        }
        return null;
}
}