<?php

class PoliczWyrazy{


public static  $s = "Metoda policzWyrazy() zwraca liczbę wyrazów w danym tekście";

public static function policzWyrazy($t){
    return count(explode(" ",$t));
}

}

?>